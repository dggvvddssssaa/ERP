<?php
session_start();

// 1. Kiểm tra đăng nhập
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}

// 2. Kết nối Database
require_once '../../config/db_connection.php';

// --- XỬ LÝ LOGIC ---
if (isset($_GET['delete_plan'])) {
    $id = intval($_GET['delete_plan']);
    $conn->query("DELETE FROM pricing_plans WHERE id=$id");
    header("Location: pricetables.php");
    exit();
}

if (isset($_GET['delete_comp'])) {
    $id = intval($_GET['delete_comp']);
    $conn->query("DELETE FROM pricing_comparisons WHERE id=$id");
    header("Location: pricetables.php");
    exit();
}

// Lấy dữ liệu
$plans = $conn->query("SELECT * FROM pricing_plans");
$comparisons = $conn->query("SELECT * FROM pricing_comparisons ORDER BY sort_order ASC");

$path = "../";
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<!-- Jquery cho Kéo thả -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<style>
    .draggable-row {
        cursor: move;
    }

    .ui-sortable-helper {
        background: #f2f4f6;
        display: table;
    }
</style>

<main class="content">
    <?php include '../includes/topbar.php'; ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="../index.php"><svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bảng giá</li>
                </ol>
            </nav>
            <h2 class="h4">Quản lý Bảng giá & Dịch vụ</h2>
        </div>
    </div>

    <!-- PHẦN 1: GÓI DỊCH VỤ -->
    <div class="card border-0 shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="fs-5 fw-bold mb-0">Các Gói Dịch Vụ (Pricing Plans)</h2>
            <a href="form_plan.php" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Thêm Gói
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0">Tên Gói</th>
                            <th class="border-0">Giá (Tháng)</th>
                            <th class="border-0">Giá (Năm)</th>
                            <th class="border-0">Trạng thái</th>
                            <th class="border-0">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($plans->num_rows > 0): ?>
                            <?php while ($row = $plans->fetch_assoc()): ?>
                                <tr>
                                    <td class="fw-bold"><?php echo htmlspecialchars($row['name']); ?></td>
                                    <td class="fw-normal text-success">
                                        <?php echo is_numeric($row['price_monthly']) ? number_format($row['price_monthly']) . 'đ' : htmlspecialchars($row['price_monthly']); ?>
                                    </td>
                                    <td class="fw-normal text-success">
                                        <?php echo is_numeric($row['price_yearly']) ? number_format($row['price_yearly']) . 'đ' : htmlspecialchars($row['price_yearly']); ?>
                                    </td>
                                    <td>
                                        <?php if ($row['is_popular']): ?>
                                            <span class="badge bg-warning text-dark"><i class="fas fa-star me-1"></i> Phổ biến</span>
                                        <?php else: ?>
                                            <span class="badge bg-gray-200 text-dark">Thường</span>
                                        <?php endif; ?>
                                    </td>

                                    <!-- CỘT HÀNH ĐỘNG GÓI DỊCH VỤ -->
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                </svg>
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                                                <a class="dropdown-item d-flex align-items-center" href="form_plan.php?id=<?php echo $row['id']; ?>">
                                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 9.414V13h3.586l6.828-6.828a2 2 0 000-2.828z"></path>
                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Edit (Sửa)
                                                </a>
                                                <div role="separator" class="dropdown-divider my-1"></div>
                                                <a class="dropdown-item d-flex align-items-center text-danger" href="pricetables.php?delete_plan=<?php echo $row['id']; ?>" onclick="return confirm('Xóa gói này?');">
                                                    <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Delete (Xóa)
                                                </a>
                                            </div>
                                        </div>
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
    </div>

    <!-- PHẦN 2: BẢNG SO SÁNH -->
    <div class="card border-0 shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h2 class="fs-5 fw-bold mb-0">Bảng So Sánh Tính Năng</h2>
                <small class="text-muted"><i class="fas fa-arrows-alt"></i> Kéo thả để sắp xếp thứ tự</small>
                <span id="save_status" class="ms-2 fw-bold text-success" style="display:none;">Đã lưu!</span>
            </div>
            <a href="form_comparison.php" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Thêm Tính Năng
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 text-center" style="width:50px;"><i class="fas fa-arrows-alt-v"></i></th>
                            <th class="border-0">Tên Tính Năng</th>
                            <th class="border-0">Basic</th>
                            <th class="border-0">Pro</th>
                            <th class="border-0">Enterprise</th>
                            <th class="border-0">Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="sortable_list">
                        <?php if ($comparisons->num_rows > 0):
                            while ($row = $comparisons->fetch_assoc()): ?>
                                <tr id="item_<?php echo $row['id']; ?>" class="draggable-row">
                                    <td class="text-center text-gray-500"><i class="fas fa-bars"></i></td>
                                    <td class="fw-bold"><?php echo htmlspecialchars($row['feature_name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['val_basic']); ?></td>
                                    <td><?php echo htmlspecialchars($row['val_pro']); ?></td>
                                    <td><?php echo htmlspecialchars($row['val_enterprise']); ?></td>

                                    <!-- CỘT HÀNH ĐỘNG BẢNG SO SÁNH -->
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                </svg>
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                                                <a class="dropdown-item d-flex align-items-center" href="form_comparison.php?id=<?php echo $row['id']; ?>">
                                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 9.414V13h3.586l6.828-6.828a2 2 0 000-2.828z"></path>
                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Edit (Sửa)
                                                </a>
                                                <div role="separator" class="dropdown-divider my-1"></div>
                                                <a class="dropdown-item d-flex align-items-center text-danger" href="pricetables.php?delete_comp=<?php echo $row['id']; ?>" onclick="return confirm('Xóa?');">
                                                    <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Delete (Xóa)
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile;
                        else: ?>
                            <tr>
                                <td colspan="6" class="text-center">Chưa có tính năng nào.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>

<script>
    $(document).ready(function() {
        $("#sortable_list").sortable({
            placeholder: "ui-state-highlight",
            cursor: "move",
            axis: "y",
            update: function(event, ui) {
                var order = $(this).sortable("serialize");
                $.ajax({
                    url: "update_order.php",
                    method: "POST",
                    data: order,
                    success: function(data) {
                        $("#save_status").fadeIn().delay(2000).fadeOut();
                    }
                });
            }
        });
    });
</script>