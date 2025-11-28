<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}
require_once '../config/db_connection.php';

$id = $_GET['id'];
$query = $conn->query("SELECT * FROM news WHERE id = $id");
$row = $query->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];
    $content = $_POST['content']; // CKEditor gửi HTML

    $image = $row['image'];
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../../assets/img/blog/";
        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $image_name)) {
            $image = $image_name;
        }
    }

    $stmt = $conn->prepare("UPDATE news SET title=?, category=?, summary=?, content=?, image=? WHERE id=?");
    $stmt->bind_param("sssssi", $title, $category, $summary, $content, $image, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Cập nhật thành công!'); window.location.href='news.php';</script>";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<div class="content flex-grow-1 p-4">
    <h3>Sửa bài viết: <?php echo htmlspecialchars($row['title']); ?></h3>
    <form method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="fw-bold">Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($row['title']); ?>" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="fw-bold">Danh mục</label>
                <select name="category" class="form-select" required>
                    <option value="Tin Tức" <?php echo ($row['category'] == 'Tin Tức') ? 'selected' : ''; ?>>Tin Tức</option>
                    <option value="Kiến Thức Quản Trị" <?php echo ($row['category'] == 'Kiến Thức Quản Trị') ? 'selected' : ''; ?>>Kiến Thức Quản Trị</option>
                    <option value="Giải Pháp ERP" <?php echo ($row['category'] == 'Giải Pháp ERP') ? 'selected' : ''; ?>>Giải Pháp ERP</option>
                    <option value="Xây Dựng" <?php echo ($row['category'] == 'Xây Dựng') ? 'selected' : ''; ?>>Xây Dựng</option>
                    <option value="Bất Động Sản" <?php echo ($row['category'] == 'Bất Động Sản') ? 'selected' : ''; ?>>Bất Động Sản</option>
                    <option value="Tài Chính" <?php echo ($row['category'] == 'Tài Chính') ? 'selected' : ''; ?>>Tài Chính</option>
                    <option value="Tuyển Dụng" <?php echo ($row['category'] == 'Tuyển Dụng') ? 'selected' : ''; ?>>Tuyển Dụng</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="fw-bold">Hình ảnh</label>
                <input type="file" name="image" class="form-control">
                <?php if ($row['image']): ?>
                    <img src="../../assets/img/blog/<?php echo $row['image']; ?>" height="80" class="mt-2 rounded">
                <?php endif; ?>
            </div>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Mô tả ngắn</label>
            <textarea name="summary" class="form-control" rows="3"><?php echo htmlspecialchars($row['summary']); ?></textarea>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Nội dung chi tiết</label>
            <textarea name="content" id="editor_content" class="form-control"><?php echo $row['content']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Cập nhật</button>
        <a href="news.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>

<script>
    CKEDITOR.replace('editor_content');
</script>

<?php include '../includes/footer.php'; ?>