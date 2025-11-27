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
    <title>Bảng Giá - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <style>
        /* Custom CSS cho bảng so sánh */
        .comparison-table {
            margin-top: 50px;
        }

        .comparison-table table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        .comparison-table th {
            background: #f8f9fa;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            color: #1a2b37;
        }

        .comparison-table th:first-child {
            text-align: left;
        }

        .comparison-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
            color: #57647c;
        }

        .comparison-table td:first-child {
            text-align: left;
            font-weight: 600;
            color: #1a2b37;
        }

        .comparison-table .bx-check {
            color: #28a745;
            font-size: 24px;
        }

        .comparison-table .bx-x {
            color: #dc3545;
            font-size: 24px;
        }

        .highlight-col {
            background-color: rgba(255, 107, 53, 0.05);
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
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Bảng Giá Dịch Vụ</h2>
                        <p>Chọn gói phù hợp với quy mô và nhu cầu của doanh nghiệp bạn</p>
                        <ul>
                            <li>
                                <a href="index.html">Trang chủ</a>
                                <i class='bx bx-right-arrow-alt'></i>
                            </li>
                            <li>Bảng giá</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Pricing Area -->
    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Gói Dịch Vụ</span>
                <h2>Chi Phí Linh Hoạt - Tối Ưu Hiệu Quả</h2>
                <ul class="pricing-plan">
                    <li>
                        <i class='bx bx-check'></i>
                        Dùng thử miễn phí 30 ngày
                    </li>
                    <li>
                        <i class='bx bx-check'></i>
                        Hỗ trợ kỹ thuật 24/7
                    </li>
                </ul>
            </div>

            <div class="tab pricing-list-tab">
                <ul class="tabs">
                    <li>
                        <a href="#">
                            Theo Tháng
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Theo Năm
                            <span>
                                <img src="../assets/img/icons/curve-arrow.png" alt="image">
                                Tiết kiệm 20%
                            </span>
                        </a>
                    </li>
                </ul>

                <div class="tab_content">
                    <!-- Tab Theo Tháng -->
                    <div class="tabs_item">
                        <div class="row">
                            <!-- Gói Basic -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Gói Basic</h3>
                                        <p>Dành cho doanh nghiệp nhỏ</p>
                                    </div>
                                    <div class="price">
                                        2,500,000<sup>đ</sup>
                                        <p>mỗi tháng</p>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i class='bx bx-check'></i> Tối đa 10 người dùng</li>
                                        <li><i class='bx bx-check'></i> Quản lý tài chính cơ bản</li>
                                        <li><i class='bx bx-check'></i> Quản lý bán hàng</li>
                                        <li><i class='bx bx-check'></i> Quản lý kho hàng</li>
                                        <li><i class='bx bx-check'></i> Báo cáo cơ bản</li>
                                        <li><i class='bx bx-check'></i> Hỗ trợ qua Email</li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="../lien-he/" class="default-btn">
                                            Đăng ký ngay
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Gói Professional -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table active">
                                    <div class="popular">
                                        <a href="#">Phổ biến nhất</a>
                                    </div>
                                    <div class="pricing-header">
                                        <h3>Gói Professional</h3>
                                        <p>Dành cho doanh nghiệp vừa</p>
                                    </div>
                                    <div class="price">
                                        4,500,000<sup>đ</sup>
                                        <p>mỗi tháng</p>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i class='bx bx-check'></i> <b>Tất cả tính năng Basic</b></li>
                                        <li><i class='bx bx-check'></i> Tối đa 50 người dùng</li>
                                        <li><i class='bx bx-check'></i> Quản lý nhân sự (HRM)</li>
                                        <li><i class='bx bx-check'></i> Quản lý dự án</li>
                                        <li><i class='bx bx-check'></i> Báo cáo nâng cao (BI)</li>
                                        <li><i class='bx bx-check'></i> API tích hợp</li>
                                        <li><i class='bx bx-check'></i> Hỗ trợ điện thoại & Email</li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="../lien-he/" class="default-btn">
                                            Đăng ký ngay
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Gói Enterprise -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Gói Enterprise</h3>
                                        <p>Dành cho tập đoàn lớn</p>
                                    </div>
                                    <div class="price">
                                        Liên Hệ
                                        <p>Báo giá theo yêu cầu</p>
                                    </div>

                                    <ul class="pricing-features">
                                        <li><i class='bx bx-check'></i> <b>Tất cả tính năng Pro</b></li>
                                        <li><i class='bx bx-check'></i> Người dùng không giới hạn</li>
                                        <li><i class='bx bx-check'></i> Tùy chỉnh không giới hạn</li>
                                        <li><i class='bx bx-check'></i> Multi-company (Đa công ty)</li>
                                        <li><i class='bx bx-check'></i> Bảo mật nâng cao</li>
                                        <li><i class='bx bx-check'></i> Hỗ trợ 1:1 (Dedicated)</li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="../lien-he/" class="default-btn">
                                            Liên hệ tư vấn
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Theo Năm (Giá ưu đãi) -->
                    <div class="tabs_item">
                        <div class="row">
                            <!-- Gói Basic Năm -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Gói Basic</h3>
                                        <p>Thanh toán theo năm</p>
                                    </div>
                                    <div class="price">
                                        25,000,000<sup>đ</sup>
                                        <p>mỗi năm</p>
                                    </div>
                                    <div class="text text-success">Tiết kiệm 5,000,000đ</div>

                                    <ul class="pricing-features">
                                        <li><i class='bx bx-check'></i> Tối đa 10 người dùng</li>
                                        <li><i class='bx bx-check'></i> Quản lý tài chính cơ bản</li>
                                        <li><i class='bx bx-check'></i> Quản lý bán hàng</li>
                                        <li><i class='bx bx-check'></i> Quản lý kho hàng</li>
                                        <li><i class='bx bx-check'></i> Báo cáo cơ bản</li>
                                        <li><i class='bx bx-check'></i> Hỗ trợ qua Email</li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="../lien-he/" class="default-btn">
                                            Đăng ký ngay
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Gói Pro Năm -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table active">
                                    <div class="popular">
                                        <a href="#">Phổ biến nhất</a>
                                    </div>
                                    <div class="pricing-header">
                                        <h3>Gói Professional</h3>
                                        <p>Thanh toán theo năm</p>
                                    </div>
                                    <div class="price">
                                        45,000,000<sup>đ</sup>
                                        <p>mỗi năm</p>
                                    </div>
                                    <div class="text text-success">Tiết kiệm 9,000,000đ</div>

                                    <ul class="pricing-features">
                                        <li><i class='bx bx-check'></i> <b>Tất cả tính năng Basic</b></li>
                                        <li><i class='bx bx-check'></i> Tối đa 50 người dùng</li>
                                        <li><i class='bx bx-check'></i> Quản lý nhân sự (HRM)</li>
                                        <li><i class='bx bx-check'></i> Quản lý dự án</li>
                                        <li><i class='bx bx-check'></i> Báo cáo nâng cao (BI)</li>
                                        <li><i class='bx bx-check'></i> API tích hợp</li>
                                        <li><i class='bx bx-check'></i> Hỗ trợ điện thoại & Email</li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="../lien-he/" class="default-btn">
                                            Đăng ký ngay
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Gói Enterprise Năm -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Gói Enterprise</h3>
                                        <p>Dành cho tập đoàn lớn</p>
                                    </div>
                                    <div class="price">
                                        Liên Hệ
                                        <p>Báo giá theo yêu cầu</p>
                                    </div>
                                    <div class="text">Giải pháp may đo</div>

                                    <ul class="pricing-features">
                                        <li><i class='bx bx-check'></i> <b>Tất cả tính năng Pro</b></li>
                                        <li><i class='bx bx-check'></i> Người dùng không giới hạn</li>
                                        <li><i class='bx bx-check'></i> Tùy chỉnh không giới hạn</li>
                                        <li><i class='bx bx-check'></i> Multi-company (Đa công ty)</li>
                                        <li><i class='bx bx-check'></i> Bảo mật nâng cao</li>
                                        <li><i class='bx bx-check'></i> Hỗ trợ 1:1 (Dedicated)</li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="../lien-he/" class="default-btn">
                                            Liên hệ tư vấn
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bảng So Sánh Chi Tiết -->
            <div class="comparison-table table-responsive">
                <div class="section-title">
                    <h2>So Sánh Chi Tiết Tính Năng</h2>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Tính năng</th>
                            <th scope="col">Basic</th>
                            <th scope="col" class="highlight-col">Professional</th>
                            <th scope="col">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Số lượng người dùng</td>
                            <td>Tối đa 10</td>
                            <td class="highlight-col">Tối đa 50</td>
                            <td>Không giới hạn</td>
                        </tr>
                        <tr>
                            <td>Quản lý tài chính</td>
                            <td><i class='bx bx-check'></i></td>
                            <td class="highlight-col"><i class='bx bx-check'></i></td>
                            <td><i class='bx bx-check'></i></td>
                        </tr>
                        <tr>
                            <td>Quản lý nhân sự (HRM)</td>
                            <td><i class='bx bx-x'></i></td>
                            <td class="highlight-col"><i class='bx bx-check'></i></td>
                            <td><i class='bx bx-check'></i></td>
                        </tr>
                        <tr>
                            <td>Quản lý dự án</td>
                            <td><i class='bx bx-x'></i></td>
                            <td class="highlight-col"><i class='bx bx-check'></i></td>
                            <td><i class='bx bx-check'></i></td>
                        </tr>
                        <tr>
                            <td>API Tích hợp</td>
                            <td><i class='bx bx-x'></i></td>
                            <td class="highlight-col"><i class='bx bx-check'></i></td>
                            <td><i class='bx bx-check'></i></td>
                        </tr>
                        <tr>
                            <td>Tùy chỉnh giao diện</td>
                            <td>Cơ bản</td>
                            <td class="highlight-col">Cơ bản</td>
                            <td>Không giới hạn (May đo)</td>
                        </tr>
                        <tr>
                            <td>Hỗ trợ kỹ thuật</td>
                            <td>Email</td>
                            <td class="highlight-col">Email + Điện thoại</td>
                            <td>Dedicated Support (1:1)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

    <!-- Start FAQ Area -->
    <section class="faq-area bg-f9f9f9 ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Giải Đáp Thắc Mắc</span>
                <h2>Câu Hỏi Thường Gặp</h2>
                <p>Giải đáp những thắc mắc phổ biến về chi phí, thanh toán và triển khai</p>
            </div>

            <div class="faq-accordion-content">
                <ul class="accordion">
                    <li class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Có được dùng thử miễn phí không?
                        </a>
                        <p class="accordion-content show">Có, chúng tôi cung cấp gói dùng thử miễn phí 30 ngày với đầy đủ tính năng của gói Professional. Bạn có thể đăng ký ngay mà không cần thẻ tín dụng để trải nghiệm hệ thống.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Có thể thay đổi gói dịch vụ sau khi đăng ký không?
                        </a>
                        <p class="accordion-content">Hoàn toàn có thể. Bạn có thể nâng cấp hoặc hạ cấp gói dịch vụ bất cứ lúc nào. Phí sẽ được tính toán lại dựa trên thời gian sử dụng thực tế và gói cước mới.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Có ưu đãi gì khi thanh toán theo năm?
                        </a>
                        <p class="accordion-content">Khi thanh toán theo năm, bạn sẽ được giảm khoảng 20% so với thanh toán theo tháng. Ví dụ: Gói Professional chỉ còn 45 triệu/năm thay vì 54 triệu nếu trả từng tháng.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Chi phí triển khai và đào tạo có tính riêng không?
                        </a>
                        <p class="accordion-content">Không, chi phí triển khai cơ bản và đào tạo hướng dẫn sử dụng online đã bao gồm trong gói dịch vụ. Chỉ có những yêu cầu tùy chỉnh tính năng đặc biệt (Customize) hoặc đào tạo offline tận nơi mới có thể phát sinh chi phí bổ sung.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i>
                            Có chính sách hoàn tiền không?
                        </a>
                        <p class="accordion-content">Có, chúng tôi có chính sách hoàn tiền 100% trong vòng 30 ngày đầu tiên nếu bạn cảm thấy hệ thống không phù hợp với nhu cầu của doanh nghiệp.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->

    <!-- Start Overview Area (CTA) -->
    <section class="overview-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="overview-content">
                        <h2>Bắt Đầu Chuyển Đổi Số Ngay Hôm Nay</h2>
                        <p>Đăng ký tư vấn miễn phí để nhận báo giá chi tiết và lộ trình triển khai phù hợp nhất với doanh nghiệp của bạn.</p>

                        <div class="overview-btn">
                            <a href="../lien-he/" class="btn-one">
                                Đăng Ký Tư Vấn
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                            <a href="tel:19001234" class="btn-two">
                                Gọi Ngay: 1900 1234
                                <i class='bx bxs-phone-call'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="overview-image">
                        <img src="../assets/img/overview/image2.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Overview Area -->

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
</body>

</html>