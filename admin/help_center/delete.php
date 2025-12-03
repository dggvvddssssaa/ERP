<?php
session_start();
// 1. Check Login
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}

require_once '../../config/db_connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // 1. Lấy thông tin file để xóa file vật lý trên server
    $query = $conn->query("SELECT file_path, thumbnail FROM help_items WHERE id = $id");
    if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();
        $base_dir = "../../assets/uploads/help/";

        // Xóa file tài liệu/video nếu có
        if (!empty($row['file_path']) && file_exists($base_dir . $row['file_path'])) {
            unlink($base_dir . $row['file_path']);
        }

        // Xóa thumbnail nếu có
        if (!empty($row['thumbnail']) && file_exists($base_dir . $row['thumbnail'])) {
            unlink($base_dir . $row['thumbnail']);
        }
    }

    // 2. Xóa record trong DB
    $stmt = $conn->prepare("DELETE FROM help_items WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Có thể dùng session để lưu thông báo flash msg nếu muốn
        // $_SESSION['success'] = "Đã xóa thành công!";
    } else {
        // $_SESSION['error'] = "Lỗi khi xóa!";
    }
}

// 3. Quay về trang index
header("Location: index.php");
exit();
