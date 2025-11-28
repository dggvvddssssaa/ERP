<?php
session_start();
// Kiểm tra đăng nhập
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}

require_once '../config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];

    // Lấy nội dung từ CKEditor (Nó sẽ gửi dạng HTML)
    $content = $_POST['content'];

    // Xử lý upload ảnh
    $image = "";
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../../assets/img/blog/"; // Đường dẫn lưu ảnh

        // Kiểm tra xem thư mục có tồn tại không, nếu không thì tạo
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;

        // Chỉ cho phép file ảnh
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = $image_name;
            } else {
                echo "<script>alert('Lỗi: Không thể lưu file ảnh.');</script>";
            }
        } else {
            echo "<script>alert('Lỗi: File tải lên không phải là ảnh.');</script>";
        }
    }

    // Insert vào DB
    $stmt = $conn->prepare("INSERT INTO news (title, category, summary, content, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $category, $summary, $content, $image);

    if ($stmt->execute()) {
        echo "<script>alert('Thêm bài viết thành công!'); window.location.href='news.php';</script>";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<div class="content flex-grow-1 p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3><i class="fas fa-plus-circle me-2"></i>Thêm bài viết mới</h3>
        <a href="news.php" class="btn btn-secondary">Quay lại danh sách</a>
    </div>

    <form method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="fw-bold">Tiêu đề bài viết</label>
            <input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề..." required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="fw-bold">Danh mục</label>
                <select name="category" class="form-select" required>
                    <option value="">-- Chọn danh mục --</option>
                    <option value="Tin Tức">Tin Tức</option>
                    <option value="Kiến Thức Quản Trị">Kiến Thức Quản Trị</option>
                    <option value="Giải Pháp ERP">Giải Pháp ERP</option>
                    <option value="Xây Dựng">Xây Dựng</option>
                    <option value="Bất Động Sản">Bất Động Sản</option>
                    <option value="Tài Chính">Tài Chính</option>
                    <option value="Tuyển Dụng">Tuyển Dụng</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="fw-bold">Hình ảnh đại diện</label>
                <input type="file" name="image" class="form-control" required>
                <small class="text-muted">Nên chọn ảnh kích thước chữ nhật ngang (VD: 800x600)</small>
            </div>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Mô tả ngắn (Sapo)</label>
            <textarea name="summary" class="form-control" rows="3" placeholder="Đoạn văn ngắn hiện ở trang chủ..." required></textarea>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Nội dung chi tiết</label>
            <textarea name="content" id="editor_content" class="form-control" rows="10" required></textarea>
        </div>

        <button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> Lưu bài viết</button>
    </form>
</div>

<script>
    CKEDITOR.replace('editor_content');
</script>

<?php include '../includes/footer.php'; ?>