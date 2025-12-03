<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}
require_once '../../config/db_connection.php'; // Điều chỉnh đường dẫn config nếu cần

$id = $_GET['id'];
$query = $conn->query("SELECT * FROM news WHERE id = $id");
$row = $query->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];
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
                    <li class="breadcrumb-item active" aria-current="page">Sửa bài viết</li>
                </ol>
            </nav>
            <h2 class="h4">Sửa bài viết: <?php echo htmlspecialchars($row['title']); ?></h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card card-body border-0 shadow mb-4">
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="title">Tiêu đề bài viết</label>
                            <input class="form-control" id="title" name="title" type="text" value="<?php echo htmlspecialchars($row['title']); ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="category">Danh mục</label>
                            <select class="form-select mb-0" id="category" name="category" required>
                                <option value="Tin Tức" <?php echo ($row['category'] == 'Tin Tức') ? 'selected' : ''; ?>>Tin Tức</option>
                                <option value="Kiến Thức Quản Trị" <?php echo ($row['category'] == 'Kiến Thức Quản Trị') ? 'selected' : ''; ?>>Kiến Thức Quản Trị</option>
                                <option value="Giải Pháp ERP" <?php echo ($row['category'] == 'Giải Pháp ERP') ? 'selected' : ''; ?>>Giải Pháp ERP</option>
                                <option value="Xây Dựng" <?php echo ($row['category'] == 'Xây Dựng') ? 'selected' : ''; ?>>Xây Dựng</option>
                                <option value="Bất Động Sản" <?php echo ($row['category'] == 'Bất Động Sản') ? 'selected' : ''; ?>>Bất Động Sản</option>
                                <option value="Tài Chính" <?php echo ($row['category'] == 'Tài Chính') ? 'selected' : ''; ?>>Tài Chính</option>
                                <option value="Tuyển Dụng" <?php echo ($row['category'] == 'Tuyển Dụng') ? 'selected' : ''; ?>>Tuyển Dụng</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="summary">Mô tả ngắn (Sapo)</label>
                            <textarea class="form-control" id="summary" name="summary" rows="3" required><?php echo htmlspecialchars($row['summary']); ?></textarea>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="image">Hình ảnh đại diện</label>
                            <div class="file-field">
                                <div class="d-flex justify-content-xl-center ms-xl-3">
                                    <div class="d-flex align-items-center">
                                        <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                        </svg>
                                        <input type="file" name="image" id="image">
                                        <div class="d-md-block text-left">
                                            <div class="fw-normal text-dark mb-1">Thay đổi ảnh</div>
                                            <div class="text-gray small">Để trống nếu không đổi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <?php if ($row['image']): ?>
                                <img src="../../assets/img/blog/<?php echo $row['image']; ?>" height="100" class="rounded shadow-sm">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="content">Nội dung chi tiết</label>
                            <textarea name="content" id="editor_content" class="form-control" rows="10"><?php echo $row['content']; ?></textarea>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Cập nhật</button>
                        <a href="news.php" class="btn btn-gray-200 mt-2 ms-2">Hủy</a>
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