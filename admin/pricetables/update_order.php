<?php
require_once '../config/db_connection.php';

// Kiểm tra xem có dữ liệu gửi lên không
if (isset($_POST['item'])) {
    $ids = $_POST['item']; // Mảng ID được gửi từ Ajax

    // Duyệt qua mảng ID và cập nhật thứ tự mới
    // $position bắt đầu từ 0, mỗi lần lặp tăng lên 1
    foreach ($ids as $position => $id) {
        $id = intval($id);
        $order = $position + 1; // Để số thứ tự bắt đầu từ 1

        $conn->query("UPDATE pricing_comparisons SET sort_order = $order WHERE id = $id");
    }
    echo "Đã cập nhật thứ tự!";
}
