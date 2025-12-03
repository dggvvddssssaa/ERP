<?php
session_start();
// Kiểm tra đăng nhập
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}

require_once '../../config/db_connection.php'; // Điều chỉnh đường dẫn config nếu cần

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];
    $image = "";

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../../assets/img/blog/"; // Đường dẫn lưu ảnh
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image = $image_name;
        }
    }

    $stmt = $conn->prepare("INSERT INTO news (title, category, summary, content, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $category, $summary, $content, $image);
    if ($stmt->execute()) {
        echo "<script>alert('Thêm bài viết thành công!'); window.location.href='news.php';</script>";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}

$path = "../";
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<main class="content">
    <?php include '../includes/topbar.php'; ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="../index.php"><svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a href="news.php">Tin tức</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
                </ol>
            </nav>
            <h2 class="h4">Thêm bài viết mới</h2>
        </div>
        <div>
            <a href="news.php" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                </svg>
                Quay lại
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">Thông tin bài viết</h2>
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="title">Tiêu đề bài viết</label>
                            <input class="form-control" id="title" name="title" type="text" placeholder="Nhập tiêu đề..." required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="category">Danh mục</label>
                            <select class="form-select mb-0" id="category" name="category" required>
                                <option value="" selected>-- Chọn danh mục --</option>
                                <option value="Tin Tức">Tin Tức</option>
                                <option value="Kiến Thức Quản Trị">Kiến Thức Quản Trị</option>
                                <option value="Giải Pháp ERP">Giải Pháp ERP</option>
                                <option value="Xây Dựng">Xây Dựng</option>
                                <option value="Bất Động Sản">Bất Động Sản</option>
                                <option value="Tài Chính">Tài Chính</option>
                                <option value="Tuyển Dụng">Tuyển Dụng</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="summary">Mô tả ngắn (Sapo)</label>
                            <textarea class="form-control" id="summary" name="summary" rows="3" placeholder="Đoạn văn ngắn hiện ở trang chủ..." required></textarea>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="image">Hình ảnh đại diện</label>
                            <div class="file-field">
                                <div class="d-flex justify-content-xl-center ms-xl-3">
                                    <div class="d-flex">
                                        <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                        </svg>
                                        <input type="file" name="image" id="image" required>
                                        <div class="d-md-block text-left">
                                            <div class="fw-normal text-dark mb-1">Choose Image</div>
                                            <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="content">Nội dung chi tiết</label>
                            <textarea name="content" id="editor_content" class="form-control" rows="10" required></textarea>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Lưu bài viết</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>

<script>
    CKEDITOR.replace('editor_content');
</script>