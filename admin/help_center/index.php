<?php
session_start();
require_once '../config/db_connection.php'; // Điều chỉnh đường dẫn nếu cần

// Lấy danh sách items kèm tên danh mục
$sql = "SELECT h.*, c.name as cat_name 
        FROM help_items h 
        LEFT JOIN help_categories c ON h.category_id = c.id 
        ORDER BY h.created_at DESC";
$result = $conn->query($sql);
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="content flex-grow-1 p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3><i class="fas fa-question-circle me-2"></i> Hướng dẫn sử dụng</h3>
        <a href="form.php" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm Mới</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Loại</th>
                        <th>Danh mục</th>
                        <th>File / Link</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <?php if ($row['thumbnail']): ?>
                                    <img src="../../assets/uploads/help/<?php echo $row['thumbnail']; ?>" width="50" class="me-2 rounded">
                                <?php endif; ?>
                                <b><?php echo htmlspecialchars($row['title']); ?></b>
                            </td>
                            <td>
                                <?php if ($row['type'] == 'video'): ?>
                                    <span class="badge bg-danger"><i class="fas fa-video"></i> Video</span>
                                <?php else: ?>
                                    <span class="badge bg-info text-dark"><i class="fas fa-file-pdf"></i> Tài liệu</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo htmlspecialchars($row['cat_name']); ?></td>
                            <td>
                                <?php if ($row['type'] == 'video'): ?>
                                    <a href="<?php echo $row['video_link']; ?>" target="_blank">Xem link</a>
                                <?php else: ?>
                                    <a href="../../assets/uploads/help/<?php echo $row['file_path']; ?>" target="_blank">Tải file</a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="form.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Xóa mục này?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>