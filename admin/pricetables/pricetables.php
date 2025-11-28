<?php
session_start();

// 1. Kiểm tra đăng nhập
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}

// 2. Kết nối Database (SỬA LỖI Ở ĐÂY)
// Đi từ thư mục 'pricetables' ra 'admin' (../) rồi vào 'config'
require_once '../config/db_connection.php';

// Kiểm tra xem biến $conn có tồn tại không để tránh lỗi Fatal Error
if (!isset($conn) || $conn->connect_error) {
    die("Lỗi kết nối Database: Biến \$conn không tồn tại hoặc kết nối thất bại.");
}

// --- XỬ LÝ LOGIC ---

// Xử lý Xóa Gói
if (isset($_GET['delete_plan'])) {
    $id = intval($_GET['delete_plan']);
    $conn->query("DELETE FROM pricing_plans WHERE id=$id");
    header("Location: pricetables.php");
    exit();
}

// Xử lý Xóa Dòng So Sánh
if (isset($_GET['delete_comp'])) {
    $id = intval($_GET['delete_comp']);
    $conn->query("DELETE FROM pricing_comparisons WHERE id=$id");
    header("Location: pricetables.php");
    exit();
}

// Lấy dữ liệu hiển thị
$plans = $conn->query("SELECT * FROM pricing_plans");
$comparisons = $conn->query("SELECT * FROM pricing_comparisons ORDER BY sort_order ASC");
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<style>
    /* Con trỏ chuột hình bàn tay khi di vào dòng để kéo */
    .draggable-row {
        cursor: move;
    }

    /* Hiệu ứng khi đang kéo */
    .ui-sortable-helper {
        background: #e9ecef;
        display: table;
    }
</style>

<div class="content flex-grow-1 p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3><i class="fas fa-tags me-2"></i> Quản lý Gói Dịch Vụ</h3>
        <a href="form_plan.php" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm Gói Mới</a>
    </div>

    <div class="card shadow-sm mb-5">
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Tên Gói</th>
                        <th>Giá (Tháng)</th>
                        <th>Giá (Năm)</th>
                        <th>Nổi bật</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($plans->num_rows > 0): ?>
                        <?php while ($row = $plans->fetch_assoc()): ?>
                            <tr>
                                <td class="fw-bold"><?php echo htmlspecialchars($row['name']); ?></td>
                                <td>
                                    <?php
                                    if (is_numeric($row['price_monthly'])) {
                                        echo number_format($row['price_monthly']) . 'đ';
                                    } else {
                                        echo htmlspecialchars($row['price_monthly']);
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (is_numeric($row['price_yearly'])) {
                                        echo number_format($row['price_yearly']) . 'đ';
                                    } else {
                                        echo htmlspecialchars($row['price_yearly']);
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php if ($row['is_popular']): ?>
                                        <span class="badge bg-warning text-dark">Phổ biến</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Thường</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="form_plan.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="pricetables.php?delete_plan=<?php echo $row['id']; ?>" onclick="return confirm('Xóa gói này?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">Chưa có gói dịch vụ nào.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
        <h3><i class="fas fa-table me-2"></i> Bảng So Sánh Tính Năng</h3>
        <a href="form_comparison.php" class="btn btn-success"><i class="fas fa-plus"></i> Thêm Dòng So Sánh</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="alert alert-info py-2">
                <small><i class="fas fa-arrows-alt"></i> <b>Mẹo:</b> Bạn có thể dùng chuột <b>Kéo & Thả</b> các dòng bên dưới để sắp xếp lại thứ tự hiển thị.</small>
                <span id="save_status" class="float-end fw-bold text-success" style="display:none;">Đã lưu thứ tự!</span>
            </div>

            <table class="table table-bordered table-hover align-middle">
                <thead class="bg-light">
                    <tr>
                        <th width="5%" class="text-center"><i class="fas fa-arrows-alt-v"></i></th>
                        <th width="5%" class="text-center">STT</th>
                        <th width="30%">Tên Tính Năng</th>
                        <th>Basic</th>
                        <th>Professional</th>
                        <th>Enterprise</th>
                        <th width="10%">Hành động</th>
                    </tr>
                </thead>
                <tbody id="sortable_list">
                    <?php
                    $stt_count = 1;
                    if ($comparisons->num_rows > 0):
                        while ($row = $comparisons->fetch_assoc()):
                    ?>
                            <tr id="item_<?php echo $row['id']; ?>" class="draggable-row">
                                <td class="text-center text-muted"><i class="fas fa-bars"></i></td>

                                <td class="text-center fw-bold index-number"><?php echo $row['sort_order'] > 0 ? $row['sort_order'] : $stt_count; ?></td>

                                <td class="fw-bold"><?php echo htmlspecialchars($row['feature_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['val_basic']); ?></td>
                                <td><?php echo htmlspecialchars($row['val_pro']); ?></td>
                                <td><?php echo htmlspecialchars($row['val_enterprise']); ?></td>
                                <td>
                                    <a href="form_comparison.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="pricetables.php?delete_comp=<?php echo $row['id']; ?>" onclick="return confirm('Xóa dòng này?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                            $stt_count++;
                        endwhile;
                    else:
                        ?>
                        <tr>
                            <td colspan="7" class="text-center">Chưa có tính năng so sánh nào.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Kích hoạt tính năng sortable cho tbody có id="sortable_list"
        $("#sortable_list").sortable({
            placeholder: "ui-state-highlight", // Class giữ chỗ khi đang kéo
            cursor: "move",
            axis: "y", // Chỉ cho kéo dọc
            update: function(event, ui) {
                // Khi thả chuột ra -> Gửi Ajax cập nhật DB
                var order = $(this).sortable("serialize");

                $.ajax({
                    url: "update_order.php",
                    method: "POST",
                    data: order,
                    success: function(data) {
                        // Hiện thông báo đã lưu
                        $("#save_status").fadeIn().delay(2000).fadeOut();

                        // Cập nhật lại số hiển thị ở cột STT cho đẹp mắt (không cần F5)
                        var index = 1;
                        $('#sortable_list tr').each(function() {
                            $(this).find('.index-number').text(index);
                            index++;
                        });
                    },
                    error: function() {
                        alert("Lỗi khi cập nhật thứ tự!");
                    }
                });
            }
        });
    });
</script>

<?php include '../includes/footer.php'; ?>