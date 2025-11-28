<?php
session_start();
require_once '../config/db_connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // (Tùy chọn) Xóa file ảnh trong thư mục để tiết kiệm dung lượng
    $query = $conn->query("SELECT image FROM news WHERE id = $id");
    $row = $query->fetch_assoc();
    if ($row['image'] && file_exists("../../assets/img/blog/" . $row['image'])) {
        unlink("../../assets/img/blog/" . $row['image']);
    }

    $conn->query("DELETE FROM news WHERE id = $id");
}

header("Location: news.php");
exit();
