<?php
session_start();
require_once '../config/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$plan = ['name' => '', 'description' => '', 'price_monthly' => '', 'price_yearly' => '', 'features_list' => '', 'is_popular' => 0];

// Nếu có ID -> Lấy dữ liệu để sửa
if ($id > 0) {
    $result = $conn->query("SELECT * FROM pricing_plans WHERE id=$id");
    if ($result->num_rows > 0) $plan = $result->fetch_assoc();
}

// Xử lý Submit Form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $p_mon = $_POST['price_monthly'];
    $p_year = $_POST['price_yearly'];
    $features = $_POST['features_list'];
    $popular = isset($_POST['is_popular']) ? 1 : 0;

    if ($id > 0) {
        $stmt = $conn->prepare("UPDATE pricing_plans SET name=?, description=?, price_monthly=?, price_yearly=?, features_list=?, is_popular=? WHERE id=?");
        $stmt->bind_param("sssssii", $name, $desc, $p_mon, $p_year, $features, $popular, $id);
    } else {
        $stmt = $conn->prepare("INSERT INTO pricing_plans (name, description, price_monthly, price_yearly, features_list, is_popular) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $name, $desc, $p_mon, $p_year, $features, $popular);
    }
    $stmt->execute();
    header("Location: pricetables.php");
    exit();
}
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="content flex-grow-1 p-4">
    <h3><?php echo $id > 0 ? 'Sửa Gói Dịch Vụ' : 'Thêm Gói Mới'; ?></h3>
    <form method="POST" class="card p-4 shadow-sm">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Tên gói (VD: Basic)</label>
                <input type="text" name="name" class="form-control" value="<?php echo $plan['name']; ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Mô tả ngắn</label>
                <input type="text" name="description" class="form-control" value="<?php echo $plan['description']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Giá theo tháng (VNĐ)</label>
                <input type="text" name="price_monthly" class="form-control" value="<?php echo $plan['price_monthly']; ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label>Giá theo năm (VNĐ)</label>
                <input type="text" name="price_yearly" class="form-control" value="<?php echo $plan['price_yearly']; ?>">
            </div>
        </div>
        <div class="mb-3">
            <label>Danh sách tính năng (Mỗi tính năng 1 dòng)</label>
            <textarea name="features_list" class="form-control" rows="6"><?php echo $plan['features_list']; ?></textarea>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="is_popular" id="pop" <?php echo $plan['is_popular'] ? 'checked' : ''; ?>>
            <label class="form-check-label fw-bold text-primary" for="pop">Đây là gói Phổ biến nhất (Highlight)</label>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
        <a href="pricetables.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>
<?php include '../includes/footer.php'; ?>