<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #343a40;
            color: white;
        }

        .sidebar a {
            color: #cfd8dc;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }

        .sidebar a:hover {
            background: #495057;
            color: white;
        }

        .content {
            padding: 20px;
        }

        /* Ẩn thông báo bản quyền/bảo mật của CKEditor 4 */
        .cke_notification_warning {
            display: none !important;
        }

        .cke_notifications_area {
            display: none !important;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="#">ERP System</a>
        <div class="d-flex">
            <span class="text-white me-3">Xin chào, <?php echo $_SESSION['admin_name']; ?></span>
            <a href="logout.php" class="btn btn-sm btn-danger">Đăng xuất</a>
        </div>
    </nav>
    <div class="d-flex">