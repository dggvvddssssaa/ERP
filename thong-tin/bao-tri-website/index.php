<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/animate.min.css" />
    <link rel="stylesheet" href="../../assets/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="stylesheet" href="../../assets/css/responsive.css" />

    <title>Bảo Hành & Bảo Trì Hệ Thống - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="https://truongthanherp.com/wp-content/uploads/2021/10/favicon.png" />

    <style>
        /* =========================================
           1. CẤU HÌNH CHUNG (GLOBAL)
           ========================================= */
        :root {
            --primary-color: #00B2FF;
            --text-color: #333;
            --bg-light: #f8f9fa;
            --bg-blue-light: #f4f7fa;
        }

        body {
            font-family: "Roboto", sans-serif !important;
            color: var(--text-color);
            line-height: 1.7;
            background-color: #fff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif !important;
        }

        /* =========================================
           2. FORM & INPUT STYLES (ĐÃ SỬA LỖI)
           ========================================= */

        /* Style chung cho Input và Select */
        .form-control,
        .form-select {
            padding: 12px 15px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            color: #495057;
            font-size: 0.95rem;
        }

        .input-group-text {
            background-color: #f8f9fa;
            color: #6c757d;
            border-color: #ced4da;
        }

        /* Hiệu ứng Focus (Bấm vào đổi màu xanh) */
        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            border-color: var(--primary-color);
            background-color: #fff !important;
        }

        /* Khi input focus thì icon bên cạnh cũng đổi màu */
        .input-group:focus-within .input-group-text,
        .input-group:focus-within .form-control,
        .input-group:focus-within .form-select {
            border-color: var(--primary-color);
            color: var(--primary-color);
            background-color: #fff !important;
        }

        /* --- KHẮC PHỤC LỖI SELECT BOX (QUAN TRỌNG) --- */
        /* 1. Ẩn giao diện lỗi của Nice Select */
        .register-form .nice-select {
            display: none !important;
        }

        /* 2. Ép hiển thị Select chuẩn của Bootstrap và chỉnh layout Flex */
        .register-form select.form-select {
            display: block !important;
            /* Flex: Tự động co giãn lấp đầy khoảng trống còn lại */
            flex: 1 1 auto !important;
            width: 1% !important;
            /* Mẹo của Bootstrap để input nằm ngang hàng với icon */

            height: auto !important;
            padding: 12px 15px !important;
            border: 1px solid #ced4da;
            border-left: 0;
            background-color: #f8f9fa !important;
            border-radius: 0 0.25rem 0.25rem 0 !important;
            color: #495057;
            appearance: none;
            /* Xóa style mặc định */

            /* Tự vẽ mũi tên xuống */
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e") !important;
            background-repeat: no-repeat !important;
            background-position: right 1rem center !important;
            background-size: 16px 12px !important;
        }

        /* =========================================
           3. CÁC SECTION TRONG TRANG
           ========================================= */

        /* --- Hero Section --- */
        .page-title-area {
            padding-top: 150px;
            padding-bottom: 80px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            text-align: center;
            overflow: hidden;
        }

        .page-title-area h1 {
            font-size: 42px;
            font-weight: 700;
            color: #0e1b29;
            margin-bottom: 20px;
        }

        .page-title-area p {
            font-size: 18px;
            color: #555;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        /* --- Benefit Box --- */
        .benefit-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px -5px rgba(0, 178, 255, 0.1);
            margin-bottom: 30px;
            transition: 0.3s;
            height: 100%;
            border: 1px solid #f0f0f0;
        }

        .benefit-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px -5px rgba(0, 178, 255, 0.15);
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            background: #e0f2fe;
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* --- Service Card --- */
        .service-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            transition: 0.3s;
            border: 1px solid #eee;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-img {
            height: 200px;
            overflow: hidden;
        }

        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .service-card:hover .service-img img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
        }

        /* --- Pricing Card --- */
        .pricing-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 10px;
            overflow: hidden;
            transition: 0.3s;
            margin-bottom: 30px;
            position: relative;
        }

        .pricing-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .pricing-card.popular {
            border: 2px solid var(--primary-color);
            transform: scale(1.05);
            z-index: 10;
        }

        .pricing-header {
            padding: 30px;
            border-bottom: 1px solid #f0f0f0;
            background-color: #fff;
        }

        .pricing-price {
            font-size: 36px;
            font-weight: 700;
            color: #0e1b29;
            margin-bottom: 5px;
        }

        .pricing-features {
            padding: 30px;
            list-style: none;
            margin: 0;
        }

        .pricing-features li {
            margin-bottom: 15px;
            display: flex;
            align-items: start;
        }

        .pricing-features li i {
            margin-right: 10px;
            margin-top: 3px;
        }

        /* --- Comparison Table --- */
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            vertical-align: middle;
            padding: 15px;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
        }

        /* --- Process Steps --- */
        .process-step-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            height: 100%;
            transition: 0.3s;
        }

        .process-step-box:hover {
            transform: translateY(-5px);
        }

        .process-icon-circle {
            width: 70px;
            height: 70px;
            background: #e0f2fe;
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
            font-weight: 700;
        }

        /* --- Register Form Section --- */
        .register-section {
            background-color: var(--bg-blue-light);
            padding: 80px 0;
        }

        .register-form {
            border-top: 5px solid var(--primary-color);
            transition: transform 0.3s ease;
        }

        .register-form:hover {
            transform: translateY(-5px);
        }

        .hover-up {
            transition: all 0.3s ease;
        }

        .hover-up:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
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

    <!-- Start Hero Section -->
    <div class="page-title-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="wow fadeInUp" data-wow-delay="0.2s">Dịch Vụ Bảo Hành & Bảo Trì Hệ Thống Chuyên Nghiệp</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">Giải pháp toàn diện giúp hệ thống ERP/Website của bạn luôn hoạt động ổn định, an toàn và hiệu quả. Đội ngũ chuyên gia hỗ trợ 24/7.</p>
                    <div class="wow fadeInUp" data-wow-delay="0.6s">
                        <a href="#register" class="btn btn-primary btn-lg me-3">Đăng Ký Ngay</a>
                        <a href="#pricing" class="btn btn-outline-secondary btn-lg">Xem Bảng Giá</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Benefits Section -->
    <section class="features-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Lợi Ích</span>
                <h2>Tại Sao Cần Bảo Trì Hệ Thống?</h2>
                <p>Bảo trì thường xuyên giúp ngăn ngừa rủi ro và tối ưu hóa hiệu suất vận hành.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box">
                        <div class="benefit-icon"><i class="ri-shield-check-line"></i></div>
                        <h3>Tăng Cường Bảo Mật</h3>
                        <p>Cập nhật các bản vá lỗi, ngăn chặn mã độc và các cuộc tấn công mạng, bảo vệ dữ liệu kinh doanh.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box">
                        <div class="benefit-icon"><i class="ri-speed-line"></i></div>
                        <h3>Cải Thiện Hiệu Suất</h3>
                        <p>Tối ưu hóa cơ sở dữ liệu và mã nguồn giúp hệ thống xử lý nhanh hơn, tăng trải nghiệm người dùng.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box">
                        <div class="benefit-icon"><i class="ri-search-line"></i></div>
                        <h3>Tối Ưu SEO</h3>
                        <p>Hệ thống vận hành mượt mà, tốc độ cao sẽ được Google đánh giá tốt hơn, cải thiện thứ hạng tìm kiếm.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box">
                        <div class="benefit-icon"><i class="ri-tools-line"></i></div>
                        <h3>Giảm Thiểu Lỗi</h3>
                        <p>Phát hiện và xử lý sớm các lỗi phát sinh (bugs) trước khi chúng ảnh hưởng đến quy trình vận hành.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box">
                        <div class="benefit-icon"><i class="ri-database-2-line"></i></div>
                        <h3>Sao Lưu Dữ Liệu</h3>
                        <p>Backup định kỳ giúp bạn an tâm rằng dữ liệu quan trọng luôn có thể khôi phục khi gặp sự cố.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box">
                        <div class="benefit-icon"><i class="ri-refresh-line"></i></div>
                        <h3>Cập Nhật Công Nghệ</h3>
                        <p>Nâng cấp các tính năng mới nhất để hệ thống không bị lỗi thời so với đối thủ cạnh tranh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Services Section -->
    <section id="services" class="services-area bg-f9f9f9 pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Dịch Vụ</span>
                <h2>Các Gói Dịch Vụ Bảo Trì</h2>
            </div>

            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-6">
                    <div class="service-card d-flex flex-column flex-md-row">
                        <div class="service-img col-md-5">
                            <img src="../../assets/img/services/service1.jpg" alt="Bảo trì kỹ thuật">
                        </div>
                        <div class="service-content col-md-7">
                            <h3>Bảo Trì Kỹ Thuật</h3>
                            <p>Kiểm tra mã nguồn, cập nhật phiên bản CMS/Framework, sửa lỗi xung đột và đảm bảo hệ thống vận hành trơn tru.</p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="ri-check-line text-primary"></i> Cập nhật version mới nhất</li>
                                <li><i class="ri-check-line text-primary"></i> Fix lỗi bugs phát sinh</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-6">
                    <div class="service-card d-flex flex-column flex-md-row">
                        <div class="service-img col-md-5">
                            <img src="../../assets/img/services/service2.jpg" alt="Bảo mật hệ thống">
                        </div>
                        <div class="service-content col-md-7">
                            <h3>Bảo Mật Hệ Thống</h3>
                            <p>Giám sát, phát hiện và ngăn chặn các cuộc tấn công. Cài đặt tường lửa và chứng chỉ bảo mật SSL.</p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="ri-check-line text-primary"></i> Quét malware định kỳ</li>
                                <li><i class="ri-check-line text-primary"></i> Chống tấn công DDoS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Pricing Section -->
    <section id="pricing" class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Bảng Giá</span>
                <h2>Chi Phí Hợp Lý - Hiệu Quả Tối Đa</h2>
                <p>Lựa chọn gói bảo trì phù hợp với quy mô doanh nghiệp của bạn.</p>
            </div>

            <div class="row justify-content-center">
                <!-- Basic Plan -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-header text-center">
                            <h3>Gói Cơ Bản</h3>
                            <div class="pricing-price">1.500.000<span class="fs-6 fw-normal text-muted">/tháng</span></div>
                            <p class="text-muted">Phù hợp cho Website cá nhân</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="ri-check-line text-success"></i> Kiểm tra & Sửa lỗi cơ bản</li>
                            <li><i class="ri-check-line text-success"></i> Cập nhật hệ thống (1 lần/tháng)</li>
                            <li><i class="ri-check-line text-success"></i> Sao lưu dữ liệu (1 lần/tháng)</li>
                            <li class="text-muted"><i class="ri-close-line"></i> Quét Malware nâng cao</li>
                            <li class="text-muted"><i class="ri-close-line"></i> Hỗ trợ 24/7</li>
                        </ul>
                        <div class="text-center p-4 pt-0">
                            <a href="#register" class="btn btn-outline-primary w-100">Đăng Ký Ngay</a>
                        </div>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card popular">
                        <div class="bg-primary text-white text-center py-1 small fw-bold">PHỔ BIẾN NHẤT</div>
                        <div class="pricing-header text-center bg-light">
                            <h3>Gói Tiêu Chuẩn</h3>
                            <div class="pricing-price text-primary">3.000.000<span class="fs-6 fw-normal text-muted">/tháng</span></div>
                            <p class="text-muted">Phù hợp cho Doanh nghiệp SMEs</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="ri-check-line text-success"></i> <strong>Kiểm tra lỗi toàn diện</strong></li>
                            <li><i class="ri-check-line text-success"></i> Cập nhật hệ thống (2 lần/tháng)</li>
                            <li><i class="ri-check-line text-success"></i> Sao lưu dữ liệu (2 lần/tháng)</li>
                            <li><i class="ri-check-line text-success"></i> Bảo mật nâng cao & SSL</li>
                            <li><i class="ri-check-line text-success"></i> Tối ưu tốc độ tải trang</li>
                        </ul>
                        <div class="text-center p-4 pt-0">
                            <a href="#register" class="btn btn-primary w-100">Đăng Ký Ngay</a>
                        </div>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-header text-center">
                            <h3>Gói Cao Cấp</h3>
                            <div class="pricing-price">5.000.000<span class="fs-6 fw-normal text-muted">/tháng</span></div>
                            <p class="text-muted">Phù hợp cho Hệ thống lớn/TMĐT</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="ri-check-line text-success"></i> Kiểm tra lỗi toàn diện</li>
                            <li><i class="ri-check-line text-success"></i> <strong>Cập nhật hàng tuần</strong></li>
                            <li><i class="ri-check-line text-success"></i> <strong>Sao lưu dữ liệu hàng tuần</strong></li>
                            <li><i class="ri-check-line text-success"></i> Quét Malware & Chống DDoS</li>
                            <li><i class="ri-check-line text-success"></i> <strong>Hỗ trợ kỹ thuật 24/7</strong></li>
                        </ul>
                        <div class="text-center p-4 pt-0">
                            <a href="#register" class="btn btn-outline-primary w-100">Đăng Ký Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Comparison Table -->
    <section class="comparison-area bg-f9f9f9 pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>So Sánh Chi Tiết</h2>
            </div>
            <div class="table-responsive bg-white rounded shadow-sm">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th style="width: 40%;">Tính Năng</th>
                            <th class="text-center" style="width: 20%;">Gói Cơ Bản</th>
                            <th class="text-center text-primary" style="width: 20%;">Gói Tiêu Chuẩn</th>
                            <th class="text-center" style="width: 20%;">Gói Cao Cấp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kiểm tra và sửa lỗi</td>
                            <td class="text-center">Cơ bản</td>
                            <td class="text-center">Toàn diện</td>
                            <td class="text-center">Toàn diện</td>
                        </tr>
                        <tr>
                            <td>Sao lưu dữ liệu</td>
                            <td class="text-center">1 lần/tháng</td>
                            <td class="text-center">2 lần/tháng</td>
                            <td class="text-center">Hàng tuần</td>
                        </tr>
                        <tr>
                            <td>Quét Malware & Bảo mật</td>
                            <td class="text-center text-muted"><i class="ri-close-line"></i></td>
                            <td class="text-center text-success"><i class="ri-check-line"></i></td>
                            <td class="text-center text-success"><i class="ri-check-line"></i></td>
                        </tr>
                        <tr>
                            <td>Hỗ trợ kỹ thuật</td>
                            <td class="text-center">Giờ hành chính</td>
                            <td class="text-center">Giờ hành chính</td>
                            <td class="text-center"><strong>24/7</strong></td>
                        </tr>
                        <tr>
                            <td>Thời gian phản hồi</td>
                            <td class="text-center">24h</td>
                            <td class="text-center">12h</td>
                            <td class="text-center">4h</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Start Process Section -->
    <section class="process-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Quy Trình</span>
                <h2>Quy Trình Hỗ Trợ Kỹ Thuật</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-box">
                        <div class="process-icon-circle">01</div>
                        <h3>Tiếp Nhận</h3>
                        <p>Ghi nhận yêu cầu qua Ticket, Email hoặc Hotline. Phân loại mức độ ưu tiên của sự cố.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-box">
                        <div class="process-icon-circle">02</div>
                        <h3>Phân Tích</h3>
                        <p>Kỹ thuật viên kiểm tra log hệ thống, xác định nguyên nhân gốc rễ và phương án xử lý.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-box">
                        <div class="process-icon-circle">03</div>
                        <h3>Xử Lý</h3>
                        <p>Tiến hành fix lỗi, update hoặc khôi phục dữ liệu theo quy trình chuẩn an toàn.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step-box">
                        <div class="process-icon-circle">04</div>
                        <h3>Báo Cáo</h3>
                        <p>Gửi báo cáo kết quả, nguyên nhân sự cố và hướng dẫn các biện pháp phòng tránh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Register Form -->
    <section id="register" class="register-section ptb-100 bg-light-blue">
        <div class="container">
            <div class="row align-items-center">
                <!-- Phần nội dung bên trái -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="register-content pe-lg-4">
                        <span class="sub-title text-primary fw-bold text-uppercase">Đăng ký ngay</span>
                        <h2 class="mb-4 display-6 fw-bold">Tư Vấn Giải Pháp ERP Tối Ưu Cho Doanh Nghiệp</h2>
                        <p class="mb-4 text-muted">
                            Để lại thông tin, chuyên gia của Trường Thành ERP sẽ liên hệ tư vấn gói dịch vụ phù hợp nhất cho mô hình kinh doanh của bạn trong vòng 24h.
                        </p>

                        <div class="features-list">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box bg-white text-primary shadow-sm rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="ri-shield-check-line"></i>
                                </div>
                                <span>Bảo mật dữ liệu tuyệt đối</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box bg-white text-primary shadow-sm rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="ri-customer-service-2-line"></i>
                                </div>
                                <span>Hỗ trợ kỹ thuật 24/7</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-white text-primary shadow-sm rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="ri-line-chart-line"></i>
                                </div>
                                <span>Tối ưu quy trình vận hành</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phần Form bên phải -->
                <div class="col-lg-7">
                    <div class="register-form bg-white p-4 p-md-5 rounded-4 shadow-lg">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">Điền thông tin đăng ký</h3>
                            <p class="text-muted small">Chúng tôi cam kết bảo mật thông tin của bạn.</p>
                        </div>

                        <!-- ACTION: Trỏ đến file PHP xử lý của bạn -->
                        <form action="../../modules/contact_process.php" method="POST">
                            <div class="row">
                                <!-- Họ tên -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small">Họ và tên <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0"><i class="ri-user-line"></i></span>
                                        <input type="text" class="form-control bg-light border-start-0 ps-0" name="name" required placeholder="Nguyễn Văn A">
                                    </div>
                                </div>

                                <!-- Số điện thoại (Name khớp với PHP: phone_number) -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold small">Số điện thoại <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0"><i class="ri-phone-line"></i></span>
                                        <input type="tel" class="form-control bg-light border-start-0 ps-0" name="phone_number" required placeholder="0912 xxx xxx">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold small">Email công việc <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0"><i class="ri-mail-line"></i></span>
                                        <input type="email" class="form-control bg-light border-start-0 ps-0" name="email" required placeholder="email@company.com">
                                    </div>
                                </div>

                                <!-- Dịch vụ quan tâm (Name khớp với PHP: msg_subject) -->
                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold small">Dịch vụ quan tâm</label>
                                    <div class="input-group">
                                        <!-- Icon -->
                                        <span class="input-group-text bg-light border-end-0"><i class="ri-stack-line"></i></span>

                                        <!-- Select Box (Đã thêm class để CSS target trúng) -->
                                        <select class="form-select bg-light border-start-0 ps-0" name="msg_subject">
                                            <option value="Tư vấn tổng quan">-- Chọn gói dịch vụ --</option>
                                            <option value="Gói Cơ Bản (Basic)">Gói Cơ Bản (Basic)</option>
                                            <option value="Gói Tiêu Chuẩn (Standard)" selected>Gói Tiêu Chuẩn (Standard)</option>
                                            <option value="Gói Cao Cấp (Premium)">Gói Cao Cấp (Premium)</option>
                                            <option value="Tư vấn giải pháp riêng">Cần tư vấn giải pháp riêng</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Tin nhắn -->
                                <div class="col-12 mb-4">
                                    <label class="form-label fw-bold small">Nội dung yêu cầu</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 pt-2 align-items-start"><i class="ri-chat-1-line"></i></span>
                                        <textarea class="form-control bg-light border-start-0 ps-0" rows="3" name="message" placeholder="Mô tả nhu cầu của doanh nghiệp bạn..."></textarea>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-3 fw-bold text-uppercase rounded-pill shadow-sm hover-up">
                                        <i class="ri-send-plane-fill me-2"></i> Gửi Đăng Ký Ngay
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>

</html>