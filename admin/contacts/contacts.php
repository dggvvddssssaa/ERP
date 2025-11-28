<?php
session_start();
// Kiểm tra đăng nhập
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

require_once '../config/db_connection.php';

// LẤY DỮ LIỆU TỪ DATABASE ĐỂ HIỂN THỊ
$sql = "SELECT * FROM contacts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="content flex-grow-1 p-4">
    <h2 class="mb-4">Danh sách khách hàng liên hệ</h2>

    <table class="table table-bordered table-hover bg-white">
        <thead class="table-dark">
            <tr>
                <th>Họ tên</th>
                <th>Email / SĐT</th>
                <th>Tiêu đề</th>
                <th>Nội dung tin nhắn</th>
                <th>Ngày gửi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td class="fw-bold"><?php echo htmlspecialchars($row['full_name']); ?></td>
                        <td>
                            <?php echo htmlspecialchars($row['email']); ?><br>
                            <small><?php echo htmlspecialchars($row['phone']); ?></small>
                        </td>
                        <td><?php echo htmlspecialchars($row['subject']); ?></td>
                        <td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
                        <td><?php echo date('d/m/Y H:i', strtotime($row['created_at'])); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Chưa có liên hệ nào.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include '../includes/footer.php'; ?>