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
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css" />
    <!-- Owl Default CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../assets/css/responsive.css" />

    <title>Điều Khoản Sử Dụng - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="https://truongthanherp.com/wp-content/uploads/2021/10/favicon.png" />

    <style>
        /* CSS Tùy chỉnh cho trang điều khoản để giống bản thiết kế Tailwind */
        :root {
            --primary-color: #00B2FF;
            --text-color: #333333;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: "Roboto", sans-serif;
            /* Hoặc font mặc định của theme */
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Page Title Area - Giữ style chung của theme nếu có, hoặc custom nhẹ */
        .page-title-area {
            padding-top: 120px;
            padding-bottom: 40px;
            background-color: #fff;
            text-align: center;
        }

        .page-title-area h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #0e1b29;
        }

        /* Sidebar Mục lục (Sticky) */
        .toc-sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 100px;
            /* Cách top khi cuộn */
            background: #fff;
            padding: 20px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 30px;
        }

        .toc-sidebar h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 10px;
        }

        .toc-list a {
            display: block;
            padding: 8px 16px;
            color: #555;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 14px;
            border-left: 3px solid transparent;
        }

        .toc-list a:hover {
            background-color: #f8f9fa;
            border-left-color: var(--primary-color);
            color: var(--primary-color);
        }

        .toc-list a.active {
            background-color: #f0f9ff;
            border-left-color: var(--primary-color);
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Nội dung chính */
        .terms-content h3 {
            font-size: 24px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 20px;
            color: #0e1b29;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            /* Scroll margin để header không che mất tiêu đề khi click link */
            scroll-margin-top: 100px;
        }

        .terms-content h4 {
            font-size: 18px;
            font-weight: 700;
            margin-top: 25px;
            margin-bottom: 15px;
            color: #333;
        }

        .terms-content section {
            margin-bottom: 3rem;
        }

        .terms-content p,
        .terms-content li {
            color: #555;
            margin-bottom: 10px;
        }

        .terms-content ul,
        .terms-content ol {
            padding-left: 20px;
        }

        /* Các box lưu ý (Thay thế bg-blue-50 của Tailwind bằng Bootstrap Alert style) */
        .custom-alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-top: 1.5rem;
            border: none;
        }

        .alert-info-custom {
            background-color: #eff6ff;
            /* blue-50 */
            color: #1e3a8a;
        }

        .alert-warning-custom {
            background-color: #fefce8;
            /* yellow-50 */
            color: #854d0e;
            /* yellow-800 */
        }

        .alert-success-custom {
            background-color: #f0fdf4;
            /* green-50 */
            color: #14532d;
            /* green-800 */
        }

        .custom-alert strong {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
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
                        <h2>Điều Khoản Sử Dụng</h2>
                        <ul>
                            <li>
                                <a href="index.html">Cập nhật lần cuối: 20/06/2025</a>
                                <i class="bx bx-right-arrow-alt"></i>
                            </li>
                            <li>Điều Khoản Sử Dụng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Terms Area -->
    <section class="terms-area pb-100 pt-100">
        <div class="container">
            <div class="row">
                <!-- Sidebar Mục lục (Cột trái) -->
                <div class="col-lg-3 col-md-12">
                    <div class="toc-sidebar d-none d-lg-block">
                        <h4>Mục Lục</h4>
                        <nav class="toc-list">
                            <a href="#gioi-thieu" class="active">1. Giới thiệu chung</a>
                            <a href="#quyen-nguoi-dung">2. Quyền và nghĩa vụ người dùng</a>
                            <a href="#quyen-truong-thanh">3. Quyền và nghĩa vụ Trường Thành</a>
                            <a href="#bao-mat">4. Chính sách bảo mật</a>
                            <a href="#thanh-toan">5. Quy định thanh toán</a>
                            <a href="#hoan-tien">6. Chính sách hoàn tiền</a>
                            <a href="#tranh-chap">7. Giải quyết tranh chấp</a>
                            <a href="#dieu-khoan-khac">8. Các điều khoản khác</a>
                        </nav>
                    </div>
                </div>

                <!-- Nội dung chính (Cột phải) -->
                <div class="col-lg-9 col-md-12">
                    <div class="terms-content">

                        <!-- 1. Giới thiệu chung -->
                        <section id="gioi-thieu">
                            <h3>1. Giới thiệu chung</h3>
                            <p>
                                Chào mừng bạn đến với <strong>Trường Thành ERP</strong>. Trước khi sử dụng hệ thống và dịch vụ của chúng tôi, vui lòng đọc kỹ các điều khoản sử dụng dưới đây. Việc bạn truy cập và sử dụng dịch vụ của Trường Thành ERP đồng nghĩa với việc bạn đã đọc, hiểu và đồng ý tuân thủ tất cả các điều khoản này.
                            </p>
                            <p>
                                <strong>Công ty Cổ phần Giải pháp Công nghệ Trường Thành</strong> (sau đây gọi tắt là "chúng tôi") là đơn vị chuyên cung cấp giải pháp phần mềm quản trị doanh nghiệp (ERP), HRM, CRM và các giải pháp chuyển đổi số. Chúng tôi cam kết mang đến cho khách hàng những sản phẩm công nghệ chất lượng cao, giúp tối ưu hóa quy trình vận hành.
                            </p>
                            <div class="custom-alert alert-info-custom">
                                <strong>Phạm vi áp dụng:</strong>
                                <ul>
                                    <li>Phần mềm quản trị doanh nghiệp Trường Thành ERP.</li>
                                    <li>Dịch vụ triển khai, đào tạo và tư vấn giải pháp.</li>
                                    <li>Dịch vụ bảo trì, nâng cấp hệ thống phần mềm.</li>
                                    <li>Các ứng dụng (Mobile App) liên quan thuộc hệ sinh thái Trường Thành.</li>
                                </ul>
                            </div>
                        </section>

                        <!-- 2. Quyền và nghĩa vụ -->
                        <section id="quyen-nguoi-dung">
                            <h3>2. Quyền và nghĩa vụ của người dùng</h3>

                            <h4>2.1. Quyền của người dùng</h4>
                            <ul>
                                <li>Được cấp quyền truy cập và sử dụng các phân hệ phần mềm theo hợp đồng đã ký kết (License).</li>
                                <li>Được hỗ trợ kỹ thuật, hướng dẫn sử dụng trong suốt thời gian hiệu lực của hợp đồng bảo trì/bảo hành.</li>
                                <li>Được bảo mật dữ liệu kinh doanh tuyệt đối theo chính sách bảo mật của chúng tôi.</li>
                                <li>Được quyền yêu cầu trích xuất dữ liệu của doanh nghiệp mình từ hệ thống khi chấm dứt hợp đồng.</li>
                                <li>Được quyền yêu cầu nâng cấp, tùy chỉnh tính năng (có thể phát sinh chi phí tùy theo mức độ).</li>
                            </ul>

                            <h4>2.2. Nghĩa vụ của người dùng</h4>
                            <ul>
                                <li>Cung cấp đầy đủ, chính xác thông tin doanh nghiệp khi đăng ký dịch vụ.</li>
                                <li>Thanh toán đầy đủ phí bản quyền, phí triển khai và phí duy trì (nếu có) đúng hạn.</li>
                                <li>Tự chịu trách nhiệm về việc phân quyền nội bộ và bảo mật tài khoản quản trị (Admin).</li>
                                <li>Chịu trách nhiệm về tính pháp lý của các dữ liệu nhập vào hệ thống ERP.</li>
                                <li>Không sao chép, giải mã (reverse engineer) hoặc phân phối lại mã nguồn phần mềm khi chưa có sự đồng ý bằng văn bản.</li>
                            </ul>

                            <div class="custom-alert alert-warning-custom">
                                <strong>Lưu ý quan trọng:</strong>
                                <p class="mb-0">Khách hàng chịu trách nhiệm hoàn toàn về việc quản lý tài khoản nhân viên. Trường Thành ERP không chịu trách nhiệm cho các thất thoát dữ liệu do sự bất cẩn trong việc bảo mật mật khẩu từ phía người dùng.</p>
                            </div>
                        </section>

                        <!-- 3. Quyền Trường Thành -->
                        <section id="quyen-truong-thanh">
                            <h3>3. Quyền và nghĩa vụ của Trường Thành ERP</h3>

                            <h4>3.1. Quyền của chúng tôi</h4>
                            <ul>
                                <li>Tạm ngưng cung cấp dịch vụ nếu khách hàng vi phạm nghiêm trọng điều khoản sử dụng hoặc chậm thanh toán quá thời hạn quy định.</li>
                                <li>Cập nhật, nâng cấp tính năng hệ thống để đảm bảo an toàn và hiệu quả vận hành (Maintenance Update).</li>
                                <li>Được quyền sử dụng logo đối tác để làm hồ sơ năng lực (trừ khi có yêu cầu bảo mật danh tính từ khách hàng).</li>
                            </ul>

                            <h4>3.2. Nghĩa vụ của chúng tôi</h4>
                            <ul>
                                <li>Đảm bảo hệ thống hoạt động ổn định (Uptime cam kết 99.9% đối với phiên bản Cloud).</li>
                                <li>Bảo mật tuyệt đối dữ liệu kinh doanh, thông tin khách hàng, bí mật công nghệ.</li>
                                <li>Hỗ trợ khắc phục sự cố kỹ thuật trong thời gian sớm nhất theo cam kết SLA.</li>
                                <li>Đào tạo và hướng dẫn nhân sự của khách hàng sử dụng thành thạo phần mềm.</li>
                            </ul>
                        </section>

                        <!-- 4. Bảo mật -->
                        <section id="bao-mat">
                            <h3>4. Chính sách bảo mật thông tin</h3>
                            <p>Chúng tôi hiểu rằng dữ liệu là tài sản quý giá nhất của doanh nghiệp. Chính sách bảo mật của Trường Thành ERP tuân thủ nghiêm ngặt các quy định pháp luật.</p>

                            <h4>4.1. Dữ liệu thu thập</h4>
                            <ul>
                                <li>Thông tin doanh nghiệp: Tên, MST, Địa chỉ, Người đại diện.</li>
                                <li>Dữ liệu vận hành: Dữ liệu do khách hàng nhập liệu vào hệ thống ERP (Doanh thu, nhân sự, khách hàng...).</li>
                            </ul>

                            <h4>4.2. Cam kết bảo mật</h4>
                            <ul>
                                <li>Mã hóa dữ liệu đường truyền (SSL) và mã hóa cơ sở dữ liệu (Database Encryption).</li>
                                <li>Hệ thống máy chủ đặt tại Data Center đạt chuẩn Tier 3, có tường lửa và hệ thống chống DDoS.</li>
                                <li>Không chia sẻ dữ liệu cho bên thứ 3 dưới bất kỳ hình thức nào, trừ khi có yêu cầu từ cơ quan pháp luật.</li>
                            </ul>
                        </section>

                        <!-- 5. Thanh toán -->
                        <section id="thanh-toan">
                            <h3>5. Quy định về thanh toán</h3>

                            <h4>5.1. Hình thức thanh toán</h4>
                            <ul>
                                <li>Chuyển khoản ngân hàng vào tài khoản công ty.</li>
                                <li>Tiền mặt (có phiếu thu đóng dấu đỏ).</li>
                            </ul>

                            <h4>5.2. Lộ trình thanh toán (Tham khảo)</h4>
                            <ul>
                                <li><strong>Đợt 1:</strong> Thanh toán 30-50% ngay sau khi ký hợp đồng triển khai.</li>
                                <li><strong>Đợt 2:</strong> Thanh toán phần còn lại sau khi cài đặt, đào tạo và nghiệm thu hệ thống.</li>
                                <li><strong>Phí duy trì (Cloud):</strong> Thanh toán theo kỳ hạn 6 tháng hoặc 1 năm.</li>
                            </ul>
                        </section>

                        <!-- 6. Hoàn tiền -->
                        <section id="hoan-tien">
                            <h3>6. Chính sách hoàn tiền</h3>
                            <ul>
                                <li>Hoàn trả 100% tiền cọc nếu chúng tôi không thể triển khai hệ thống như cam kết trong hợp đồng.</li>
                                <li>Không hoàn tiền đối với các chi phí Server/Hosting/Domain đã đăng ký với bên thứ 3.</li>
                                <li>Trường hợp khách hàng đơn phương chấm dứt hợp đồng khi dự án đang triển khai, số tiền cọc sẽ không được hoàn lại để bù đắp chi phí nhân sự.</li>
                            </ul>
                        </section>

                        <!-- 7. Tranh chấp -->
                        <section id="tranh-chap">
                            <h3>7. Giải quyết tranh chấp</h3>
                            <p>Mọi tranh chấp phát sinh sẽ được giải quyết trước hết thông qua thương lượng, hòa giải. Nếu không đạt được thỏa thuận, vụ việc sẽ được đưa ra Tòa án có thẩm quyền tại Hà Nội để giải quyết theo pháp luật Việt Nam.</p>
                        </section>

                        <!-- 8. Khác -->
                        <section id="dieu-khoan-khac">
                            <h3>8. Các điều khoản khác</h3>
                            <div class="custom-alert alert-success-custom">
                                <strong>Thông tin liên hệ:</strong>
                                <p class="mb-0 mt-2">Mọi thắc mắc về điều khoản sử dụng, vui lòng liên hệ:</p>
                                <ul class="mt-2 mb-0">
                                    <li><strong>Email:</strong> contact@truongthanherp.com</li>
                                    <li><strong>Hotline:</strong> 024.2212.1489</li>
                                    <li><strong>Địa chỉ:</strong> Số 16 ngõ 42, Trung Hòa, Cầu Giấy, Hà Nội</li>
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Terms Area -->

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

    <!-- Script xử lý Active menu mục lục khi cuộn (Giống Tailwind gốc) -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll(".terms-content section");
            const navLinks = document.querySelectorAll(".toc-list a");

            function setActiveLink() {
                let currentSection = "";

                sections.forEach((section) => {
                    const sectionTop = section.offsetTop;
                    // Điều chỉnh offset phù hợp với chiều cao header
                    if (window.scrollY >= sectionTop - 150) {
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
            setActiveLink(); // Chạy 1 lần khi load

            // Smooth scroll fix cho Bootstrap header
            document.querySelectorAll('.toc-list a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 120, // Trừ hao chiều cao header
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>