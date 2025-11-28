<?php
// 1. KẾT NỐI DATABASE
require_once '../admin/config/db_connection.php';

// --- CẤU HÌNH PHÂN TRANG ---
$limit = 6; // Số bài viết hiển thị trên 1 trang
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1; // Trang hiện tại
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit; // Vị trí bắt đầu lấy trong DB

// 2. TÍNH TỔNG SỐ BÀI VIẾT ĐỂ TÍNH SỐ TRANG
$total_result = $conn->query("SELECT COUNT(*) as total FROM news");
$total_row = $total_result->fetch_assoc();
$total_records = $total_row['total'];
$total_pages = ceil($total_records / $limit); // Làm tròn lên (VD: 13 bài / 6 = 2.16 -> 3 trang)

// 3. LẤY DANH SÁCH TIN TỨC THEO TRANG
// Sắp xếp bài mới nhất lên đầu (ORDER BY created_at DESC)
// LIMIT: Lấy bao nhiêu bài, OFFSET: Bỏ qua bao nhiêu bài đầu
$sql = "SELECT * FROM news ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/boxicons.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/css/odometer.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.min.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dark.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <title>Tin Tức - Trường Thành ERP | Kiến Thức Quản Trị Doanh Nghiệp</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
</head>

<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <?php include("../includes/header.php") ?>

    <div class="page-title-area item-bg-13">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Tin Tức & Sự Kiện</h2>
                        <ul>
                            <li>
                                <a href="../index.php">Trang chủ</a>
                                <i class='bx bx-right-arrow-alt'></i>
                            </li>
                            <li>Tin tức</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span>Cập nhật mới nhất</span>
                <h2>Kiến Thức & Tin Tức ERP</h2>
                <p>Cập nhật các xu hướng quản trị doanh nghiệp, chuyển đổi số và các giải pháp phần mềm tối ưu cho Xây dựng, Bất động sản và Sản xuất.</p>
            </div>

            <div class="row">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <div class="image">
                                    <a href="../xem-tin-tuc/?id=<?php echo $row['id']; ?>">
                                        <?php if (!empty($row['image'])): ?>
                                            <img src="../assets/img/blog/<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" style="height: 250px; object-fit: cover;">
                                        <?php else: ?>
                                            <img src="../assets/img/blog/default.jpg" alt="Default Image" style="height: 250px; object-fit: cover;">
                                        <?php endif; ?>
                                    </a>
                                    <div class="btn">
                                        <a href="#"><?php echo htmlspecialchars($row['category']); ?></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="post-meta">
                                        <li>
                                            <i class='bx bxs-calendar'></i>
                                            <?php echo date('d/m/Y', strtotime($row['created_at'])); ?>
                                        </li>
                                        <li>
                                            <i class='bx bx-user'></i>
                                            Admin
                                        </li>
                                    </ul>

                                    <h3>
                                        <a href="../xem-tin-tuc/?id=<?php echo $row['id']; ?>">
                                            <?php
                                            // Cắt tiêu đề nếu quá dài
                                            $title = htmlspecialchars($row['title']);
                                            echo (strlen($title) > 60) ? substr($title, 0, 60) . '...' : $title;
                                            ?>
                                        </a>
                                    </h3>

                                    <p>
                                        <?php
                                        // Cắt mô tả ngắn gọn
                                        $summary = htmlspecialchars($row['summary']);
                                        echo (strlen($summary) > 100) ? substr($summary, 0, 100) . '...' : $summary;
                                        ?>
                                    </p>

                                    <a href="../xem-tin-tuc/?id=<?php echo $row['id']; ?>" class="read-more">
                                        Xem thêm
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p>Hiện chưa có bài viết nào.</p>
                    </div>
                <?php endif; ?>

                <?php if ($total_pages > 1): ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <?php if ($page > 1): ?>
                                <a href="?page=<?php echo ($page - 1); ?>" class="prev page-numbers">
                                    <i class='bx bx-left-arrow-alt'></i>
                                </a>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <?php if ($i == $page): ?>
                                    <span class="page-numbers current" aria-current="page"><?php echo $i; ?></span>
                                <?php else: ?>
                                    <a href="?page=<?php echo $i; ?>" class="page-numbers"><?php echo $i; ?></a>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if ($page < $total_pages): ?>
                                <a href="?page=<?php echo ($page + 1); ?>" class="next page-numbers">
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include("../includes/footer.php") ?>

    <div class="go-top">
        <i class="bx bx-chevron-up"></i>
        <i class="bx bx-chevron-up"></i>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.meanmenu.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.appear.min.js"></script>
    <script src="../assets/js/odometer.min.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/js/form-validator.min.js"></script>
    <script src="../assets/js/contact-form-script.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>