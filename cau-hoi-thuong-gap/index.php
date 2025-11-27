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
    <title>Câu Hỏi Thường Gặp - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

    <style>
        /* CSS Tùy chỉnh để khớp giao diện FAQ vào Jilva */

        /* Sidebar Styling */
        .sidebar-widget {
            background: #ffffff;
            box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 5px;
        }

        .sidebar-widget h3 {
            font-size: 20px;
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 20px;
            border-bottom: 1px solid #eeeeee;
        }

        .category-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .category-list li {
            margin-bottom: 12px;
        }

        .category-list li a {
            display: block;
            color: #57647c;
            font-weight: 500;
            padding: 10px 15px;
            background: #f9f9f9;
            border-radius: 5px;
            transition: 0.3s;
        }

        .category-list li a:hover,
        .category-list li a.active {
            background: #f12711;
            /* Màu chủ đạo theme */
            color: #ffffff;
            padding-left: 20px;
        }

        .category-list li a i {
            margin-right: 8px;
            font-size: 18px;
            vertical-align: middle;
        }

        /* Search Box */
        .search-widget-area form .form-control {
            height: 50px;
            border: 1px solid #eeeeee;
            border-radius: 5px;
            padding: 0 20px;
            width: 100%;
        }

        .search-widget-area form button {
            position: absolute;
            right: 0;
            top: 0;
            height: 50px;
            width: 50px;
            background: #f12711;
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: 0.3s;
        }

        .search-widget-area form button:hover {
            background: #0e1b29;
        }

        /* FAQ Styling */
        .faq-accordion-content .accordion-item {
            background-color: #fff;
            margin-bottom: 20px;
            box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            border-radius: 5px;
        }

        .faq-accordion-content .accordion-title {
            display: block;
            padding: 15px 20px;
            color: #212529;
            font-weight: 600;
            font-size: 16px;
            position: relative;
            transition: 0.3s;
            cursor: pointer;
        }

        .faq-accordion-content .accordion-title:hover,
        .faq-accordion-content .accordion-title.active {
            color: #f12711;
        }

        .faq-accordion-content .accordion-title i {
            float: right;
            font-size: 20px;
            margin-top: 3px;
            transition: 0.3s;
        }

        .faq-accordion-content .accordion-title.active i {
            transform: rotate(180deg);
        }

        .faq-accordion-content .accordion-content {
            display: none;
            padding: 0 20px 20px;
            color: #57647c;
            line-height: 1.8;
        }

        .faq-accordion-content .accordion-content.show {
            display: block;
        }

        .faq-tag {
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 12px;
            color: #fff;
            margin-right: 10px;
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- End Preloader Area -->

    <!-- HEADER -->
    <?php include("../includes/header.php") ?>
    <!-- HEADER -->

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Câu Hỏi Thường Gặp</h2>
                        <ul>
                            <li>
                                <a href="index.html">Trang chủ</a>
                                <i class='bx bx-right-arrow-alt'></i>
                            </li>
                            <li>Hỗ trợ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Help Center Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <!-- Sidebar (Left) -->
                <div class="col-lg-3 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <!-- Search Widget -->
                        <div class="widget widget_search">
                            <h3 class="widget-title">Tìm Kiếm</h3>
                            <div class="search-widget-area">
                                <form class="search-form">
                                    <div class="position-relative">
                                        <input type="search" class="form-control" placeholder="Tìm câu hỏi...">
                                        <button type="submit"><i class="bx bx-search-alt"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget">
                            <h3>Chủ Đề</h3>
                            <ul class="category-list">
                                <li><a href="#" class="active"><i class='bx bx-grid-alt'></i> Tất cả</a></li>
                                <li><a href="#"><i class='bx bx-info-circle'></i> Tổng quan</a></li>
                                <li><a href="#"><i class='bx bx-money'></i> Chi phí & Triển khai</a></li>
                                <li><a href="#"><i class='bx bx-list-check'></i> Tính năng</a></li>
                                <li><a href="#"><i class='bx bx-support'></i> Hỗ trợ kỹ thuật</a></li>
                                <li><a href="#"><i class='bx bx-shield-quarter'></i> Bảo mật</a></li>
                            </ul>
                        </div>

                        <!-- Contact Support Widget -->
                        <div class="sidebar-widget text-center">
                            <h3>Hỗ Trợ Trực Tiếp</h3>
                            <div class="mt-3 mb-3">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <i class='bx bx-phone-call mr-2' style="font-size: 24px; color: #f12711;"></i>
                                    <span style="font-size: 18px; font-weight: bold;">1900 1234</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class='bx bx-headphone mr-2' style="font-size: 24px; color: #0067ff;"></i>
                                    <span>Live Chat 24/7</span>
                                </div>
                            </div>
                            <a href="#" class="default-btn" style="width: 100%;">
                                Đăng Ký Tư Vấn
                            </a>
                        </div>
                    </aside>
                </div>

                <!-- Main Content (Right) -->
                <div class="col-lg-9 col-md-12">

                    <div class="faq-accordion-content">
                        <ul class="accordion">

                            <!-- Question 1 -->
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <span class="faq-tag bg-primary">Tổng quan</span>
                                    Trường Thành ERP là gì và phù hợp với doanh nghiệp nào?
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="accordion-content show">
                                    <p>Trường Thành ERP là hệ thống quản lý tích hợp toàn diện được thiết kế đặc biệt cho các doanh nghiệp vừa và nhỏ tại Việt Nam. Hệ thống giúp tự động hóa và tối ưu hóa các quy trình kinh doanh từ quản lý bán hàng, kho vận, tài chính đến nhân sự.</p>
                                    <p><strong>Phù hợp với:</strong></p>
                                    <ul>
                                        <li>Doanh nghiệp sản xuất với 50-500 nhân viên</li>
                                        <li>Công ty thương mại, phân phối</li>
                                        <li>Doanh nghiệp dịch vụ và xây dựng</li>
                                        <li>Các công ty đang chuyển đổi số</li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Question 2 -->
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span class="faq-tag bg-success">Chi phí</span>
                                    Chi phí triển khai Trường Thành ERP là bao nhiêu?
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="accordion-content">
                                    <p>Chi phí triển khai Trường Thành ERP được tính linh hoạt theo quy mô và nhu cầu của doanh nghiệp:</p>
                                    <ul>
                                        <li><strong>Gói Starter:</strong> 15-25 triệu VNĐ (10-30 users)</li>
                                        <li><strong>Gói Professional:</strong> 30-50 triệu VNĐ (31-100 users)</li>
                                        <li><strong>Gói Enterprise:</strong> 60-120 triệu VNĐ (100+ users)</li>
                                    </ul>
                                    <p><strong>Bao gồm:</strong> License phần mềm, cài đặt, đào tạo, hỗ trợ 1 năm đầu.</p>
                                </div>
                            </li>

                            <!-- Question 3 -->
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span class="faq-tag bg-success">Triển khai</span>
                                    Thời gian triển khai hệ thống mất bao lâu?
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="accordion-content">
                                    <p>Thời gian triển khai phụ thuộc vào quy mô và độ phức tạp của doanh nghiệp:</p>
                                    <ul>
                                        <li><strong>Gói Starter:</strong> 2-4 tuần (Doanh nghiệp nhỏ)</li>
                                        <li><strong>Gói Professional:</strong> 6-8 tuần (Doanh nghiệp vừa)</li>
                                        <li><strong>Gói Enterprise:</strong> 3-6 tháng (Doanh nghiệp lớn)</li>
                                    </ul>
                                    <p>Các giai đoạn triển khai: Phân tích yêu cầu → Cài đặt → Tùy chỉnh → Đào tạo → Vận hành thử nghiệm → Go-live.</p>
                                </div>
                            </li>

                            <!-- Question 4 -->
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span class="faq-tag bg-info">Tính năng</span>
                                    Trường Thành ERP có những tính năng chính nào?
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="accordion-content">
                                    <p>Trường Thành ERP cung cấp bộ tính năng toàn diện cho quản lý doanh nghiệp:</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Quản lý Bán hàng:</strong> CRM, Báo giá, Đơn hàng, Hóa đơn.
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Quản lý Kho vận:</strong> Nhập xuất tồn, Kiểm kê, Báo cáo.
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <strong>Tài chính Kế toán:</strong> Sổ sách, Công nợ, Báo cáo tài chính.
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <strong>Quản lý Nhân sự:</strong> Hồ sơ, Chấm công, Lương thưởng.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Question 5 -->
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span class="faq-tag bg-info">Tích hợp</span>
                                    Hệ thống có thể tích hợp với các phần mềm khác không?
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="accordion-content">
                                    <p>Trường Thành ERP hỗ trợ tích hợp với nhiều hệ thống và ứng dụng phổ biến:</p>
                                    <ul>
                                        <li>Ngân hàng điện tử, Hóa đơn điện tử</li>
                                        <li>Email Marketing, Sàn E-commerce</li>
                                        <li>Tổng đài Call Center, Microsoft Office</li>
                                    </ul>
                                    <p><strong>API mở:</strong> Hỗ trợ REST API để tích hợp với các hệ thống tùy chỉnh khác theo yêu cầu của doanh nghiệp.</p>
                                </div>
                            </li>

                            <!-- Question 6 -->
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span class="faq-tag bg-warning text-dark">Hỗ trợ</span>
                                    Chính sách hỗ trợ kỹ thuật như thế nào?
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="accordion-content">
                                    <p>Trường Thành ERP cung cấp dịch vụ hỗ trợ kỹ thuật toàn diện 24/7:</p>
                                    <ul>
                                        <li><strong>Hỗ trợ miễn phí (năm đầu):</strong> Hotline 24/7, Email support, Remote support, Đào tạo cơ bản.</li>
                                        <li><strong>Gói hỗ trợ mở rộng:</strong> Hỗ trợ tại chỗ, Tư vấn quy trình, Đào tạo nâng cao, Backup dữ liệu.</li>
                                    </ul>
                                    <p>Cam kết thời gian phản hồi nhanh chóng cho mọi sự cố.</p>
                                </div>
                            </li>

                            <!-- Question 7 -->
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span class="faq-tag bg-danger">Bảo mật</span>
                                    Hệ thống đảm bảo bảo mật dữ liệu như thế nào?
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="accordion-content">
                                    <p>Trường Thành ERP áp dụng các tiêu chuẩn bảo mật cao nhất để bảo vệ dữ liệu doanh nghiệp:</p>
                                    <ul>
                                        <li>Mã hóa SSL 256-bit, Xác thực đa yếu tố (2FA)</li>
                                        <li>Firewall, Anti-DDoS, Backup tự động hàng ngày</li>
                                        <li>Phân quyền chi tiết, Log audit đầy đủ</li>
                                    </ul>
                                    <p>Tuân thủ các tiêu chuẩn ISO 27001 và Luật An toàn thông tin mạng Việt Nam.</p>
                                </div>
                            </li>

                            <!-- Question 8 -->
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span class="faq-tag bg-secondary">Yêu cầu</span>
                                    Yêu cầu hệ thống để chạy Trường Thành ERP?
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="accordion-content">
                                    <p>Trường Thành ERP được thiết kế để chạy trên nhiều nền tảng với yêu cầu linh hoạt:</p>
                                    <ul>
                                        <li><strong>Yêu cầu tối thiểu:</strong> CPU Intel i3, RAM 4GB, Ổ cứng 100GB, Mạng ổn định.</li>
                                        <li><strong>Hỗ trợ nền tảng:</strong> Windows, Web Browser, Mobile App (iOS/Android).</li>
                                    </ul>
                                    <p>Hệ thống có thể triển khai trên Cloud hoặc máy chủ nội bộ tùy theo nhu cầu.</p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Help Center Area -->

    <!-- Start Contact Support Area -->
    <section class="subscribe-area bg-color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="subscribe-content">
                        <h3>Không Tìm Thấy Câu Trả Lời?</h3>
                        <p class="text-white">Đội ngũ chuyên gia của chúng tôi sẵn sàng hỗ trợ bạn qua nhiều kênh khác nhau.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 text-right">
                    <a href="tel:19001234" class="default-btn mr-3"><i class='bx bx-phone-call'></i> Gọi 1900 1234</a>
                    <a href="#" class="optional-btn"><i class='bx bx-envelope'></i> Gửi Email</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Support Area -->

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
    <!--=== Form AjaxChimp JS ===-->
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="../assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="../assets/js/contact-form-script.js"></script>
    <!-- Nice Select JS -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <!-- Wow Popup JS -->
    <script src="../assets/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Script Filter Category (Mô phỏng active) -->
    <script>
        $(document).ready(function() {
            $('.category-list a').click(function(e) {
                e.preventDefault();
                $('.category-list a').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>

</html>