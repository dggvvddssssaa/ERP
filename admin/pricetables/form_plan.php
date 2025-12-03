<?php
session_start();
require_once '../../config/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$plan = ['name' => '', 'description' => '', 'price_monthly' => '', 'price_yearly' => '', 'features_list' => '', 'is_popular' => 0];

if ($id > 0) {
    $result = $conn->query("SELECT * FROM pricing_plans WHERE id=$id");
    if ($result->num_rows > 0) $plan = $result->fetch_assoc();
}

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
                    <li class="breadcrumb-item active"><?php echo $id > 0 ? 'Sửa gói' : 'Thêm gói'; ?></li>
                </ol>
            </nav>
            <h2 class="h4"><?php echo $id > 0 ? 'Sửa Gói Dịch Vụ' : 'Thêm Gói Mới'; ?></h2>
        </div>
        <a href="pricetables.php" class="btn btn-sm btn-gray-800"><i class="fas fa-arrow-left me-2"></i> Quay lại</a>
    </div>

    <div class="card card-body border-0 shadow mb-4">
        <form method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Tên gói</label>
                    <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($plan['name']); ?>" required placeholder="VD: Basic, Pro...">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Mô tả ngắn</label>
                    <input type="text" name="description" class="form-control" value="<?php echo htmlspecialchars($plan['description']); ?>" placeholder="VD: Dành cho cá nhân...">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Giá theo Tháng (VNĐ)</label>
                    <input type="text" name="price_monthly" class="form-control" value="<?php echo htmlspecialchars($plan['price_monthly']); ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Giá theo Năm (VNĐ)</label>
                    <input type="text" name="price_yearly" class="form-control" value="<?php echo htmlspecialchars($plan['price_yearly']); ?>">
                </div>
            </div>
            <div class="mb-3">
                <label>Danh sách tính năng (Mỗi dòng 1 tính năng)</label>
                <textarea name="features_list" class="form-control" rows="5"><?php echo htmlspecialchars($plan['features_list']); ?></textarea>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="is_popular" id="pop" <?php echo $plan['is_popular'] ? 'checked' : ''; ?>>
                    <label class="form-check-label fw-bold text-primary" for="pop">Đánh dấu là gói Phổ biến (Highlight)</label>
                </div>
            </div>
            <button type="submit" class="btn btn-gray-800 animate-up-2">Lưu lại</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>