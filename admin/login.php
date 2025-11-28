<?php
session_start();
// Include file kết nối CSDL của bạn (ví dụ ../config.php hoặc ../db.php)
require_once __DIR__ . '/config/db_connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra user
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // --- THÊM ĐOẠN NÀY ĐỂ TEST (Xong nhớ xóa) ---
        echo "Mật khẩu bạn nhập: " . $password . "<br>";
        echo "Mật khẩu trong DB: " . $row['password'] . "<br>";
        echo "Kết quả check: " . (password_verify($password, $row['password']) ? "ĐÚNG" : "SAI");
        die(); // Dừng chương trình để xem
        // Kiểm tra password hash
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_name'] = $row['full_name'];
            header("Location: index.php"); // Chuyển sang trang Dashboard
            exit();
        } else {
            $error = "Sai mật khẩu!";
        }
    } else {
        $error = "Tài khoản không tồn tại!";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
</head>

<body>
    <form method="POST" action="">
        <h2>Đăng nhập hệ thống</h2>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Đăng nhập</button>
    </form>
</body>

</html>