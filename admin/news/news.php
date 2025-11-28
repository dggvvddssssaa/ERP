<?php
session_start();
// 1. Check Login
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}

// 2. Kết nối DB (Lùi lại 1 cấp để vào config)
require_once '../config/db_connection.php';

// 3. Lấy danh sách tin tức
$sql = "SELECT * FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="content flex-grow-1 p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="fas fa-newspaper me-2"></i> Quản lý Tin tức</h2>
        <a href="add_news.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm bài viết mới
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th width="5%">ID</th>
                        <th width="10%">Hình ảnh</th>
                        <th width="20%">Tiêu đề</th>
                        <th width="10%">Danh mục</th>
                        <th width="30%">Mô tả ngắn</th>
                        <th width="10%">Ngày đăng</th>
                        <th width="15%">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result && $result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td>
                                    <?php if ($row['image']): ?>
                                        <img src="../../assets/img/blog/<?php echo $row['image']; ?>" width="80" style="object-fit:cover; border-radius:5px;">
                                    <?php else: ?>
                                        <span class="text-muted">No IMG</span>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-bold"><?php echo htmlspecialchars($row['title']); ?></td>
                                <td><span class="badge bg-info text-dark"><?php echo htmlspecialchars($row['category']); ?></span></td>
                                <td><?php echo htmlspecialchars(substr($row['summary'], 0, 100)) . '...'; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($row['created_at'])); ?></td>
                                <td>
                                    <a href="../../xem-tin-tuc/?id=<?php echo $row['id']; ?>" target="_blank" class="btn btn-sm btn-info text-white">
                                        <i class="fas fa-eye"></i> Xem
                                    </a>

                                    <a href="edit_news.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Sửa
                                    </a>

                                    <a href="delete_news.php?id=<?php echo $row['id']; ?>"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Bạn có chắc muốn xóa bài viết này?');">
                                        <i class="fas fa-trash"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">Chưa có bài viết nào.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>