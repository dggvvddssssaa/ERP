<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}
require_once '../../config/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Mặc định video_source là 'link' nếu chưa có dữ liệu
$item = ['title' => '', 'category_id' => '', 'type' => 'video', 'description' => '', 'video_link' => '', 'file_path' => '', 'thumbnail' => ''];

if ($id > 0) {
    $res = $conn->query("SELECT * FROM help_items WHERE id=$id");
    if ($res->num_rows > 0) $item = $res->fetch_assoc();
}

// Xác định nguồn video hiện tại
$current_video_source = 'link';
if ($item['type'] == 'video' && !empty($item['file_path'])) {
    $current_video_source = 'upload';
}

$cats = $conn->query("SELECT * FROM help_categories");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $cat_id = $_POST['category_id'];
    $type = $_POST['type'];
    $desc = $_POST['description'];
    $video_link = $_POST['video_link'];
    $video_source = $_POST['video_source'];

    $target_dir = "../../assets/uploads/help/";
    if (!file_exists($target_dir)) mkdir($target_dir, 0777, true);

    // 1. Upload Thumbnail
    $thumbnail = $item['thumbnail'];
    if (!empty($_FILES['thumbnail']['name'])) {
        $thumb_name = time() . "_thumb_" . basename($_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_dir . $thumb_name);
        $thumbnail = $thumb_name;
    }

    // 2. Xử lý File Path
    $file_path = $item['file_path'];

    if ($type == 'video') {
        if ($video_source == 'upload') {
            if (!empty($_FILES['video_file']['name'])) {
                $vid_name = time() . "_vid_" . basename($_FILES['video_file']['name']);
                move_uploaded_file($_FILES['video_file']['tmp_name'], $target_dir . $vid_name);
                $file_path = $vid_name;
            }
            $video_link = '';
        }
    }

    if ($type == 'document' && !empty($_FILES['doc_file']['name'])) {
        $doc_name = time() . "_doc_" . basename($_FILES['doc_file']['name']);
        move_uploaded_file($_FILES['doc_file']['tmp_name'], $target_dir . $doc_name);
        $file_path = $doc_name;
        $video_link = '';
    }

    if ($id > 0) {
        $stmt = $conn->prepare("UPDATE help_items SET category_id=?, title=?, description=?, type=?, file_path=?, video_link=?, thumbnail=? WHERE id=?");
        $stmt->bind_param("issssssi", $cat_id, $title, $desc, $type, $file_path, $video_link, $thumbnail, $id);
    } else {
        $stmt = $conn->prepare("INSERT INTO help_items (category_id, title, description, type, file_path, video_link, thumbnail) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssss", $cat_id, $title, $desc, $type, $file_path, $video_link, $thumbnail);
    }
    $stmt->execute();
    header("Location: index.php");
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
                    <li class="breadcrumb-item"><a href="index.php">Hướng dẫn</a></li>
                    <li class="breadcrumb-item active"><?php echo $id > 0 ? 'Sửa' : 'Thêm mới'; ?></li>
                </ol>
            </nav>
            <h2 class="h4"><?php echo $id > 0 ? 'Sửa Hướng Dẫn' : 'Thêm Hướng Dẫn Mới'; ?></h2>
        </div>
        <a href="index.php" class="btn btn-sm btn-gray-800"><i class="fas fa-arrow-left me-2"></i> Quay lại</a>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card card-body border-0 shadow mb-4">
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="fw-bold">Tiêu đề</label>
                            <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($item['title']); ?>" required placeholder="VD: Hướng dẫn tạo tài khoản">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="fw-bold">Danh mục</label>
                            <select name="category_id" class="form-select" required>
                                <option value="">-- Chọn danh mục --</option>
                                <?php while ($c = $cats->fetch_assoc()): ?>
                                    <option value="<?php echo $c['id']; ?>" <?php echo $c['id'] == $item['category_id'] ? 'selected' : ''; ?>>
                                        <?php echo $c['name']; ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Loại nội dung</label>
                        <select name="type" class="form-select" id="typeSelect" onchange="toggleForm()">
                            <option value="video" <?php echo $item['type'] == 'video' ? 'selected' : ''; ?>>Video Hướng dẫn</option>
                            <option value="document" <?php echo $item['type'] == 'document' ? 'selected' : ''; ?>>Tài liệu (PDF/Word)</option>
                        </select>
                    </div>

                    <!-- KHU VỰC VIDEO -->
                    <div id="videoArea" class="border p-3 rounded bg-light mb-3">
                        <label class="fw-bold mb-2 d-block">Nguồn Video:</label>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="video_source" id="sourceLink" value="link" onclick="toggleVideoSource()" <?php echo $current_video_source == 'link' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="sourceLink">Link Youtube/Vimeo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="video_source" id="sourceUpload" value="upload" onclick="toggleVideoSource()" <?php echo $current_video_source == 'upload' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="sourceUpload">Upload Video từ máy tính</label>
                            </div>
                        </div>

                        <div id="inputLinkGroup">
                            <label>Dán link vào đây:</label>
                            <input type="text" name="video_link" class="form-control" value="<?php echo htmlspecialchars($item['video_link']); ?>" placeholder="https://www.youtube.com/watch?v=...">
                        </div>

                        <div id="inputUploadGroup" style="display: none;">
                            <label>Chọn file video (.mp4):</label>
                            <input type="file" name="video_file" class="form-control" accept="video/mp4,video/x-m4v,video/*">
                            <?php if ($item['file_path'] && $item['type'] == 'video') echo "<small class='text-success mt-1 d-block'>Đang dùng file: {$item['file_path']}</small>"; ?>
                        </div>

                        <div class="mt-3">
                            <label class="fw-bold">Ảnh Thumbnail (Bắt buộc):</label>
                            <input type="file" name="thumbnail" class="form-control">
                            <?php if ($item['thumbnail']) echo "<img src='../../assets/uploads/help/{$item['thumbnail']}' width='100' class='mt-2 border rounded'>"; ?>
                        </div>
                    </div>

                    <!-- KHU VỰC TÀI LIỆU -->
                    <div id="docArea" class="border p-3 rounded bg-light mb-3" style="display:none;">
                        <label class="fw-bold">Tải lên file tài liệu (PDF, Docx...)</label>
                        <input type="file" name="doc_file" class="form-control">
                        <?php if ($item['file_path'] && $item['type'] == 'document') echo "<small class='text-success mt-1 d-block'>File hiện tại: {$item['file_path']}</small>"; ?>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Mô tả ngắn</label>
                        <textarea name="description" class="form-control" rows="3"><?php echo htmlspecialchars($item['description']); ?></textarea>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 animate-up-2">Lưu lại</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
</main>

<script>
    function toggleForm() {
        var type = document.getElementById('typeSelect').value;
        if (type === 'video') {
            document.getElementById('videoArea').style.display = 'block';
            document.getElementById('docArea').style.display = 'none';
            toggleVideoSource();
        } else {
            document.getElementById('videoArea').style.display = 'none';
            document.getElementById('docArea').style.display = 'block';
        }
    }

    function toggleVideoSource() {
        var isLink = document.getElementById('sourceLink').checked;
        if (isLink) {
            document.getElementById('inputLinkGroup').style.display = 'block';
            document.getElementById('inputUploadGroup').style.display = 'none';
        } else {
            document.getElementById('inputLinkGroup').style.display = 'none';
            document.getElementById('inputUploadGroup').style.display = 'block';
        }
    }
    toggleForm();
</script>