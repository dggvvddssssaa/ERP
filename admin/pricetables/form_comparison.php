<?php
session_start();
// Điều chỉnh đường dẫn này tùy theo cấu trúc thư mục thực tế của bạn
require_once '../../config/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Giá trị mặc định
$comp = ['feature_name' => '', 'val_basic' => '', 'val_pro' => '', 'val_enterprise' => ''];

// Lấy dữ liệu nếu đang sửa
if ($id > 0) {
    $result = $conn->query("SELECT * FROM pricing_comparisons WHERE id=$id");
    if ($result->num_rows > 0) $comp = $result->fetch_assoc();
}

// Xử lý Submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['feature_name'];
    $v_basic = $_POST['val_basic'];
    $v_pro = $_POST['val_pro'];
    $v_ent = $_POST['val_enterprise'];

    if ($id > 0) {
        $stmt = $conn->prepare("UPDATE pricing_comparisons SET feature_name=?, val_basic=?, val_pro=?, val_enterprise=? WHERE id=?");
        $stmt->bind_param("ssssi", $name, $v_basic, $v_pro, $v_ent, $id);
    } else {
        // Lấy thứ tự lớn nhất để chèn vào cuối
        $last = $conn->query("SELECT MAX(sort_order) as max_sort FROM pricing_comparisons")->fetch_assoc();
        $sort = ($last['max_sort'] ?? 0) + 1;

        $stmt = $conn->prepare("INSERT INTO pricing_comparisons (feature_name, val_basic, val_pro, val_enterprise, sort_order) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $name, $v_basic, $v_pro, $v_ent, $sort);
    }
    $stmt->execute();
    header("Location: pricetables.php");
    exit();
}
$path = "../";
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="content">
    <?php include '../includes/topbar.php'; ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="../index.php"><svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a href="pricetables.php">Bảng giá</a></li>
                    <li class="breadcrumb-item active"><?php echo $id > 0 ? 'Sửa tính năng' : 'Thêm tính năng'; ?></li>
                </ol>
            </nav>
            <h2 class="h4"><?php echo $id > 0 ? 'Sửa Dòng So Sánh' : 'Thêm Dòng So Sánh Mới'; ?></h2>
        </div>
        <a href="pricetables.php" class="btn btn-sm btn-gray-800"><i class="fas fa-arrow-left me-2"></i> Quay lại</a>
    </div>

    <div class="card card-body border-0 shadow mb-4">
        <form method="POST">
            <div class="mb-3">
                <label class="fw-bold">Tên Tính Năng</label>
                <input type="text" name="feature_name" class="form-control" value="<?php echo htmlspecialchars($comp['feature_name']); ?>" required placeholder="VD: Dung lượng lưu trữ">
            </div>

            <h5 class="mt-4 mb-3 text-muted border-bottom pb-2">Giá trị hiển thị cho từng cột</h5>
            <div class="row">
                <!-- CỘT BASIC -->
                <div class="col-md-4 mb-3">
                    <label>Cột Basic</label>
                    <div class="input-group">
                        <input type="text" id="val_basic" name="val_basic" class="form-control" value="<?php echo htmlspecialchars($comp['val_basic']); ?>" placeholder="Nhập giá trị...">
                        <button class="btn btn-outline-success" type="button" onclick="insertIcon('val_basic', 'check')" title="Chèn dấu tích"><i class="fas fa-check"></i></button>
                        <button class="btn btn-outline-danger" type="button" onclick="insertIcon('val_basic', 'times')" title="Chèn dấu X"><i class="fas fa-times"></i></button>
                    </div>
                </div>

                <!-- CỘT PRO -->
                <div class="col-md-4 mb-3">
                    <label>Cột Professional</label>
                    <div class="input-group">
                        <input type="text" id="val_pro" name="val_pro" class="form-control" value="<?php echo htmlspecialchars($comp['val_pro']); ?>" placeholder="Nhập giá trị...">
                        <button class="btn btn-outline-success" type="button" onclick="insertIcon('val_pro', 'check')" title="Chèn dấu tích"><i class="fas fa-check"></i></button>
                        <button class="btn btn-outline-danger" type="button" onclick="insertIcon('val_pro', 'times')" title="Chèn dấu X"><i class="fas fa-times"></i></button>
                    </div>
                </div>

                <!-- CỘT ENTERPRISE -->
                <div class="col-md-4 mb-3">
                    <label>Cột Enterprise</label>
                    <div class="input-group">
                        <input type="text" id="val_enterprise" name="val_enterprise" class="form-control" value="<?php echo htmlspecialchars($comp['val_enterprise']); ?>" placeholder="Nhập giá trị...">
                        <button class="btn btn-outline-success" type="button" onclick="insertIcon('val_enterprise', 'check')" title="Chèn dấu tích"><i class="fas fa-check"></i></button>
                        <button class="btn btn-outline-danger" type="button" onclick="insertIcon('val_enterprise', 'times')" title="Chèn dấu X"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>

            <div class="alert alert-info py-2 mt-2">
                <small><i class="fas fa-info-circle"></i> Nhấn vào nút <i class="fas fa-check text-success"></i> hoặc <i class="fas fa-times text-danger"></i> để tự động điền icon tương ứng.</small>
            </div>

            <button type="submit" class="btn btn-gray-800 animate-up-2 mt-2">Lưu lại</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>

<!-- SCRIPT XỬ LÝ CHÈN ICON -->
<script>
    function insertIcon(inputId, type) {
        var input = document.getElementById(inputId);
        if (type === 'check') {
            // Mã HTML cho dấu tích xanh
            input.value = '<i class="fas fa-check text-success"></i>';
        } else if (type === 'times') {
            // Mã HTML cho dấu X đỏ
            input.value = '<i class="fas fa-times text-danger"></i>';
        }
    }
</script>