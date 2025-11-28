<?php
session_start();

// --- ĐOẠN CHECK BẢO MẬT ---
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
// --------------------------
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Trang quản trị</title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <h3>Menu Admin</h3>
            <ul>
                <li><a href="index.php">Tổng quan</a></li>
                <li><a href="news.php">Quản lý Tin tức</a></li>
                <li><a href="products.php">Quản lý Sản phẩm</a></li>
                <li><a href="logout.php">Đăng xuất (<?php echo $_SESSION['admin_name']; ?>)</a></li>
            </ul>
        </nav>

        <div id="content">
            <h1>Chào mừng quay trở lại!</h1>
            <p>Đây là nội dung chính của trang quản trị.</p>
        </div>
    </div>
</body>

</html>