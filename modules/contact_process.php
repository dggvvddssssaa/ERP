<?php
// Gọi file kết nối (trỏ đúng đường dẫn vào thư mục admin)
require_once '../config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form dựa trên thuộc tính name="..."
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number']; // name trong form là phone_number
    $subject = $_POST['msg_subject']; // name trong form là msg_subject
    $message = $_POST['message'];

    // Chuẩn bị câu lệnh SQL
    $sql = "INSERT INTO contacts (full_name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

        if ($stmt->execute()) {
            // Thành công: Báo và quay lại trang cũ
            echo "<script>
                alert('Gửi tin nhắn thành công! Chúng tôi sẽ liên hệ sớm.');
                window.history.back();
            </script>";
        } else {
            echo "Lỗi lưu dữ liệu: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Lỗi kết nối: " . $conn->error;
    }
    $conn->close();
}
