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
    <!--=== RemixIcon CSS (Để giữ lại bộ icon phong phú từ bản thiết kế gốc) ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css" />
    <!-- Owl Default CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../assets/css/responsive.css" />

    <title>Quy Định Chức Năng Phát Sinh - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="https://truongthanherp.com/wp-content/uploads/2021/10/favicon.png" />

    <style>
        /* --- CSS Tùy chỉnh --- */
        :root {
            --primary-color: #00B2FF;
            --secondary-color: #FFD700;
            --text-color: #333;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: "Roboto", sans-serif;
            color: var(--text-color);
            line-height: 1.7;
        }

        /* Page Title Area */
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

        /* Content Section Styles */
        .content-section {
            background: #fff;
            padding: 30px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 30px;
            scroll-margin-top: 100px;
        }

        .content-section h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
            color: #0e1b29;
        }

        .content-section h3 {
            font-size: 18px;
            font-weight: 700;
            margin-top: 15px;
            margin-bottom: 15px;
            color: #333;
        }

        /* Feature Cards (Cases) */
        .feature-card {
            background-color: #fff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            height: 100%;
            transition: all 0.3s;
        }

        .feature-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(0, 178, 255, 0.1);
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 15px;
        }

        /* Pricing Table */
        .table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            color: #555;
            font-weight: 700;
        }

        /* Process Steps */
        .process-step {
            display: flex;
            margin-bottom: 25px;
            position: relative;
        }

        .process-step:last-child {
            margin-bottom: 0;
        }

        /* Line connector */
        .process-step:not(:last-child)::before {
            content: '';
            position: absolute;
            left: 19px;
            top: 40px;
            bottom: -25px;
            width: 2px;
            background-color: #e9ecef;
            z-index: 0;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-right: 20px;
            position: relative;
            z-index: 1;
            flex-shrink: 0;
        }

        /* FAQ Accordion */
        .accordion-button:not(.collapsed) {
            color: var(--primary-color);
            background-color: #f0f9ff;
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0, 0, 0, .125);
        }

        /* Definition Box */
        .definition-box {
            background-color: #f0f9ff;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--primary-color);
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
                        <h2>Chức Năng Phát Sinh</h2>
                        <ul>
                            <li>
                                <a href="index.html">Trang chủ</a>
                                <i class="bx bx-right-arrow-alt"></i>
                            </li>
                            <li>Chức Năng Phát Sinh</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Main Content Area -->
    <section class="additional-features-area ptb-100">
        <div class="container">
            <div class="row">
                <!-- Sidebar Navigation (Left) -->
                <div class="col-lg-3 col-md-12">
                    <div class="sidebar-wrapper">
                        <!-- Mục lục -->
                        <div class="policy-nav-sidebar d-none d-lg-block">
                            <h4>Mục Lục</h4>
                            <ul class="policy-nav-list" id="sidebar-nav">
                                <li><a href="#dinh-nghia" class="nav-link active">Định nghĩa</a></li>
                                <li><a href="#truong-hop" class="nav-link">Các trường hợp</a></li>
                                <li><a href="#tinh-phi" class="nav-link">Cách tính phí</a></li>
                                <li><a href="#quy-trinh" class="nav-link">Quy trình xử lý</a></li>
                                <li><a href="#faq" class="nav-link">Câu hỏi thường gặp</a></li>
                                <li><a href="#lien-he" class="nav-link">Liên hệ tư vấn</a></li>
                            </ul>
                        </div>

                        <!-- Box Hỗ trợ -->
                        <div class="sidebar-contact-box">
                            <h4 style="font-size: 18px; font-weight: 700; margin-bottom: 20px;">Hỗ Trợ Nhanh</h4>
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
                        </div>
                    </div>
                </div>

                <!-- Main Content (Right) -->
                <div class="col-lg-9 col-md-12">
                    <div class="features-content">

                        <!-- 1. Định Nghĩa -->
                        <section id="dinh-nghia" class="content-section">
                            <h2>1. Chức Năng Phát Sinh Là Gì?</h2>
                            <p>Hiểu rõ khái niệm để tránh những bất đồng không đáng có trong quá trình thực hiện dự án.</p>

                            <div class="definition-box mb-4">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="ri-information-fill text-primary" style="font-size: 30px;"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-2" style="font-size: 18px; font-weight: 700;">Định Nghĩa</h4>
                                        <p class="mb-0"><strong>Chức năng phát sinh</strong> là những yêu cầu, tính năng hoặc thay đổi được bổ sung vào dự án phần mềm/website <strong>sau khi đã thống nhất phạm vi công việc (Scope of Work)</strong> trong hợp đồng ban đầu. Các chức năng này nằm ngoài thỏa thuận và sẽ được tính phí riêng.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6 mb-3">
                                    <div class="p-3 border rounded bg-light">
                                        <strong class="text-primary"><i class="ri-check-line"></i> Ví dụ phát sinh:</strong>
                                        <p class="small mb-0 mt-2">Khách hàng ban đầu yêu cầu chức năng bán hàng cơ bản, sau đó muốn bổ sung tích hợp thanh toán qua Ví điện tử và App Mobile riêng.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="p-3 border rounded bg-light">
                                        <strong class="text-danger"><i class="ri-close-line"></i> Không phải phát sinh:</strong>
                                        <p class="small mb-0 mt-2">Sửa lỗi (bugs) trong quá trình vận hành, điều chỉnh nhỏ về màu sắc/text, hay các tính năng đã được ghi rõ trong hợp đồng.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- 2. Các Trường Hợp -->
                        <section id="truong-hop" class="content-section">
                            <h2>2. Các Trường Hợp Phát Sinh Thường Gặp</h2>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card">
                                        <div class="feature-icon"><i class="ri-add-box-line"></i></div>
                                        <h3>Bổ Sung Tính Năng Mới</h3>
                                        <p>Yêu cầu thêm các module hoặc chức năng hoàn toàn mới chưa từng được đề cập khi ký hợp đồng.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card">
                                        <div class="feature-icon"><i class="ri-refresh-line"></i></div>
                                        <h3>Thay Đổi Logic Nghiệp Vụ</h3>
                                        <p>Yêu cầu thay đổi luồng xử lý dữ liệu hoặc quy trình nghiệp vụ sau khi hệ thống đã được lập trình xong.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card">
                                        <div class="feature-icon"><i class="ri-plug-line"></i></div>
                                        <h3>Tích Hợp Bên Thứ 3</h3>
                                        <p>Yêu cầu kết nối API với các phần mềm khác (Kế toán, CRM khác, ERP khác...) phát sinh sau này.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-card">
                                        <div class="feature-icon"><i class="ri-layout-masonry-line"></i></div>
                                        <h3>Thay Đổi Giao Diện Lớn</h3>
                                        <p>Yêu cầu thiết kế lại toàn bộ giao diện (UI/UX) sau khi đã chốt bản thiết kế và đang trong giai đoạn code.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning mt-2">
                                <i class="ri-error-warning-line me-2"></i>
                                <strong>Lưu ý:</strong> Để tối ưu chi phí, khách hàng nên liệt kê chi tiết yêu cầu ngay từ giai đoạn khảo sát ban đầu.
                            </div>
                        </section>

                        <!-- 3. Cách Tính Phí -->
                        <section id="tinh-phi" class="content-section">
                            <h2>3. Cách Tính Phí Chức Năng Phát Sinh</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="30%">Căn cứ tính phí</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="ri-time-line text-primary me-2"></i> <strong>Man-hour</strong></td>
                                            <td>Dựa trên tổng số giờ làm việc của Developer, Tester, BA để hoàn thành tính năng. (Đơn giá theo giờ quy định của công ty).</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ri-bar-chart-line text-primary me-2"></i> <strong>Độ phức tạp</strong></td>
                                            <td>Tính năng càng phức tạp, ảnh hưởng đến cấu trúc lõi (Core) của hệ thống thì chi phí càng cao.</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ri-tools-line text-primary me-2"></i> <strong>Công nghệ</strong></td>
                                            <td>Yêu cầu công nghệ đặc thù hoặc license của bên thứ 3 sẽ được tính thêm vào chi phí.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="mt-4">Bảng giá tham khảo (Ước tính)</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="ri-checkbox-circle-line text-success me-2"></i> Chức năng đơn giản (Form, Báo cáo nhỏ)</span>
                                    <span class="badge bg-light text-dark">1.000.000đ - 3.000.000đ</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="ri-checkbox-circle-line text-success me-2"></i> Chức năng trung bình (Module quản lý riêng)</span>
                                    <span class="badge bg-light text-dark">3.000.000đ - 10.000.000đ</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="ri-checkbox-circle-line text-success me-2"></i> Tích hợp hệ thống (API, ERP, Banking)</span>
                                    <span class="badge bg-light text-dark">Từ 10.000.000đ trở lên</span>
                                </li>
                            </ul>
                        </section>

                        <!-- 4. Quy Trình -->
                        <section id="quy-trinh" class="content-section">
                            <h2>4. Quy Trình Xử Lý Yêu Cầu</h2>
                            <div class="process-wrapper mt-4">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div>
                                        <h4 style="font-size: 18px; font-weight: 700;">Tiếp Nhận Yêu Cầu</h4>
                                        <p class="text-muted mb-0">Khách hàng gửi yêu cầu chi tiết (Mô tả, hình ảnh minh họa) qua Email hoặc Ticket hỗ trợ.</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div>
                                        <h4 style="font-size: 18px; font-weight: 700;">Phân Tích & Báo Giá</h4>
                                        <p class="text-muted mb-0">Trường Thành ERP phân tích kỹ thuật, ước lượng thời gian và gửi Báo giá (PO) bổ sung.</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div>
                                        <h4 style="font-size: 18px; font-weight: 700;">Xác Nhận & Thanh Toán</h4>
                                        <p class="text-muted mb-0">Khách hàng xác nhận đồng ý làm và thanh toán chi phí phát sinh (Thường là 50-100%).</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div>
                                        <h4 style="font-size: 18px; font-weight: 700;">Triển Khai & Bàn Giao</h4>
                                        <p class="text-muted mb-0">Đội ngũ kỹ thuật thực hiện, kiểm thử (Test) và bàn giao tính năng mới lên hệ thống.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- 5. FAQ -->
                        <section id="faq" class="content-section">
                            <h2>5. Câu Hỏi Thường Gặp</h2>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Chức năng phát sinh có được bảo hành không?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Có. Tất cả chức năng phát sinh do Trường Thành ERP thực hiện đều được bảo hành kỹ thuật trong vòng <strong>3-6 tháng</strong> (hoặc theo thỏa thuận cụ thể) kể từ ngày bàn giao.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Thời gian triển khai mất bao lâu?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Tùy thuộc độ phức tạp. Các chức năng nhỏ mất 1-3 ngày, các module lớn hoặc tích hợp hệ thống có thể mất 2-4 tuần. Thời gian chính xác sẽ có trong Báo giá.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Tôi có thể tự thuê đơn vị khác làm chức năng phát sinh không?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Nếu bạn sở hữu mã nguồn (Source code), bạn có quyền thuê đơn vị khác. Tuy nhiên, Trường Thành ERP sẽ không chịu trách nhiệm bảo hành nếu mã nguồn bị can thiệp bởi bên thứ 3 gây lỗi hệ thống.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- 6. Liên Hệ (Thay thế form bằng box thông tin để đồng bộ) -->
                        <section id="lien-he" class="content-section text-center" style="background: linear-gradient(135deg, #00B2FF 0%, #0067ff 100%); color: #fff;">
                            <h2 style="color: #fff; border-bottom: none;">Cần Tư Vấn Về Chức Năng Mới?</h2>
                            <p>Hãy liên hệ ngay với chúng tôi để được tư vấn giải pháp tối ưu nhất cho hệ thống của bạn.</p>
                            <div class="mt-4">
                                <a href="lien-he.html" class="btn btn-light text-primary font-weight-bold px-4 py-2 me-2">Gửi Yêu Cầu</a>
                                <a href="tel:02422121489" class="btn btn-outline-light font-weight-bold px-4 py-2"><i class="ri-phone-line me-1"></i> 024.2212.1489</a>
                            </div>
                        </section>

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
            const sections = document.querySelectorAll(".content-section");
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

            // Xử lý click smooth scroll
            document.querySelectorAll('.policy-nav-list a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 120,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>