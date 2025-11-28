<?php
session_start();
// Nếu đã đăng nhập thì chuyển thẳng vào dashboard
if (isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}

// Xử lý khi bấm nút Login
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // LƯU Ý: Ở dự án thật, bạn nên kiểm tra từ Database và mã hóa mật khẩu (password_hash)
    // Đây là code mẫu hard-code để test nhanh: admin / 123456
    if ($user == "admin" && $pass == "123456") {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = "Quản trị viên";
        header("Location: index.php");
        exit();
    } else {
        $error = "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Login - ERP Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-card {
            width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background: white;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h3 class="text-center mb-4">ERP Đăng Nhập</h3>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
    </div>
</body>

</html>