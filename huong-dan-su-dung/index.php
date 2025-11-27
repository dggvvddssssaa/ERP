<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <!--=== BoxIcons CSS ===-->
    <link rel="stylesheet" href="../assets/css/boxicons.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <!-- Owl Default CSS -->
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="../assets/css/odometer.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="../assets/css/nice-select.min.css">
    <!--=== MeanMenu CSS ===-->
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="../assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <!--=== Title ===-->
    <title>Hướng Dẫn Sử Dụng - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

    <style>
        /* Custom CSS để tinh chỉnh giao diện Hướng dẫn sử dụng theo style Jilva */
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
            /* Màu chủ đạo Jilva */
            color: #fff;
            border-color: #f12711;
        }

        .category-list li a i {
            margin-right: 10px;
            vertical-align: middle;
        }

        /* Video Card Style */
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

        /* Document Item Style */
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
    </style>
</head>

<body>

    <!-- Start Preloader Area -->
    <!-- Đã bỏ style="display:none" để nó hoạt động bình thường -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- End Preloader Area -->

    <!-- HEADER -->
    <?php include("../includes/header.php") ?>
    <!-- HEADER -->


    <!-- Start Help Center Area -->
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <!-- Search Bar -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="search-box-area text-center">
                        <form>
                            <div class="row">
                                <div class="col-lg-10 col-md-10">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm hướng dẫn, tính năng hoặc câu hỏi...">
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
                <!-- Sidebar Categories -->
                <div class="col-lg-3">
                    <div class="sidebar-widget">
                        <h3>Danh Mục</h3>
                        <ul class="category-list">
                            <li><a href="#" class="active"><i class='bx bx-grid-alt'></i> Tất cả</a></li>
                            <li><a href="#"><i class='bx bx-money'></i> Tài chính</a></li>
                            <li><a href="#"><i class='bx bx-user-pin'></i> Nhân sự (HR)</a></li>
                            <li><a href="#"><i class='bx bx-cart'></i> Bán hàng</a></li>
                            <li><a href="#"><i class='bx bx-package'></i> Kho vận</a></li>
                            <li><a href="#"><i class='bx bx-bar-chart-square'></i> Báo cáo</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget text-center">
                        <h3>Hỗ Trợ Trực Tiếp</h3>
                        <div class="mb-3">
                            <i class='bx bx-phone-call' style="font-size: 30px; color: #f12711;"></i>
                            <p class="font-weight-bold mt-2">1900 1234</p>
                        </div>
                        <div class="mb-3">
                            <i class='bx bx-envelope' style="font-size: 30px; color: #0067ff;"></i>
                            <p class="mt-2">support@truongthanh.com</p>
                        </div>
                        <a href="#" class="default-btn">Chat Ngay</a>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-9">
                    <!-- Video Section -->
                    <div class="section-title text-left">
                        <h2>Video Hướng Dẫn</h2>
                        <p>Các video ngắn giúp bạn thao tác dễ dàng hơn.</p>
                    </div>

                    <div class="row">
                        <!-- Video 1 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="video-card">
                                <div class="video-thumb">
                                    <img src="https://readdy.ai/api/search-image?query=financial dashboard interface&width=400&height=225" alt="image">
                                    <a href="#" class="play-icon popup-youtube"><i class='bx bx-play-circle'></i></a>
                                </div>
                                <div class="video-content">
                                    <h4>Quản lý tài chính cơ bản</h4>
                                    <p>Cách thiết lập và quản lý dòng tiền, báo cáo thuế.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Video 2 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="video-card">
                                <div class="video-thumb">
                                    <img src="https://readdy.ai/api/search-image?query=HR management software&width=400&height=225" alt="image">
                                    <a href="#" class="play-icon popup-youtube"><i class='bx bx-play-circle'></i></a>
                                </div>
                                <div class="video-content">
                                    <h4>Quản lý nhân sự & Chấm công</h4>
                                    <p>Hướng dẫn tạo hồ sơ nhân viên và xuất bảng lương.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="video-card">
                                <div class="video-thumb">
                                    <img src="https://readdy.ai/api/search-image?query=CRM sales dashboard&width=400&height=225" alt="image">
                                    <a href="#" class="play-icon popup-youtube"><i class='bx bx-play-circle'></i></a>
                                </div>
                                <div class="video-content">
                                    <h4>Quy trình bán hàng chuẩn</h4>
                                    <p>Từ tạo báo giá đến chốt đơn hàng và xuất hóa đơn.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Video 4 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="video-card">
                                <div class="video-thumb">
                                    <img src="https://readdy.ai/api/search-image?query=Inventory warehouse management&width=400&height=225" alt="image">
                                    <a href="#" class="play-icon popup-youtube"><i class='bx bx-play-circle'></i></a>
                                </div>
                                <div class="video-content">
                                    <h4>Quản lý kho vận & Tồn kho</h4>
                                    <p>Nhập xuất kho, kiểm kê và cảnh báo hàng tồn.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Documentation Section -->
                    <div class="section-title text-left mt-5">
                        <h2>Tài Liệu PDF</h2>
                        <p>Tải xuống tài liệu hướng dẫn chi tiết.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="doc-item">
                                <div class="doc-icon"><i class='bx bxs-file-pdf'></i></div>
                                <div class="doc-info">
                                    <h5>Hướng dẫn Tài chính (2.5 MB)</h5>
                                    <a href="#" class="download-btn">Tải xuống <i class='bx bx-download'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="doc-item">
                                <div class="doc-icon"><i class='bx bxs-file-pdf'></i></div>
                                <div class="doc-info">
                                    <h5>Hướng dẫn Nhân sự (3.1 MB)</h5>
                                    <a href="#" class="download-btn">Tải xuống <i class='bx bx-download'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="doc-item">
                                <div class="doc-icon"><i class='bx bxs-file-pdf'></i></div>
                                <div class="doc-info">
                                    <h5>Quy trình Bán hàng (1.8 MB)</h5>
                                    <a href="#" class="download-btn">Tải xuống <i class='bx bx-download'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="doc-item">
                                <div class="doc-icon"><i class='bx bxs-file-pdf'></i></div>
                                <div class="doc-info">
                                    <h5>Cài đặt hệ thống (4.2 MB)</h5>
                                    <a href="#" class="download-btn">Tải xuống <i class='bx bx-download'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Help Center Area -->

    <!-- Start FAQ Area -->
    <section class="faq-area bg-f9f9f9 pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span>FAQ</span>
                <h2>Câu Hỏi Thường Gặp</h2>
                <p>Những thắc mắc phổ biến khi sử dụng hệ thống.</p>
            </div>

            <div class="faq-accordion-content">
                <ul class="accordion">
                    <li class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Làm thế nào để cài đặt hệ thống ERP lần đầu?
                        </a>
                        <p class="accordion-content show">Để cài đặt hệ thống ERP lần đầu, bạn cần thực hiện các bước sau: 1) Tải xuống file cài đặt từ trang chủ, 2) Chạy file cài đặt với quyền Administrator, 3) Làm theo hướng dẫn trên màn hình, 4) Cấu hình cơ sở dữ liệu.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Tôi quên mật khẩu đăng nhập, phải làm sao?
                        </a>
                        <p class="accordion-content">Nếu bạn quên mật khẩu, có thể sử dụng tính năng "Quên mật khẩu" trên trang đăng nhập. Hệ thống sẽ gửi link reset mật khẩu qua email đã đăng ký. Hoặc liên hệ Admin công ty.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Làm thế nào để sao lưu dữ liệu trong hệ thống?
                        </a>
                        <p class="accordion-content">Hệ thống có tính năng sao lưu tự động hàng ngày. Bạn cũng có thể tạo bản sao lưu thủ công bằng cách vào menu Hệ thống > Sao lưu & Khôi phục > Tạo bản sao lưu.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Tôi có thể tùy chỉnh giao diện theo nhu cầu không?
                        </a>
                        <p class="accordion-content">Có, hệ thống cho phép tùy chỉnh giao diện theo nhu cầu. Bạn có thể thay đổi màu sắc, logo, bố cục dashboard, và tạo các báo cáo tùy chỉnh.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->

    <!-- Start CTA Area -->
    <section class="smarter-area pt-100 pb-100" style="background: linear-gradient(to right, #f12711, #f5af19);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="smarter-content">
                        <h2 class="text-white">Cần Hỗ Trợ Thêm?</h2>
                        <p class="text-white">Đội ngũ chuyên gia của chúng tôi sẵn sàng hỗ trợ bạn 24/7 để đảm bảo hệ thống vận hành trơn tru.</p>
                    </div>
                </div>

                <div class="col-lg-4 text-right">
                    <div class="smarter-btn">
                        <a href="#" class="btn-one bg-white text-dark">
                            Liên Hệ Ngay
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Area -->

    <!-- FOOTER -->
    <?php include("../includes/footer.php") ?>
    <!-- FOOTER -->

    <!-- Start Go Top Section -->
    <div class="go-top">
        <i class="bx bx-chevron-up"></i>
        <i class="bx bx-chevron-up"></i>
    </div>
    <!-- End Go Top Section -->

    <!-- Jquery Slim JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--=== MeanMenu JS ===-->
    <script src="../assets/js/jquery.meanmenu.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Appear JS -->
    <script src="../assets/js/jquery.appear.min.js"></script>
    <!-- Odometer JS -->
    <script src="../assets/js/odometer.min.js"></script>
    <!-- Nice Select JS -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <!-- Wow Popup JS -->
    <script src="../assets/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Script xử lý filter danh mục (Mô phỏng) -->
    <script>
        $(document).ready(function() {
            // Hiệu ứng click danh mục
            $('.category-list a').click(function(e) {
                e.preventDefault();
                $('.category-list a').removeClass('active');
                $(this).addClass('active');
            });

            // SCRIPT QUAN TRỌNG: Tắt Preloader sau khi trang tải xong
            $(window).on('load', function() {
                $('.preloader').fadeOut(500);
            });
        });
    </script>
</body>

</html>