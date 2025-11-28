<?php
session_start();
require_once '../config/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Mặc định để trống hoặc giá trị cũ
$comp = ['feature_name' => '', 'val_basic' => '', 'val_pro' => '', 'val_enterprise' => '', 'sort_order' => 0];

if ($id > 0) {
    $result = $conn->query("SELECT * FROM pricing_comparisons WHERE id=$id");
    if ($result->num_rows > 0) $comp = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['feature_name'];
    $basic = $_POST['val_basic'];
    $pro = $_POST['val_pro'];
    $ent = $_POST['val_enterprise'];
    $order = intval($_POST['sort_order']);

    if ($id > 0) {
        $stmt = $conn->prepare("UPDATE pricing_comparisons SET feature_name=?, val_basic=?, val_pro=?, val_enterprise=?, sort_order=? WHERE id=?");
        $stmt->bind_param("ssssii", $name, $basic, $pro, $ent, $order, $id);
    } else {
        $stmt = $conn->prepare("INSERT INTO pricing_comparisons (feature_name, val_basic, val_pro, val_enterprise, sort_order) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $name, $basic, $pro, $ent, $order);
    }
    $stmt->execute();
    header("Location: pricetables.php");
    exit();
}
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<style>
    /* Style cho các nút chọn nhanh */
    .quick-btn {
        cursor: pointer;
        transition: 0.2s;
    }

    .quick-btn:hover {
        opacity: 0.8;
    }
</style>

<div class="content flex-grow-1 p-4">
    <h3><?php echo $id > 0 ? 'Sửa Dòng So Sánh' : 'Thêm Dòng So Sánh'; ?></h3>
    <form method="POST" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="fw-bold">Tên tính năng (Cột đầu tiên)</label>
            <input type="text" name="feature_name" class="form-control" value="<?php echo htmlspecialchars($comp['feature_name']); ?>" required placeholder="VD: Quản lý nhân sự">
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Cột Basic</label>
                <div class="input-group">
                    <input type="text" name="val_basic" id="basic_input" class="form-control" value="<?php echo htmlspecialchars($comp['val_basic']); ?>" placeholder="Nhập text hoặc chọn icon ->">

                    <button class="btn btn-outline-success quick-btn" type="button" onclick="setVal('basic_input', 'CHECK')" title="Chọn dấu tích">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="btn btn-outline-danger quick-btn" type="button" onclick="setVal('basic_input', 'CROSS')" title="Chọn dấu X">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label>Cột Professional</label>
                <div class="input-group">
                    <input type="text" name="val_pro" id="pro_input" class="form-control" value="<?php echo htmlspecialchars($comp['val_pro']); ?>">

                    <button class="btn btn-outline-success quick-btn" type="button" onclick="setVal('pro_input', 'CHECK')">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="btn btn-outline-danger quick-btn" type="button" onclick="setVal('pro_input', 'CROSS')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label>Cột Enterprise</label>
                <div class="input-group">
                    <input type="text" name="val_enterprise" id="ent_input" class="form-control" value="<?php echo htmlspecialchars($comp['val_enterprise']); ?>">

                    <button class="btn btn-outline-success quick-btn" type="button" onclick="setVal('ent_input', 'CHECK')">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="btn btn-outline-danger quick-btn" type="button" onclick="setVal('ent_input', 'CROSS')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label>Thứ tự hiển thị</label>
            <input type="number" name="sort_order" class="form-control" value="<?php echo $comp['sort_order']; ?>" style="width: 100px;">
        </div>

        <div class="alert alert-info d-flex align-items-center">
            <i class="fas fa-info-circle fs-4 me-2"></i>
            <div>
                <strong>Hướng dẫn:</strong><br>
                - Bấm nút <i class="fas fa-check text-success"></i> để điền <b>CHECK</b> (Hiện dấu tích xanh).<br>
                - Bấm nút <i class="fas fa-times text-danger"></i> để điền <b>CROSS</b> (Hiện dấu X đỏ).<br>
                - Hoặc nhập chữ bình thường (Ví dụ: "10 GB", "Miễn phí").
            </div>
        </div>

        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
        <a href="pricetables.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>

<script>
    function setVal(inputId, value) {
        document.getElementById(inputId).value = value;
    }
</script>

<?php include '../includes/footer.php'; ?>