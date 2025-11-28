<?php
// 1. KẾT NỐI DATABASE
require_once '../admin/config/db_connection.php';

// 2. LẤY ID TỪ URL (Ví dụ: ?id=5)
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // 3. TRUY VẤN DỮ LIỆU BÀI VIẾT
    $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Xử lý ngày tháng
        $date_post = strtotime($row['created_at']);
        $day = date('d', $date_post);
        $month = "Tháng " . date('m', $date_post);
        $year = date('Y', $date_post);
        $full_date = date('d/m/Y', $date_post);
    } else {
        // Nếu không tìm thấy bài viết thì quay về trang chủ hoặc báo lỗi
        die("Bài viết không tồn tại!");
    }
} else {
    die("Đường dẫn không hợp lệ!");
}

// 4. LẤY BÀI VIẾT GẦN ĐÂY (CHO SIDEBAR)
$recent_sql = "SELECT * FROM news WHERE id != $id ORDER BY created_at DESC LIMIT 3";
$recent_news = $conn->query($recent_sql);
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

    <title><?php echo htmlspecialchars($row['title']); ?> - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
</head>

<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <?php include("../includes/header.php") ?>
    <div class="page-title-area item-bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                        <ul>
                            <li>
                                <a href="../index.php">Trang chủ</a>
                                <i class='bx bx-right-arrow-alt'></i>
                            </li>
                            <li><?php echo htmlspecialchars($row['category']); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="single-blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <?php if ($row['image']): ?>
                                <img src="../assets/img/blog/<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" style="width:100%">
                            <?php else: ?>
                                <img src="../assets/img/blog-details/blog-details.jpg" alt="Default Image">
                            <?php endif; ?>
                        </div>

                        <div class="article-content">
                            <div class="details-date">
                                <ul class="list">
                                    <li><b><?php echo $day; ?></b></li>
                                    <li><?php echo $month; ?></li>
                                </ul>

                                <p class="fw-bold" style="font-style: italic;">
                                    <?php echo nl2br(htmlspecialchars($row['summary'])); ?>
                                </p>
                            </div>

                            <div class="main-content mt-6">
                                <?php
                                // Hiển thị nội dung chi tiết. 
                                // Nếu bạn lưu HTML trong DB thì dùng echo $row['content'];
                                // Nếu lưu text thuần thì dùng echo nl2br($row['content']);
                                echo $row['content'];
                                ?>
                            </div>

                            <blockquote class="wp-block-quote">
                                <p>Giải pháp quản trị tối ưu là nền tảng vững chắc cho sự phát triển bền vững của doanh nghiệp.</p>
                                <cite>- Trường Thành ERP</cite>
                            </blockquote>
                        </div>

                        <div class="post-tags">
                            <div class="links-list">
                                <ul class="tags">
                                    <li><a href="#"><?php echo htmlspecialchars($row['category']); ?></a></li>
                                    <li><a href="#">Tin tức</a></li>
                                </ul>
                                <ul class="social-tags">
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="post-autor">
                            <div class="image">
                                <img src="../assets/img/blog-details/autor.png" alt="image">
                            </div>
                            <div class="content">
                                <h3>Người đăng: Admin</h3>
                                <p>Đội ngũ biên tập viên chuyên nghiệp của Trường Thành ERP.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">

                        <section class="widget widget_search">
                            <form class="search-form search-top">
                                <label>
                                    <span class="screen-reader-text">Tìm kiếm:</span>
                                    <input type="search" class="search-field" placeholder="Tìm kiếm...">
                                </label>
                                <button type="submit"><i class='bx bx-search-alt'></i></button>
                            </form>
                        </section>

                        <section class="widget widget_jilva_posts_thumb">
                            <h3 class="widget-title">Bài viết khác</h3>

                            <?php if ($recent_news && $recent_news->num_rows > 0): ?>
                                <?php while ($recent = $recent_news->fetch_assoc()): ?>
                                    <article class="item">
                                        <a href="?id=<?php echo $recent['id']; ?>" class="thumb">
                                            <?php if ($recent['image']): ?>
                                                <span class="fullimage cover" role="img" style="background-image: url(../assets/img/blog/<?php echo $recent['image']; ?>);"></span>
                                            <?php else: ?>
                                                <span class="fullimage cover bg1" role="img"></span>
                                            <?php endif; ?>
                                        </a>
                                        <div class="info">
                                            <h4 class="title usmall">
                                                <a href="?id=<?php echo $recent['id']; ?>">
                                                    <?php echo htmlspecialchars($recent['title']); ?>
                                                </a>
                                            </h4>
                                            <time><?php echo date('d/m/Y', strtotime($recent['created_at'])); ?></time>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Danh mục</h3>
                            <ul>
                                <li><a href="#">Tin Tức</a></li>
                                <li><a href="#">Kiến Thức Quản Trị</a></li>
                                <li><a href="#">Giải Pháp ERP</a></li>
                            </ul>
                        </section>

                        <section class="widget widget_support">
                            <div class="image">
                                <a href="#"><img src="../assets/img/logo2.svg" alt="image"></a>
                            </div>
                            <div class="text">
                                <h3>Cần Tư Vấn Giải Pháp ERP?</h3>
                                <a href="../lien-he/" class="get-btn">Liên hệ ngay <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </section>

                    </aside>
                </div>
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