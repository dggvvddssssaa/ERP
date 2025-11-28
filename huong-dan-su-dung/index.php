<?php
// KẾT NỐI DB & XỬ LÝ LỌC
require_once '../admin/config/db_connection.php';

// Xử lý tìm kiếm và lọc danh mục
$where = "WHERE 1=1";
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $q = $conn->real_escape_string($_GET['q']);
    $where .= " AND title LIKE '%$q%'";
}
if (isset($_GET['cat_id']) && !empty($_GET['cat_id'])) {
    $cat_id = intval($_GET['cat_id']);
    $where .= " AND category_id = $cat_id";
}

// Lấy danh mục
$cats = $conn->query("SELECT * FROM help_categories");

// Lấy Video
$videos = $conn->query("SELECT * FROM help_items $where AND type='video' ORDER BY id DESC");

// Lấy Tài liệu
$docs = $conn->query("SELECT * FROM help_items $where AND type='document' ORDER BY id DESC");
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

    <title>Hướng Dẫn Sử Dụng - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

    <style>
        .search-box-area {
            background: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }

        .search-box-area input {
            height: 55px;
            border: 1px solid #eeeeee;
            border-radius: 5px;
            padding: 0 20px;
            width: 100%;
            outline: none;
        }

        .sidebar-widget {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .sidebar-widget h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            border-bottom: 1px solid #eeeeee;
        }

        .category-list li {
            list-style: none;
            margin-bottom: 12px;
        }

        .category-list li a {
            display: block;
            padding: 10px 15px;
            background: #fff;
            color: #212529;
            border-radius: 5px;
            transition: 0.3s;
            font-weight: 500;
            border: 1px solid #eee;
        }

        .category-list li a:hover,
        .category-list li a.active {
            background: #f12711;
            color: #fff;
            border-color: #f12711;
        }

        .category-list li a i {
            margin-right: 10px;
            vertical-align: middle;
        }

        .video-card {
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            transition: 0.3s;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .video-thumb {
            position: relative;
            height: 180px;
            background: #000;
        }

        .video-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 50px;
            color: #fff;
            cursor: pointer;
            transition: 0.3s;
        }

        .video-card:hover .play-icon {
            color: #f12711;
            transform: translate(-50%, -50%) scale(1.1);
        }

        .video-content {
            padding: 20px;
        }

        .video-content h4 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .doc-item {
            display: flex;
            align-items: center;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #eee;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .doc-item:hover {
            border-color: #f12711;
        }

        .doc-icon {
            font-size: 40px;
            color: #e74c3c;
            margin-right: 20px;
        }

        .doc-info {
            flex: 1;
        }

        .doc-info h5 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .download-btn {
            padding: 5px 15px;
            background: #f8f9fa;
            color: #333;
            border-radius: 20px;
            font-size: 13px;
            transition: 0.3s;
        }

        .download-btn:hover {
            background: #f12711;
            color: #fff;
        }

        /* CSS cho Popup Video Upload HTML5 */
        .mfp-content video {
            width: 100%;
            max-height: 80vh;
            background: #000;
        }

        .custom-popup-block {
            background: #000;
            padding: 0;
            text-align: center;
            max-width: 800px;
            margin: 20px auto;
            position: relative;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <?php include("../includes/header.php") ?>

    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="search-box-area text-center">
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-lg-10 col-md-10">
                                    <div class="form-group mb-0">
                                        <input type="text" name="q" class="form-control" placeholder="Tìm kiếm hướng dẫn..." value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <button type="submit" class="default-btn" style="width: 100%; height: 55px; line-height: 55px; padding: 0;">
                                        <i class='bx bx-search'></i> Tìm Kiếm
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-widget">
                        <h3>Danh Mục</h3>
                        <ul class="category-list">
                            <li><a href="index.php" class="<?php echo !isset($_GET['cat_id']) ? 'active' : ''; ?>"><i class='bx bx-grid-alt'></i> Tất cả</a></li>
                            <?php while ($c = $cats->fetch_assoc()): ?>
                                <li>
                                    <a href="?cat_id=<?php echo $c['id']; ?>" class="<?php echo (isset($_GET['cat_id']) && $_GET['cat_id'] == $c['id']) ? 'active' : ''; ?>">
                                        <i class='bx <?php echo $c['icon']; ?>'></i> <?php echo $c['name']; ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="sidebar-widget text-center">
                        <h3>Hỗ Trợ Trực Tiếp</h3>
                        <div class="mb-3"><i class='bx bx-phone-call' style="font-size: 30px; color: #f12711;"></i>
                            <p class="font-weight-bold mt-2">1900 1234</p>
                        </div>
                        <div class="mb-3"><i class='bx bx-envelope' style="font-size: 30px; color: #0067ff;"></i>
                            <p class="mt-2">support@truongthanh.com</p>
                        </div>
                        <a href="#" class="default-btn">Chat Ngay</a>
                    </div>
                </div>

                <div class="col-lg-9">

                    <?php if ($videos->num_rows > 0): ?>
                        <div class="section-title text-left">
                            <h2>Video Hướng Dẫn</h2>
                            <p>Các video ngắn giúp bạn thao tác dễ dàng hơn.</p>
                        </div>
                        <div class="row">
                            <?php while ($v = $videos->fetch_assoc()): ?>
                                <?php
                                // LOGIC XÁC ĐỊNH LOẠI VIDEO
                                if (!empty($v['file_path'])) {
                                    // Video Upload
                                    $videoUrl = "../assets/uploads/help/" . $v['file_path'];
                                    $videoClass = "popup-local"; // Class riêng cho file upload
                                } else {
                                    // Youtube Link
                                    $videoUrl = $v['video_link'];
                                    $videoClass = "popup-youtube"; // Class cho youtube
                                }

                                // Ảnh thumbnail
                                $thumbUrl = !empty($v['thumbnail'])
                                    ? "../assets/uploads/help/" . $v['thumbnail']
                                    : "../assets/img/blog/default.jpg";
                                ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="video-card">
                                        <div class="video-thumb">
                                            <img src="<?php echo $thumbUrl; ?>" alt="<?php echo htmlspecialchars($v['title']); ?>">
                                            <a href="<?php echo $videoUrl; ?>" class="play-icon <?php echo $videoClass; ?>">
                                                <i class='bx bx-play-circle'></i>
                                            </a>
                                        </div>
                                        <div class="video-content">
                                            <h4><?php echo htmlspecialchars($v['title']); ?></h4>
                                            <p><?php echo htmlspecialchars($v['description']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($docs->num_rows > 0): ?>
                        <div class="section-title text-left mt-5">
                            <h2>Tài Liệu PDF</h2>
                            <p>Tải xuống tài liệu hướng dẫn chi tiết.</p>
                        </div>
                        <div class="row">
                            <?php while ($d = $docs->fetch_assoc()): ?>
                                <div class="col-lg-6">
                                    <div class="doc-item">
                                        <div class="doc-icon"><i class='bx bxs-file-pdf'></i></div>
                                        <div class="doc-info">
                                            <h5><?php echo htmlspecialchars($d['title']); ?></h5>
                                            <p class="mb-2 text-muted small"><?php echo htmlspecialchars($d['description']); ?></p>

                                            <?php
                                            // Tài liệu luôn lưu ở file_path
                                            $fileUrl = "../assets/uploads/help/" . $d['file_path'];
                                            ?>
                                            <a href="<?php echo $fileUrl; ?>" class="download-btn" download>
                                                Tải xuống <i class='bx bx-download'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($videos->num_rows == 0 && $docs->num_rows == 0): ?>
                        <div class="alert alert-warning text-center">Không tìm thấy nội dung phù hợp.</div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <!-- Start FAQ Area -->
    <section class="faq-area bg-f9f9f9 pt-100 pb-100">
        <div class="container">
            <div class="section-title"> <span>FAQ</span>
                <h2>Câu Hỏi Thường Gặp</h2>
                <p>Những thắc mắc phổ biến khi sử dụng hệ thống.</p>
            </div>
            <div class="faq-accordion-content">
                <ul class="accordion">
                    <li class="accordion-item"> <a class="accordion-title active" href="javascript:void(0)"> <i class="bx bx-chevron-down"></i> Làm thế nào để cài đặt hệ thống ERP lần đầu? </a>
                        <p class="accordion-content show">Để cài đặt hệ thống ERP lần đầu, bạn cần thực hiện các bước sau: 1) Tải xuống file cài đặt từ trang chủ, 2) Chạy file cài đặt với quyền Administrator, 3) Làm theo hướng dẫn trên màn hình, 4) Cấu hình cơ sở dữ liệu.</p>
                    </li>
                    <li class="accordion-item"> <a class="accordion-title" href="javascript:void(0)"> <i class="bx bx-chevron-down"></i> Tôi quên mật khẩu đăng nhập, phải làm sao? </a>
                        <p class="accordion-content">Nếu bạn quên mật khẩu, có thể sử dụng tính năng "Quên mật khẩu" trên trang đăng nhập. Hệ thống sẽ gửi link reset mật khẩu qua email đã đăng ký. Hoặc liên hệ Admin công ty.</p>
                    </li>
                    <li class="accordion-item"> <a class="accordion-title" href="javascript:void(0)"> <i class="bx bx-chevron-down"></i> Làm thế nào để sao lưu dữ liệu trong hệ thống? </a>
                        <p class="accordion-content">Hệ thống có tính năng sao lưu tự động hàng ngày. Bạn cũng có thể tạo bản sao lưu thủ công bằng cách vào menu Hệ thống > Sao lưu & Khôi phục > Tạo bản sao lưu.</p>
                    </li>
                    <li class="accordion-item"> <a class="accordion-title" href="javascript:void(0)"> <i class="bx bx-chevron-down"></i> Tôi có thể tùy chỉnh giao diện theo nhu cầu không? </a>
                        <p class="accordion-content">Có, hệ thống cho phép tùy chỉnh giao diện theo nhu cầu. Bạn có thể thay đổi màu sắc, logo, bố cục dashboard, và tạo các báo cáo tùy chỉnh.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section> <!-- End FAQ Area -->

    <section class="smarter-area pt-100 pb-100" style="background: linear-gradient(to right, #f12711, #f5af19);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="smarter-content">
                        <h2 class="text-white">Cần Hỗ Trợ Thêm?</h2>
                        <p class="text-white">Đội ngũ chuyên gia của chúng tôi sẵn sàng hỗ trợ bạn 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <div class="smarter-btn"><a href="#" class="btn-one bg-white text-dark">Liên Hệ Ngay <i class='bx bx-right-arrow-alt'></i></a></div>
                </div>
            </div>
        </div>
    </section>

    <?php include("../includes/footer.php") ?>

    <div class="go-top"><i class="bx bx-chevron-up"></i><i class="bx bx-chevron-up"></i></div>

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

    <script>
        $(document).ready(function() {
            // 1. Popup cho YOUTUBE (Giữ nguyên)
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });

            // 2. Popup cho VIDEO UPLOAD (Local MP4) - ĐÃ SỬA LỖI
            $('.popup-local').magnificPopup({
                type: 'inline',
                mainClass: 'mfp-fade',
                callbacks: {
                    elementParse: function(item) {
                        // Lấy đường dẫn file video từ href
                        var videoFile = item.el.attr('href');

                        // Tự tạo mã HTML cho video
                        item.src = '<div class="custom-popup-block" style="position:relative; max-width:800px; margin:0 auto;">' +
                            '<video controls autoplay style="width:100%; display:block; box-shadow: 0 0 20px rgba(0,0,0,0.5);">' +
                            '<source src="' + videoFile + '" type="video/mp4">' +
                            'Trình duyệt của bạn không hỗ trợ thẻ video.' +
                            '</video>' +
                            '</div>';
                    }
                }
            });

            // Tắt Preloader
            $(window).on('load', function() {
                $('.preloader').fadeOut(500);
            });
        });
    </script>
</body>

</html>