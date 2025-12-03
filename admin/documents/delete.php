<?php
session_start();
require_once '../../config/db_connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $res = $conn->query("SELECT file_path FROM documents WHERE id=$id");
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $file = "../../assets/uploads/documents/" . $row['file_path'];
        if (file_exists($file)) unlink($file);
    }
    $conn->query("DELETE FROM documents WHERE id=$id");
}
header("Location: index.php");
exit();
