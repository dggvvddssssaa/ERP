<?php
session_start();
// Kiểm tra bảo mật: Chưa đăng nhập thì đá về login
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Kết nối database
require_once 'config/db_connection.php';

// Ví dụ: Lấy tổng số liệu (Giả sử bạn có bảng 'users')
// Bạn có thể bỏ comment dòng dưới nếu DB đã có bảng
// $sql = "SELECT count(*) as total FROM users";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
// $total_users = $row['total'];
$total_users = 0; // Tạm thời để 0
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="content flex-grow-1">
    <h2 class="mb-4">Tổng quan hệ thống</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Nhân sự</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $total_users; ?> Nhân viên</h5>
                    <p class="card-text">Tổng số nhân sự hiện tại.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Doanh thu</div>
                <div class="card-body">
                    <h5 class="card-title">150 Triệu</h5>
                    <p class="card-text">Doanh thu tháng này.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Đơn hàng</div>
                <div class="card-body">
                    <h5 class="card-title">12 Đơn</h5>
                    <p class="card-text">Đơn hàng chưa xử lý.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Cảnh báo</div>
                <div class="card-body">
                    <h5 class="card-title">3 Lỗi</h5>
                    <p class="card-text">Hệ thống cần kiểm tra.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h4>Hoạt động gần đây</h4>
        <table class="table table-bordered table-striped bg-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hoạt động</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Đăng nhập hệ thống</td>
                    <td>28/11/2025 10:00</td>
                    <td><span class="badge bg-success">Thành công</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cập nhật kho hàng</td>
                    <td>28/11/2025 09:30</td>
                    <td><span class="badge bg-primary">Đã lưu</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>