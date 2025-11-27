<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../../assets/css/animate.min.css" />
    <!--=== BoxIcons CSS ===-->
    <link rel="stylesheet" href="../../assets/css/boxicons.min.css" />
    <!--=== RemixIcon CSS (Giữ lại icon từ bản thiết kế gốc) ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css" />
    <!-- Owl Default CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../assets/css/responsive.css" />

    <title>Quy Định Chung - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="https://truongthanherp.com/wp-content/uploads/2021/10/favicon.png" />

    <style>
        /* CSS Custom để match với thiết kế gốc */
        :root {
            --primary-color: #00B2FF;
            --text-color: #333;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: "Roboto", sans-serif;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* Page Title */
        .page-title-area {
            padding-top: 120px;
            padding-bottom: 50px;
            background-color: #fff;
            text-align: center;
        }

        .page-title-area h2 {
            font-size: 36px;
            font-weight: 700;
            color: #0e1b29;
            margin-bottom: 15px;
        }

        /* Sidebar Navigation Sticky */
        .policy-nav-sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 100px;
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .policy-nav-sidebar h4 {
            font-size: 18px;
            font-weight: 700;
            margin: 0;
            padding: 20px;
            border-bottom: 1px solid #e9ecef;
            background-color: #fff;
        }

        .policy-nav-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .policy-nav-list li a {
            display: block;
            padding: 12px 20px;
            color: #555;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 15px;
            border-left: 3px solid transparent;
            border-bottom: 1px solid #f1f1f1;
        }

        .policy-nav-list li a:hover,
        .policy-nav-list li a.active {
            background-color: #f0f9ff;
            border-left-color: var(--primary-color);
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Sidebar Contact Box */
        .sidebar-contact-box {
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .sidebar-contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .sidebar-contact-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(0, 178, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary-color);
            font-size: 20px;
        }

        /* Content Styles */
        .policy-section {
            background: #fff;
            padding: 30px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 30px;
            /* Scroll margin */
            scroll-margin-top: 100px;
        }

        .policy-section h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
            color: #0e1b29;
        }

        .policy-section h3 {
            font-size: 18px;
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 15px;
            color: #333;
        }

        .policy-section ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .policy-section ul li {
            margin-bottom: 8px;
        }

        /* Process Steps */
        .process-item {
            display: flex;
            margin-bottom: 20px;
        }

        .process-number {
            width: 40px;
            height: 40px;
            background-color: rgba(0, 178, 255, 0.1);
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-right: 20px;
            flex-shrink: 0;
        }

        /* Payment Grid */
        .payment-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            height: 100%;
        }

        .payment-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .payment-icon {
            width: 35px;
            height: 35px;
            background-color: rgba(0, 178, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            color: var(--primary-color);
        }

        /* Table Styles */
        .table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            color: #555;
            font-weight: 600;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #00B2FF 0%, #0067ff 100%);
            padding: 40px;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../../assets/img/shape/1.png');
            /* Giả lập pattern */
            opacity: 0.1;
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
    <div class="page-title-area item-bg-6">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Quy Định Chung</h2>
                        <ul>
                            <li>
                                <a href="index.html">Trang chủ</a>
                                <i class="bx bx-right-arrow-alt"></i>
                            </li>
                            <li>Quy Định Chung</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Main Content Area -->
    <section class="general-rules-area ptb-100">
        <div class="container">
            <div class="row">
                <!-- Sidebar Navigation (Left) -->
                <div class="col-lg-3 col-md-12">
                    <div class="sidebar-wrapper">
                        <!-- Mục lục -->
                        <div class="policy-nav-sidebar d-none d-lg-block">
                            <h4>Mục Lục</h4>
                            <ul class="policy-nav-list" id="sidebar-nav">
                                <li><a href="#dieu-khoan" class="nav-link active">Điều khoản sử dụng</a></li>
                                <li><a href="#quy-trinh" class="nav-link">Quy trình làm việc</a></li>
                                <li><a href="#thanh-toan" class="nav-link">Quy định thanh toán</a></li>
                                <li><a href="#ban-giao" class="nav-link">Quy định bàn giao</a></li>
                                <li><a href="#bao-hanh" class="nav-link">Bảo hành & Hỗ trợ</a></li>
                            </ul>
                        </div>

                        <!-- Box Hỗ trợ -->
                        <div class="sidebar-contact-box">
                            <h4 style="font-size: 18px; font-weight: 700; margin-bottom: 20px;">Hỗ Trợ</h4>
                            <div class="sidebar-contact-item">
                                <div class="sidebar-contact-icon"><i class="ri-phone-line"></i></div>
                                <div>
                                    <div class="text-muted small">Hotline</div>
                                    <strong>024.2212.1489</strong>
                                </div>
                            </div>
                            <div class="sidebar-contact-item">
                                <div class="sidebar-contact-icon"><i class="ri-mail-line"></i></div>
                                <div>
                                    <div class="text-muted small">Email</div>
                                    <strong>contact@truongthanherp.com</strong>
                                </div>
                            </div>
                            <div class="sidebar-contact-item">
                                <div class="sidebar-contact-icon"><i class="ri-map-pin-line"></i></div>
                                <div>
                                    <div class="text-muted small">Địa chỉ</div>
                                    <strong>Số 16 ngõ 42, Trung Hòa, Cầu Giấy, HN</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content (Right) -->
                <div class="col-lg-9 col-md-12">
                    <div class="rules-content">

                        <!-- 1. Điều khoản sử dụng -->
                        <section id="dieu-khoan" class="policy-section">
                            <h2>1. Điều khoản sử dụng dịch vụ</h2>
                            <h3>1.1. Phạm vi áp dụng</h3>
                            <p>Các điều khoản này áp dụng cho tất cả các dịch vụ phần mềm và giải pháp công nghệ được cung cấp bởi <strong>Trường Thành ERP</strong>. Bằng việc sử dụng dịch vụ, khách hàng đồng ý tuân thủ các điều khoản này.</p>
                            <p>Dịch vụ bao gồm: Triển khai phần mềm ERP, CRM, HRM, thiết kế website, Mobile App và các dịch vụ tư vấn chuyển đổi số.</p>

                            <h3>1.2. Quyền và nghĩa vụ của khách hàng</h3>
                            <ul>
                                <li>Cung cấp đầy đủ, chính xác thông tin doanh nghiệp và yêu cầu nghiệp vụ để thực hiện dự án.</li>
                                <li>Thanh toán đầy đủ phí bản quyền và phí triển khai theo hợp đồng.</li>
                                <li>Phối hợp kiểm thử (UAT) và phản hồi kịp thời trong quá trình triển khai.</li>
                                <li>Tuân thủ quy định pháp luật về dữ liệu nhập vào hệ thống phần mềm.</li>
                                <li>Bảo mật tài khoản quản trị (Admin) được bàn giao.</li>
                            </ul>

                            <h3>1.3. Quyền và nghĩa vụ của Trường Thành ERP</h3>
                            <ul>
                                <li>Cung cấp phần mềm đúng tính năng cam kết và đảm bảo hoạt động ổn định.</li>
                                <li>Bảo mật tuyệt đối dữ liệu kinh doanh của khách hàng.</li>
                                <li>Hỗ trợ đào tạo, hướng dẫn sử dụng và khắc phục sự cố kỹ thuật.</li>
                                <li>Có quyền tạm ngưng dịch vụ nếu khách hàng vi phạm nghiêm trọng các điều khoản thanh toán hoặc sử dụng.</li>
                            </ul>
                        </section>

                        <!-- 2. Quy trình làm việc -->
                        <section id="quy-trinh" class="policy-section">
                            <h2>2. Quy trình triển khai dự án</h2>
                            <div class="process-list mt-4">
                                <div class="process-item">
                                    <div class="process-number">01</div>
                                    <div>
                                        <h4>Khảo sát & Tư vấn</h4>
                                        <p>Tiếp nhận yêu cầu, khảo sát quy trình nghiệp vụ thực tế tại doanh nghiệp để đưa ra giải pháp phù hợp.</p>
                                    </div>
                                </div>
                                <div class="process-item">
                                    <div class="process-number">02</div>
                                    <div>
                                        <h4>Ký hợp đồng & Lên kế hoạch</h4>
                                        <p>Thống nhất phạm vi công việc, chi phí, lộ trình triển khai và ký kết hợp đồng.</p>
                                    </div>
                                </div>
                                <div class="process-item">
                                    <div class="process-number">03</div>
                                    <div>
                                        <h4>Cài đặt & Cấu hình (Customize)</h4>
                                        <p>Thiết lập hệ thống, tùy chỉnh các tính năng theo đặc thù riêng của doanh nghiệp (nếu có).</p>
                                    </div>
                                </div>
                                <div class="process-item">
                                    <div class="process-number">04</div>
                                    <div>
                                        <h4>Đào tạo & Chạy thử (UAT)</h4>
                                        <p>Đào tạo nhân sự sử dụng phần mềm, chạy thử nghiệm với dữ liệu thực tế và tinh chỉnh.</p>
                                    </div>
                                </div>
                                <div class="process-item">
                                    <div class="process-number">05</div>
                                    <div>
                                        <h4>Nghiệm thu & Bàn giao</h4>
                                        <p>Chính thức đưa hệ thống vào vận hành (Go-live), bàn giao tài khoản và tài liệu hướng dẫn.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- 3. Quy định thanh toán -->
                        <section id="thanh-toan" class="policy-section">
                            <h2>3. Quy định thanh toán</h2>
                            <h3>3.1. Phương thức thanh toán</h3>
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3">
                                    <div class="payment-box">
                                        <div class="payment-header">
                                            <div class="payment-icon"><i class="ri-bank-line"></i></div>
                                            <strong>Chuyển khoản ngân hàng</strong>
                                        </div>
                                        <p class="small mb-0">Chuyển khoản vào tài khoản công ty theo thông tin trên hợp đồng (khuyên dùng).</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-box">
                                        <div class="payment-header">
                                            <div class="payment-icon"><i class="ri-money-dollar-box-line"></i></div>
                                            <strong>Tiền mặt</strong>
                                        </div>
                                        <p class="small mb-0">Thanh toán trực tiếp tại văn phòng công ty và nhận phiếu thu.</p>
                                    </div>
                                </div>
                            </div>

                            <h3>3.2. Lộ trình thanh toán</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Đợt</th>
                                            <th>Thời điểm</th>
                                            <th>Tỷ lệ</th>
                                            <th>Nội dung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Đợt 1</td>
                                            <td>Sau khi ký HĐ</td>
                                            <td>30% - 50%</td>
                                            <td>Tạm ứng để khởi tạo dự án và tài nguyên.</td>
                                        </tr>
                                        <tr>
                                            <td>Đợt 2</td>
                                            <td>Sau khi UAT/Demo</td>
                                            <td>30% - 40%</td>
                                            <td>Thanh toán sau khi cài đặt và đào tạo sơ bộ.</td>
                                        </tr>
                                        <tr>
                                            <td>Đợt 3</td>
                                            <td>Nghiệm thu</td>
                                            <td>Còn lại</td>
                                            <td>Thanh toán nốt khi bàn giao chính thức (Go-live).</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>

                        <!-- 4. Quy định bàn giao -->
                        <section id="ban-giao" class="policy-section">
                            <h2>4. Quy định bàn giao sản phẩm</h2>
                            <h3>4.1. Điều kiện bàn giao</h3>
                            <p>Sản phẩm phần mềm được coi là đủ điều kiện bàn giao khi:</p>
                            <ul>
                                <li>Đáp ứng đầy đủ các tính năng nghiệp vụ theo Hợp đồng/Phụ lục.</li>
                                <li>Hệ thống hoạt động ổn định, không phát sinh lỗi nghiêm trọng (Critical Bugs).</li>
                                <li>Đã hoàn thành việc đào tạo hướng dẫn sử dụng cho nhân sự khách hàng.</li>
                            </ul>

                            <h3>4.2. Hồ sơ bàn giao</h3>
                            <p>Bộ hồ sơ bàn giao bao gồm:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="mb-0">
                                        <li><i class="ri-check-double-line text-primary"></i> Tài khoản quản trị cấp cao (Super Admin).</li>
                                        <li><i class="ri-check-double-line text-primary"></i> Tài liệu hướng dẫn sử dụng (File/Video).</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="mb-0">
                                        <li><i class="ri-check-double-line text-primary"></i> Biên bản nghiệm thu kỹ thuật.</li>
                                        <li><i class="ri-check-double-line text-primary"></i> Phiếu bảo hành/Cam kết hỗ trợ.</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- 5. Bảo hành & Hỗ trợ -->
                        <section id="bao-hanh" class="policy-section">
                            <h2>5. Quy định bảo hành và hỗ trợ</h2>
                            <h3>5.1. Thời gian bảo hành</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Loại hình</th>
                                            <th>Thời gian</th>
                                            <th>Phạm vi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Phần mềm (License vĩnh viễn)</td>
                                            <td>12 tháng</td>
                                            <td>Sửa lỗi kỹ thuật (bugs) phát sinh từ mã nguồn.</td>
                                        </tr>
                                        <tr>
                                            <td>Phần mềm (Thuê bao/SaaS)</td>
                                            <td>Suốt thời gian thuê</td>
                                            <td>Bảo trì, update tính năng mới liên tục.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3>5.2. Cam kết hỗ trợ (SLA)</h3>
                            <ul>
                                <li><strong>Lỗi nghiêm trọng (Hệ thống ngừng hoạt động):</strong> Phản hồi trong 2h, khắc phục trong 24h.</li>
                                <li><strong>Lỗi thông thường:</strong> Phản hồi trong 4h, khắc phục trong 48h.</li>
                                <li><strong>Hỗ trợ hướng dẫn:</strong> Trong giờ hành chính qua Ultraview, Teamviewer, Zalo, Hotline.</li>
                            </ul>

                            <div class="alert alert-warning mt-3">
                                <strong>Lưu ý:</strong> Bảo hành không bao gồm các lỗi do khách hàng tự ý can thiệp vào mã nguồn, hạ tầng máy chủ do bên thứ 3 cung cấp bị lỗi, hoặc do virus/tấn công mạng từ phía máy tính người dùng.
                            </div>
                        </section>

                        <!-- CTA -->
                        <div class="cta-section mt-5">
                            <h3>Bạn cần tư vấn chi tiết hơn?</h3>
                            <p>Đội ngũ chuyên gia của Trường Thành ERP luôn sẵn sàng giải đáp mọi thắc mắc.</p>
                            <div class="mt-4">
                                <a href="lien-he.html" class="btn btn-light text-primary me-2 px-4 py-2 font-weight-bold">Nhận Báo Giá</a>
                                <a href="tel:02422121489" class="btn btn-outline-light px-4 py-2 font-weight-bold"><i class="ri-phone-line"></i> 024.2212.1489</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Content Area -->

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

    <!-- Script xử lý Active menu & Smooth Scroll -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll(".policy-section");
            const navLinks = document.querySelectorAll(".policy-nav-list .nav-link");

            // Hàm kích hoạt menu khi cuộn
            function setActiveLink() {
                let currentSection = "";
                sections.forEach((section) => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    // Offset trừ đi chiều cao header để active chính xác hơn
                    if (window.scrollY >= sectionTop - 150 && window.scrollY < sectionTop + sectionHeight) {
                        currentSection = section.getAttribute("id");
                    }
                });

                navLinks.forEach((link) => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${currentSection}`) {
                        link.classList.add("active");
                    }
                });
            }

            window.addEventListener("scroll", setActiveLink);

            // Xử lý click smooth scroll (fix lỗi header che nội dung)
            document.querySelectorAll('.policy-nav-list a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 120, // 120px là khoảng cách an toàn cho header
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>