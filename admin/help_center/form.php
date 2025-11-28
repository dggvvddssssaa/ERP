<?php
session_start();
require_once '../config/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
// Mặc định video_source là 'link' nếu chưa có dữ liệu
$item = ['title' => '', 'category_id' => '', 'type' => 'video', 'description' => '', 'video_link' => '', 'file_path' => '', 'thumbnail' => ''];

if ($id > 0) {
    $res = $conn->query("SELECT * FROM help_items WHERE id=$id");
    if ($res->num_rows > 0) $item = $res->fetch_assoc();
}

// Xác định nguồn video hiện tại (Link hay File) để hiển thị đúng radio button
$current_video_source = 'link'; // Mặc định
if ($item['type'] == 'video' && !empty($item['file_path'])) {
    $current_video_source = 'upload';
}

$cats = $conn->query("SELECT * FROM help_categories");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $cat_id = $_POST['category_id'];
    $type = $_POST['type'];
    $desc = $_POST['description'];

    // Logic xử lý Link Video
    $video_link = $_POST['video_link'];
    $video_source = $_POST['video_source']; // Lấy giá trị radio (link hoặc upload)

    // Xử lý upload file chung (Thumbnail, Video, Document)
    $target_dir = "../../assets/uploads/help/";
    if (!file_exists($target_dir)) mkdir($target_dir, 0777, true);

    // 1. Upload Thumbnail (Giữ nguyên)
    $thumbnail = $item['thumbnail'];
    if (!empty($_FILES['thumbnail']['name'])) {
        $thumb_name = time() . "_thumb_" . basename($_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target_dir . $thumb_name);
        $thumbnail = $thumb_name;
    }

    // 2. Xử lý File Path (Dùng chung cho cả Document PDF và Video Upload)
    $file_path = $item['file_path'];

    // Trường hợp A: Upload Video (Khi chọn Type = Video và Source = Upload)
    if ($type == 'video') {
        if ($video_source == 'upload') {
            // Nếu người dùng chọn upload file mới
            if (!empty($_FILES['video_file']['name'])) {
                $vid_name = time() . "_vid_" . basename($_FILES['video_file']['name']);
                move_uploaded_file($_FILES['video_file']['tmp_name'], $target_dir . $vid_name);
                $file_path = $vid_name;
            }
            $video_link = ''; // Xóa link youtube nếu chọn upload file
        } else {
            // Nếu chọn Link thì xóa file path cũ đi (tùy chọn, hoặc giữ lại)
            // $file_path = ''; 
        }
    }

    // Trường hợp B: Upload Tài liệu (Khi chọn Type = Document)
    if ($type == 'document' && !empty($_FILES['doc_file']['name'])) {
        $doc_name = time() . "_doc_" . basename($_FILES['doc_file']['name']);
        move_uploaded_file($_FILES['doc_file']['tmp_name'], $target_dir . $doc_name);
        $file_path = $doc_name;
        $video_link = ''; // Đảm bảo không có link video
    }

    // Lưu vào DB
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
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<div class="content flex-grow-1 p-4">
    <h3><?php echo $id > 0 ? 'Sửa' : 'Thêm'; ?> Hướng dẫn</h3>

    <div class="alert alert-info">
        <small><i class="fas fa-info-circle"></i> Lưu ý: Nếu upload video, hãy đảm bảo dung lượng file nhỏ hơn giới hạn cho phép của Server (thường là <b><?php echo ini_get('upload_max_filesize'); ?></b>).</small>
    </div>

    <form method="POST" enctype="multipart/form-data" class="card p-4">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Tiêu đề</label>
                <input type="text" name="title" class="form-control" value="<?php echo $item['title']; ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Danh mục</label>
                <select name="category_id" class="form-select" required>
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

        <div id="videoArea" class="border p-3 rounded bg-light mb-3">
            <label class="fw-bold mb-2">Nguồn Video:</label>

            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="video_source" id="sourceLink" value="link"
                        onclick="toggleVideoSource()" <?php echo $current_video_source == 'link' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="sourceLink">Link Youtube/Vimeo</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="video_source" id="sourceUpload" value="upload"
                        onclick="toggleVideoSource()" <?php echo $current_video_source == 'upload' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="sourceUpload">Upload Video từ máy tính</label>
                </div>
            </div>

            <div id="inputLinkGroup">
                <label>Dán link vào đây:</label>
                <input type="text" name="video_link" class="form-control" value="<?php echo $item['video_link']; ?>" placeholder="https://www.youtube.com/watch?v=...">
            </div>

            <div id="inputUploadGroup" style="display: none;">
                <label>Chọn file video (.mp4):</label>
                <input type="file" name="video_file" class="form-control" accept="video/mp4,video/x-m4v,video/*">
                <?php if ($item['file_path'] && $item['type'] == 'video') echo "<small class='text-success'>Đang dùng file: {$item['file_path']}</small>"; ?>
            </div>

            <div class="mt-3">
                <label>Ảnh Thumbnail (Bắt buộc):</label>
                <input type="file" name="thumbnail" class="form-control">
                <?php if ($item['thumbnail']) echo "<img src='../../assets/uploads/help/{$item['thumbnail']}' width='100' class='mt-2 border'>"; ?>
            </div>
        </div>

        <div id="docArea" class="border p-3 rounded bg-light mb-3" style="display:none;">
            <label class="fw-bold">Tải lên file tài liệu (PDF, Docx...)</label>
            <input type="file" name="doc_file" class="form-control">
            <?php if ($item['file_path'] && $item['type'] == 'document') echo "<small>File hiện tại: {$item['file_path']}</small>"; ?>
        </div>

        <div class="mb-3">
            <label>Mô tả ngắn</label>
            <textarea name="description" class="form-control" rows="3"><?php echo $item['description']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
        <a href="index.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>

<script>
    // Hàm chuyển đổi giữa Video và Tài liệu
    function toggleForm() {
        var type = document.getElementById('typeSelect').value;
        if (type === 'video') {
            document.getElementById('videoArea').style.display = 'block';
            document.getElementById('docArea').style.display = 'none';
            toggleVideoSource(); // Gọi thêm hàm check nguồn video
        } else {
            document.getElementById('videoArea').style.display = 'none';
            document.getElementById('docArea').style.display = 'block';
        }
    }

    // Hàm chuyển đổi giữa Link Youtube và Upload Video
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

    // Chạy khi load trang
    toggleForm();
</script>

<?php include '../includes/footer.php'; ?>