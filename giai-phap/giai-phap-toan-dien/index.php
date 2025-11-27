<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <!--=== BoxIcons CSS ===-->
    <link rel="stylesheet" href="../../assets/css/boxicons.min.css">
    <!--=== RemixIcon CSS (Thêm vào để hiển thị icon giống mẫu mới) ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <!-- Owl Default CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="../../assets/css/magnific-popup.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="../../assets/css/odometer.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="../../assets/css/nice-select.min.css">
    <!--=== MeanMenu CSS ===-->
    <link rel="stylesheet" href="../../assets/css/meanmenu.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="../../assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../assets/css/responsive.css">

    <!--=== Echarts JS ===-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>

    <!--=== Title ===-->
    <title>Giải Pháp ERP & CRM Toàn Diện - Trường Thành Web</title>
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">

    <!-- Font hỗ trợ Tiếng Việt tốt hơn -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        span,
        li {
            font-family: Arial, sans-serif;
        }

        /* Custom CSS để match với thiết kế mới */
        .pricing-card {
            border: 1px solid #eee;
            padding: 30px;
            border-radius: 10px;
            transition: all 0.3s;
            background: #fff;
            height: 100%;
        }

        .pricing-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .pricing-header h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .pricing-price {
            font-size: 36px;
            color: #00B2FF;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .pricing-features li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .pricing-features i {
            margin-right: 10px;
            color: #00B2FF;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s;
        }

        .tab-content.active {
            display: block;
        }

        .feature-tab {
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 30px;
            border: none;
            background: #f1f1f1;
            margin: 0 5px 10px;
            transition: 0.3s;
        }

        .feature-tab.active {
            background: #00B2FF;
            color: #fff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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
    <?php include("../../includes/header.php") ?>
    <!-- HEADER -->

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1" style="background-image: url('https://readdy.ai/api/search-image?query=modern%20abstract%20business%20background%20blue&width=1920&height=600');">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Giải Pháp ERP & CRM</h2>
                        <p style="color: #fff; max-width: 700px; margin: 15px auto;">Tối ưu hóa quy trình, tăng hiệu suất và nâng cao trải nghiệm khách hàng với hệ thống quản lý doanh nghiệp hiện đại.</p>
                        <ul>
                            <li>
                                <a href="./">Trang chủ</a>
                                <i class='bx bx-right-arrow-alt'></i>
                            </li>
                            <li>Dịch vụ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Overview Area -->
    <!-- Thêm style này để xử lý màu chữ trên nền trắng -->
    <style>
        .single-choose-item.bg-white {
            padding: 30px 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            /* Đổ bóng nhẹ */
            transition: all 0.3s;
            height: 100%;
            /* Cân bằng chiều cao các cột */
        }

        /* Ép màu chữ tiêu đề thành màu đen/xanh đậm */
        .single-choose-item.bg-white .title h3 {
            color: #0e1b29 !important;
            font-weight: 700;
            margin-bottom: 15px;
        }

        /* Ép màu chữ nội dung thành màu xám dễ đọc */
        .single-choose-item.bg-white .content p {
            color: #555 !important;
        }

        /* Hiệu ứng khi di chuột vào */
        .single-choose-item.bg-white:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

    <section class="top-management ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Tổng Quan</span>
                <h2>Hệ Thống Quản Trị Toàn Diện</h2>
                <p>Kết hợp sức mạnh của ERP và CRM trong một nền tảng thống nhất, giúp loại bỏ sự phân mảnh dữ liệu.</p>
            </div>

            <div class="row">
                <!-- Cột 1: ERP -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-item bg-white text-center">
                        <div class="icon" style="font-size: 40px; color: #00B2FF; margin-bottom: 20px;">
                            <i class="ri-database-2-line"></i>
                        </div>
                        <div class="title">
                            <h3>ERP - Quản Lý Nguồn Lực</h3>
                        </div>
                        <div class="content">
                            <p>Tích hợp và tự động hóa các quy trình kinh doanh cốt lõi như tài chính, nhân sự, sản xuất, chuỗi cung ứng và mua hàng.</p>
                        </div>
                    </div>
                </div>

                <!-- Cột 2: CRM -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-item bg-white text-center">
                        <div class="icon" style="font-size: 40px; color: #00B2FF; margin-bottom: 20px;">
                            <i class="ri-user-heart-line"></i>
                        </div>
                        <div class="title">
                            <h3>CRM - Quan Hệ Khách Hàng</h3>
                        </div>
                        <div class="content">
                            <p>Tối ưu hóa tương tác với khách hàng, quản lý thông tin, lịch sử mua hàng, và hỗ trợ các chiến dịch marketing.</p>
                        </div>
                    </div>
                </div>

                <!-- Cột 3: Tích hợp -->
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-choose-item bg-white text-center">
                        <div class="icon" style="font-size: 40px; color: #00B2FF; margin-bottom: 20px;">
                            <i class="ri-stack-line"></i>
                        </div>
                        <div class="title">
                            <h3>Tích Hợp Toàn Diện</h3>
                        </div>
                        <div class="content">
                            <p>Kết nối dữ liệu giữa các phòng ban, báo cáo theo thời gian thực giúp lãnh đạo ra quyết định chính xác.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Overview Area -->

    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area pt-100 pb-70 bg-f9f9f9">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="image">
                            <i class="ri-line-chart-line" style="font-size: 40px; color: #00B2FF;"></i>
                        </div>
                        <p>Tăng Hiệu Suất</p>
                        <h3><span class="odometer" data-count="85">00</span>%</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="image">
                            <i class="ri-time-line" style="font-size: 40px; color: #00B2FF;"></i>
                        </div>
                        <p>Giảm Thời Gian Xử Lý</p>
                        <h3><span class="odometer" data-count="65">00</span>%</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="image">
                            <i class="ri-money-dollar-circle-line" style="font-size: 40px; color: #00B2FF;"></i>
                        </div>
                        <p>Tăng Tỷ Lệ Chuyển Đổi</p>
                        <h3><span class="odometer" data-count="40">00</span>%</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="image">
                            <i class="ri-arrow-down-circle-line" style="font-size: 40px; color: #00B2FF;"></i>
                        </div>
                        <p>Giảm Chi Phí Vận Hành</p>
                        <h3><span class="odometer" data-count="30">00</span>%</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!-- Start Benefits Area -->
    <section class="experience-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Lợi Ích</span>
                <h2>Tại Sao Chọn Giải Pháp Của Chúng Tôi?</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="experience-image">
                        <img src="../../assets/img/services/service3.jpg" alt="image" style="border-radius: 10px;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="experience-content">
                        <div class="experience-text">
                            <div class="icon"><i class="ri-line-chart-line"></i></div>
                            <h3>Tăng Hiệu Suất Kinh Doanh</h3>
                            <p>Tự động hóa các quy trình thủ công, giảm thiểu lỗi và tăng tốc độ xử lý, giúp nhân viên tập trung vào các nhiệm vụ giá trị cao.</p>
                        </div>

                        <div class="experience-text">
                            <div class="icon"><i class="ri-eye-line"></i></div>
                            <h3>Tầm Nhìn 360 Độ</h3>
                            <p>Cung cấp cái nhìn toàn diện về hoạt động kinh doanh, từ chuỗi cung ứng đến hành vi khách hàng.</p>
                        </div>

                        <div class="experience-text">
                            <div class="icon"><i class="ri-customer-service-2-line"></i></div>
                            <h3>Nâng Cao Trải Nghiệm Khách Hàng</h3>
                            <p>Cá nhân hóa tương tác với khách hàng, đáp ứng nhanh chóng các yêu cầu và nâng cao sự hài lòng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Benefits Area -->

    <!-- Start Features Tab Area -->
    <!-- Start Features Tab Area -->
    <!-- Đã đổi màu nền sang tối (background-color: #0e1b29) để chữ trắng nổi bật -->
    <section class="why-choose-area ptb-100" style="background-color: #0e1b29;">
        <div class="container">
            <div class="section-title">
                <!-- Đổi màu chữ tiêu đề sang trắng -->
                <span style="color: #ffffff;">Tính Năng Chính</span>
                <h2 style="color: #ffffff;">Khám Phá Sức Mạnh Của Hệ Thống</h2>
            </div>

            <!-- Tab Navigation -->
            <div class="text-center mb-5">
                <button class="feature-tab active" onclick="openTab('tab1', this)">Quản lý khách hàng</button>
                <button class="feature-tab" onclick="openTab('tab2', this)">Bán hàng</button>
                <button class="feature-tab" onclick="openTab('tab3', this)">Kho vận & Mua hàng</button>
                <button class="feature-tab" onclick="openTab('tab4', this)">Tài chính & Kế toán</button>
            </div>

            <!-- Tab Content 1 -->
            <div class="tab-content active" id="tab1">
                <div class="row align-items-center">
                    <!-- Thêm style color: #fff cho cột chứa text -->
                    <div class="col-lg-6" style="color: #ffffff;">
                        <h3 style="color: #ffffff;">Quản Lý Khách Hàng Toàn Diện (CRM)</h3>
                        <p style="color: #e0e0e0;">Tập trung mọi thông tin khách hàng trong một hệ thống thống nhất.</p>
                        <ul class="list-unstyled mt-3">
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Hồ sơ khách hàng 360°: Lưu trữ chi tiết lịch sử mua hàng, tương tác.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Quản lý tương tác: Theo dõi email, cuộc gọi, tin nhắn.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Email marketing tự động: Gửi chiến dịch cá nhân hóa.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Hỗ trợ khách hàng (Ticket System).</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="../../assets/img/services/service3.jpg" class="img-fluid rounded" alt="CRM">
                    </div>
                </div>
            </div>

            <!-- Tab Content 2 -->
            <div class="tab-content" id="tab2">
                <div class="row align-items-center">
                    <div class="col-lg-6" style="color: #ffffff;">
                        <h3 style="color: #ffffff;">Quản Lý Bán Hàng Hiệu Quả</h3>
                        <p style="color: #e0e0e0;">Tối ưu hóa quy trình từ tiềm năng (Lead) đến đơn hàng (Order).</p>
                        <ul class="list-unstyled mt-3">
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Quản lý Pipeline và Cơ hội bán hàng.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Tạo báo giá và đơn hàng nhanh chóng.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Lịch và nhiệm vụ bán hàng cho Sales.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Dự báo doanh số thông minh.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="../../assets/img/services/service3.jpg" class="img-fluid rounded" alt="Sales">
                    </div>
                </div>
            </div>

            <!-- Tab Content 3 -->
            <div class="tab-content" id="tab3">
                <div class="row align-items-center">
                    <div class="col-lg-6" style="color: #ffffff;">
                        <h3 style="color: #ffffff;">Kho Vận & Mua Hàng</h3>
                        <p style="color: #e0e0e0;">Kiểm soát hàng tồn kho chính xác và tối ưu quy trình mua hàng.</p>
                        <ul class="list-unstyled mt-3">
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Quản lý đa kho, chuyển kho nội bộ.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Tích hợp mã vạch và RFID.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Đề xuất mua hàng tự động khi tồn kho thấp.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Theo dõi vận chuyển và giao hàng.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="../../assets/img/services/service3.jpg" class="img-fluid rounded" alt="Inventory">
                    </div>
                </div>
            </div>

            <!-- Tab Content 4 -->
            <div class="tab-content" id="tab4">
                <div class="row align-items-center">
                    <div class="col-lg-6" style="color: #ffffff;">
                        <h3 style="color: #ffffff;">Tài Chính & Kế Toán</h3>
                        <p style="color: #e0e0e0;">Tự động hóa quy trình tài chính, đảm bảo chính xác và minh bạch.</p>
                        <ul class="list-unstyled mt-3">
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Quản lý sổ cái, công nợ phải thu/phải trả.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Tích hợp hóa đơn điện tử.</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Báo cáo dòng tiền (Cashflow).</li>
                            <li style="color: #ffffff;"><i class="bx bx-check text-primary"></i> Lập kế hoạch ngân sách và theo dõi chi tiêu.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="../../assets/img/services/service3.jpg" class="img-fluid rounded" alt="Finance">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Tab Area -->
    <!-- End Features Tab Area -->

    <!-- Start Analytics Charts Area -->
    <section class="analytics-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Báo Cáo & Phân Tích</span>
                <h2>Theo Dõi Hiệu Quả Kinh Doanh</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Hiệu Suất Bán Hàng</h5>
                            <div id="sales-chart" style="width: 100%; height: 350px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Phân Bổ Doanh Thu</h5>
                            <div id="revenue-chart" style="width: 100%; height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Analytics Charts Area -->

    <!-- Start Pricing Area -->
    <section class="pricing-area ptb-100 bg-f9f9f9">
        <div class="container">
            <div class="section-title">
                <span>Bảng Giá</span>
                <h2>Các Gói Dịch Vụ Linh Hoạt</h2>
            </div>
            <div class="row">
                <!-- Gói Cơ Bản -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card text-center">
                        <div class="pricing-header">
                            <h3>Gói Cơ Bản</h3>
                            <div class="pricing-price">2.990k <span style="font-size: 16px; color: #666;">/tháng</span></div>
                            <p>Phù hợp cho doanh nghiệp nhỏ (Startups)</p>
                        </div>
                        <ul class="pricing-features list-unstyled text-left" style="display: inline-block;">
                            <li><i class="bx bx-check-circle"></i> Tối đa 10 người dùng</li>
                            <li><i class="bx bx-check-circle"></i> Quản lý khách hàng cơ bản</li>
                            <li><i class="bx bx-check-circle"></i> Quản lý bán hàng</li>
                            <li><i class="bx bx-check-circle"></i> Báo cáo cơ bản</li>
                        </ul>
                        <div class="mt-4">
                            <a href="../../lien-he/" class="default-btn">Đăng Ký Ngay</a>
                        </div>
                    </div>
                </div>

                <!-- Gói Chuyên Nghiệp -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card text-center" style="border: 2px solid #00B2FF; transform: scale(1.05);">
                        <div class="pricing-header">
                            <span class="badge badge-primary mb-2">Phổ biến nhất</span>
                            <h3>Gói Chuyên Nghiệp</h3>
                            <div class="pricing-price">5.990k <span style="font-size: 16px; color: #666;">/tháng</span></div>
                            <p>Giải pháp toàn diện cho doanh nghiệp vừa</p>
                        </div>
                        <ul class="pricing-features list-unstyled text-left" style="display: inline-block;">
                            <li><i class="bx bx-check-circle"></i> Tối đa 30 người dùng</li>
                            <li><i class="bx bx-check-circle"></i> Quản lý CRM & Sales nâng cao</li>
                            <li><i class="bx bx-check-circle"></i> Quản lý Kho & Mua hàng</li>
                            <li><i class="bx bx-check-circle"></i> Email Marketing tích hợp</li>
                        </ul>
                        <div class="mt-4">
                            <a href="../../lien-he/" class="default-btn">Đăng Ký Ngay</a>
                        </div>
                    </div>
                </div>

                <!-- Gói Doanh Nghiệp -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card text-center">
                        <div class="pricing-header">
                            <h3>Gói Doanh Nghiệp</h3>
                            <div class="pricing-price">Liên hệ</div>
                            <p>Giải pháp tùy chỉnh cho tập đoàn lớn</p>
                        </div>
                        <ul class="pricing-features list-unstyled text-left" style="display: inline-block;">
                            <li><i class="bx bx-check-circle"></i> Không giới hạn người dùng</li>
                            <li><i class="bx bx-check-circle"></i> Tùy biến tính năng (Customize)</li>
                            <li><i class="bx bx-check-circle"></i> API tích hợp đầy đủ</li>
                            <li><i class="bx bx-check-circle"></i> Hỗ trợ 24/7 ưu tiên</li>
                        </ul>
                        <div class="mt-4">
                            <a href="../../lien-he/" class="default-btn">Liên Hệ Tư Vấn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

    <!-- Start Implementation Process -->
    <section class="features-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Lộ Trình</span>
                <h2>Quy Trình Triển Khai Chuyên Nghiệp</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center mb-5">
                        <div class="col-md-2 text-center">
                            <div style="width: 60px; height: 60px; background: #00B2FF; color: #fff; border-radius: 50%; line-height: 60px; font-size: 24px; margin: 0 auto;">1</div>
                        </div>
                        <div class="col-md-10">
                            <h4>Tư Vấn & Phân Tích Nhu Cầu</h4>
                            <p>Khảo sát quy trình hiện tại, xác định bài toán cần giải quyết (1-2 tuần).</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-md-2 text-center">
                            <div style="width: 60px; height: 60px; background: #00B2FF; color: #fff; border-radius: 50%; line-height: 60px; font-size: 24px; margin: 0 auto;">2</div>
                        </div>
                        <div class="col-md-10">
                            <h4>Thiết Kế & Cấu Hình</h4>
                            <p>Thiết lập hệ thống, tùy chỉnh quy trình và báo cáo theo yêu cầu (2-4 tuần).</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-md-2 text-center">
                            <div style="width: 60px; height: 60px; background: #00B2FF; color: #fff; border-radius: 50%; line-height: 60px; font-size: 24px; margin: 0 auto;">3</div>
                        </div>
                        <div class="col-md-10">
                            <h4>Chuyển Đổi Dữ Liệu & Đào Tạo</h4>
                            <p>Import dữ liệu cũ, đào tạo nhân sự sử dụng hệ thống thành thạo (1-3 tuần).</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div style="width: 60px; height: 60px; background: #00B2FF; color: #fff; border-radius: 50%; line-height: 60px; font-size: 24px; margin: 0 auto;">4</div>
                        </div>
                        <div class="col-md-10">
                            <h4>Triển Khai & Hỗ Trợ (Go-live)</h4>
                            <p>Vận hành chính thức và hỗ trợ kỹ thuật liên tục.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Implementation Process -->

    <!-- Start CTA Area -->
    <section class="smarter-area bg-color pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="smarter-content">
                        <h2>Sẵn Sàng Chuyển Đổi Số Doanh Nghiệp Của Bạn?</h2>
                        <p style="color: #fff;">Hãy để chúng tôi giúp bạn tối ưu hóa quy trình, nâng cao hiệu suất và tăng trưởng doanh thu.</p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="smarter-btn">
                        <a href="../../lien-he/" class="btn-one">
                            Đăng ký tư vấn ngay
                            <i class='bx bx-chevrons-right'></i>
                        </a>
                        <a href="tel:0987654321" class="btn-two">
                            <i class='bx bx-phone-call'></i> 0987.654.321
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Area -->

    <!-- FOOTER -->
    <?php include("../../includes/footer.php") ?>
    <!-- FOOTER -->


    <!-- Start Go Top Section -->
    <div class="go-top">
        <i class="bx bx-chevron-up"></i>
        <i class="bx bx-chevron-up"></i>
    </div>
    <!-- End Go Top Section -->

    <!-- Jquery Slim JS -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <!--=== MeanMenu JS ===-->
    <script src="../../assets/js/jquery.meanmenu.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Appear JS -->
    <script src="../../assets/js/jquery.appear.min.js"></script>
    <!-- Odometer JS -->
    <script src="../../assets/js/odometer.min.js"></script>
    <!--=== Form AjaxChimp JS ===-->
    <script src="../../assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="../../assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="../../assets/js/contact-form-script.js"></script>
    <!-- Nice Select JS -->
    <script src="../../assets/js/jquery.nice-select.min.js"></script>
    <!-- Wow Popup JS -->
    <script src="../../assets/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Script for Tabs -->
    <script>
        function openTab(tabName, btn) {
            var i, x, tablinks;
            x = document.getElementsByClassName("tab-content");
            for (i = 0; i < x.length; i++) {
                x[i].classList.remove("active");
            }
            tablinks = document.getElementsByClassName("feature-tab");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).classList.add("active");
            btn.classList.add("active");
        }
    </script>

    <!-- Script for Echarts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sales Chart
            var salesChart = echarts.init(document.getElementById('sales-chart'));
            var salesOption = {
                tooltip: {
                    trigger: 'axis'
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis: {
                    type: 'category',
                    boundaryGap: false,
                    data: ['Q1/24', 'Q2/24', 'Q3/24', 'Q4/24', 'Q1/25', 'Q2/25']
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                        name: 'Doanh số',
                        type: 'line',
                        smooth: true,
                        itemStyle: {
                            color: '#00B2FF'
                        },
                        areaStyle: {
                            color: 'rgba(0, 178, 255, 0.2)'
                        },
                        data: [1200, 1320, 1500, 1880, 2200, 2500]
                    },
                    {
                        name: 'Lợi nhuận',
                        type: 'line',
                        smooth: true,
                        itemStyle: {
                            color: '#FFD700'
                        },
                        data: [320, 390, 450, 600, 750, 900]
                    }
                ]
            };
            salesChart.setOption(salesOption);

            // Revenue Chart
            var revenueChart = echarts.init(document.getElementById('revenue-chart'));
            var revenueOption = {
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    top: '5%',
                    left: 'center'
                },
                series: [{
                    name: 'Doanh thu',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    itemStyle: {
                        borderRadius: 10,
                        borderColor: '#fff',
                        borderWidth: 2
                    },
                    label: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        label: {
                            show: true,
                            fontSize: '20',
                            fontWeight: 'bold'
                        }
                    },
                    data: [{
                            value: 35,
                            name: 'Sản phẩm A',
                            itemStyle: {
                                color: '#00B2FF'
                            }
                        },
                        {
                            value: 25,
                            name: 'Sản phẩm B',
                            itemStyle: {
                                color: '#FFD700'
                            }
                        },
                        {
                            value: 20,
                            name: 'Sản phẩm C',
                            itemStyle: {
                                color: '#FF5733'
                            }
                        },
                        {
                            value: 20,
                            name: 'Khác',
                            itemStyle: {
                                color: '#C7C7C7'
                            }
                        }
                    ]
                }]
            };
            revenueChart.setOption(revenueOption);

            window.addEventListener('resize', function() {
                salesChart.resize();
                revenueChart.resize();
            });
        });
    </script>
</body>

</html>