<?php
session_start();
require_once '../../config/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$doc = ['title' => '', 'description' => '', 'file_path' => ''];

if ($id > 0) {
    $res = $conn->query("SELECT * FROM documents WHERE id=$id");
    if ($res->num_rows > 0) $doc = $res->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];

    // Xử lý Upload File
    $file_path = $doc['file_path'];
    $file_type = isset($doc['file_type']) ? $doc['file_type'] : '';
    $file_size = isset($doc['file_size']) ? $doc['file_size'] : '';

    if (!empty($_FILES['doc_file']['name'])) {
        $target_dir = "../../assets/uploads/documents/";
        if (!file_exists($target_dir)) mkdir($target_dir, 0777, true);

        $file_name = basename($_FILES["doc_file"]["name"]);
        $target_file = $target_dir . time() . "_" . $file_name;
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Xác định loại file để hiển thị icon
        if ($extension == 'pdf') $file_type = 'pdf';
        elseif (in_array($extension, ['doc', 'docx'])) $file_type = 'word';
        elseif (in_array($extension, ['xls', 'xlsx', 'csv'])) $file_type = 'excel';
        elseif (in_array($extension, ['mp4', 'avi'])) $file_type = 'video';
        else $file_type = 'other';

        // Tính dung lượng (KB/MB)
        $bytes = $_FILES["doc_file"]["size"];
        if ($bytes >= 1048576) $file_size = number_format($bytes / 1048576, 2) . ' MB';
        else $file_size = number_format($bytes / 1024, 2) . ' KB';

        if (move_uploaded_file($_FILES["doc_file"]["tmp_name"], $target_file)) {
            // Xóa file cũ nếu có
            if ($id > 0 && !empty($doc['file_path']) && file_exists($target_dir . $doc['file_path'])) {
                unlink($target_dir . $doc['file_path']);
            }
            $file_path = time() . "_" . $file_name;
        }
    }

    if ($id > 0) {
        $stmt = $conn->prepare("UPDATE documents SET title=?, description=?, file_path=?, file_type=?, file_size=? WHERE id=?");
        $stmt->bind_param("sssssi", $title, $desc, $file_path, $file_type, $file_size, $id);
    } else {
        $stmt = $conn->prepare("INSERT INTO documents (title, description, file_path, file_type, file_size) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $title, $desc, $file_path, $file_type, $file_size);
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
    <div class="py-4">
        <h2 class="h4"><?php echo $id > 0 ? 'Sửa Tài liệu' : 'Upload Tài liệu Mới'; ?></h2>
    </div>
    <div class="card card-body border-0 shadow mb-4">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Tên tài liệu</label>
                <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($doc['title']); ?>" required>
            </div>
            <div class="mb-3">
                <label>Mô tả ngắn</label>
                <textarea name="description" class="form-control" rows="3"><?php echo htmlspecialchars($doc['description']); ?></textarea>
            </div>
            <div class="mb-3">
                <label>File đính kèm (PDF, Word, Excel...)</label>
                <input type="file" name="doc_file" class="form-control" <?php echo $id == 0 ? 'required' : ''; ?>>
                <?php if ($doc['file_path']) echo "<small class='text-success mt-2 d-block'>File hiện tại: {$doc['file_path']}</small>"; ?>
            </div>
            <button type="submit" class="btn btn-primary">Lưu lại</button>
            <a href="index.php" class="btn btn-gray-200">Hủy</a>
        </form>
    </div>
    <?php include '../includes/footer.php'; ?>
</main>