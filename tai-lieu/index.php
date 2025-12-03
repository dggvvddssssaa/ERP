<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- 1. ADD GOOGLE FONTS (Quan trọng để không lỗi font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css" />
    <!--=== BoxIcons CSS ===-->
    <link rel="stylesheet" href="../assets/css/boxicons.min.css" />
    <!--=== RemixIcon CSS ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
    <!-- Owl Default CSS -->
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css" />

    <title>Kho Tài Liệu & Hướng Dẫn - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="https://truongthanherp.com/wp-content/uploads/2021/10/favicon.png" />

    <style>
        /* CSS Custom */
        :root {
            --primary-color: #00B2FF;
            --text-color: #333;
            --bg-light: #f8f9fa;
        }

        /* 2. Ép sử dụng font Roboto cho toàn trang */
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
        div,
        li,
        input,
        button {
            font-family: 'Roboto', sans-serif !important;
        }

        body {
            color: var(--text-color);
            background-color: #f9f9f9;
        }

        /* --- FIX LỖI DROPDOWN --- */
        .dropdown-menu.show {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
            top: 100% !important;
        }

        .filter-btn {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px 20px;
            color: #555;
            width: 100%;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: 0.3s;
            font-size: 15px;
        }

        .filter-btn::after {
            margin-left: auto;
        }

        .filter-btn:hover,
        .filter-btn:focus,
        .filter-btn[aria-expanded="true"] {
            border-color: var(--primary-color);
            color: var(--primary-color);
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 178, 255, 0.1);
        }

        .filter-dropdown-menu {
            width: 100%;
            border: 1px solid #eee;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border-radius: 8px;
            padding: 10px;
            margin-top: 8px !important;
        }

        .filter-dropdown-menu li a {
            border-radius: 5px;
            padding: 8px 15px;
            color: #555;
            font-size: 14px;
        }

        .filter-dropdown-menu li a:hover {
            background-color: #f0f9ff;
            color: var(--primary-color);
        }

        /* Hero Section */
        .docs-hero {
            background: linear-gradient(135deg, #e3f2fd 0%, #f0f9ff 100%);
            padding: 140px 0 60px;
            text-align: center;
        }

        .docs-search-box {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }

        .docs-search-box input {
            height: 55px;
            border-radius: 50px;
            padding-left: 25px;
            padding-right: 55px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .docs-search-box button {
            position: absolute;
            right: 5px;
            top: 5px;
            height: 45px;
            width: 45px;
            border-radius: 50%;
            border: none;
            background: transparent;
            color: var(--primary-color);
            font-size: 20px;
        }

        /* Sidebar */
        .sidebar-box {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 30px;
        }

        .cat-list a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 15px;
            color: #555;
            border-radius: 8px;
            transition: 0.3s;
            margin-bottom: 5px;
            text-decoration: none;
        }

        .cat-list a:hover,
        .cat-list a.active {
            background-color: #e3f2fd;
            color: var(--primary-color);
        }

        .cat-badge {
            background-color: rgba(0, 178, 255, 0.1);
            color: var(--primary-color);
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 20px;
        }

        .tag-cloud a {
            display: inline-block;
            background: #f1f1f1;
            padding: 5px 12px;
            border-radius: 20px;
            color: #666;
            font-size: 13px;
            margin: 0 5px 8px 0;
            transition: 0.3s;
            text-decoration: none;
        }

        .tag-cloud a:hover {
            background: var(--primary-color);
            color: #fff;
        }

        /* Document Items */
        .doc-item {
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: 0.3s;
            display: flex;
            align-items: flex-start;
        }

        .doc-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            border-color: var(--primary-color);
        }

        .doc-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .icon-pdf {
            background: #ffebee;
            color: #f44336;
        }

        .icon-word {
            background: #e3f2fd;
            color: #2196f3;
        }

        .icon-excel {
            background: #e8f5e9;
            color: #4caf50;
        }

        .icon-video {
            background: #f3e5f5;
            color: #9c27b0;
        }

        .doc-meta {
            font-size: 12px;
            color: #888;
            margin-top: 10px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .doc-meta span {
            margin-right: 15px;
            display: flex;
            align-items: center;
        }

        .doc-meta i {
            margin-right: 5px;
        }

        /* Request Section */
        .request-section {
            background: linear-gradient(to right, #00B2FF, #0067ff);
            padding: 60px 0;
            color: #fff;
            text-align: center;
        }

        /* Pagination */
        .pagination .page-link {
            color: #555;
            border-radius: 5px;
            margin: 0 3px;
            border: 1px solid #dee2e6;
        }

        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #fff;
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

    <!-- Start Hero Search Section -->
    <section class="docs-hero">
        <div class="container">
            <h1 class="mb-3" style="font-weight: 800; color: #0e1b29;">Kho Tài Liệu & Hướng Dẫn</h1>
            <p class="mb-4 text-muted" style="font-size: 18px;">Tìm kiếm tài liệu hướng dẫn sử dụng ERP, CRM và các giải pháp kỹ thuật.</p>

            <form class="docs-search-box mb-5">
                <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm (VD: Hướng dẫn bán hàng...)">
                <button type="submit"><i class="ri-search-line"></i></button>
            </form>

            <!-- Filter Area (Fixed Dropdown) -->
            <div class="row g-3 justify-content-center">
                <div class="col-lg-3 col-md-4">
                    <div class="dropdown">
                        <button class="btn filter-btn dropdown-toggle" type="button" id="typeFilter" data-bs-toggle="dropdown" aria-expanded="false">
                            Tất cả loại
                        </button>
                        <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="typeFilter">
                            <li><a class="dropdown-item" href="#">Tất cả loại</a></li>
                            <li><a class="dropdown-item" href="#">Hướng dẫn sử dụng</a></li>
                            <li><a class="dropdown-item" href="#">Tài liệu kỹ thuật</a></li>
                            <li><a class="dropdown-item" href="#">Video Training</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="dropdown">
                        <button class="btn filter-btn dropdown-toggle" type="button" id="topicFilter" data-bs-toggle="dropdown" aria-expanded="false">
                            Tất cả chủ đề
                        </button>
                        <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="topicFilter">
                            <li><a class="dropdown-item" href="#">Tất cả chủ đề</a></li>
                            <li><a class="dropdown-item" href="#">Quản lý kho</a></li>
                            <li><a class="dropdown-item" href="#">Kế toán</a></li>
                            <li><a class="dropdown-item" href="#">Nhân sự (HRM)</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="dropdown">
                        <button class="btn filter-btn dropdown-toggle" type="button" id="formatFilter" data-bs-toggle="dropdown" aria-expanded="false">
                            Định dạng
                        </button>
                        <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="formatFilter">
                            <li><a class="dropdown-item" href="#">Tất cả</a></li>
                            <li><a class="dropdown-item" href="#">PDF</a></li>
                            <li><a class="dropdown-item" href="#">Word/Excel</a></li>
                            <li><a class="dropdown-item" href="#">Video</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-12 d-flex align-items-center justify-content-center justify-content-lg-start">
                    <a href="#" class="text-muted text-decoration-none small mt-2 mt-lg-0"><i class="ri-refresh-line me-1"></i> Xóa bộ lọc</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Search Section -->

    <!-- Start Main Content -->
    <section class="docs-area pt-5 pb-100">
        <div class="container">
            <div class="row">
                <!-- Left Sidebar -->
                <div class="col-lg-3">
                    <!-- Categories -->
                    <div class="sidebar-box">
                        <h4 class="mb-3" style="font-size: 18px; font-weight: 700;">Danh Mục</h4>
                        <div class="cat-list">
                            <a href="#" class="active">
                                <span><i class="ri-folder-line me-2"></i> Tất cả tài liệu</span>
                                <span class="cat-badge">42</span>
                            </a>
                            <a href="#">
                                <span><i class="ri-book-mark-line me-2"></i> Hướng dẫn ERP</span>
                                <span class="cat-badge">18</span>
                            </a>
                            <a href="#">
                                <span><i class="ri-user-settings-line me-2"></i> Quản trị hệ thống</span>
                                <span class="cat-badge">12</span>
                            </a>
                            <a href="#">
                                <span><i class="ri-code-s-slash-line me-2"></i> API & Kỹ thuật</span>
                                <span class="cat-badge">8</span>
                            </a>
                            <a href="#">
                                <span><i class="ri-video-line me-2"></i> Video Training</span>
                                <span class="cat-badge">4</span>
                            </a>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="sidebar-box">
                        <h4 class="mb-3" style="font-size: 18px; font-weight: 700;">Tags Phổ Biến</h4>
                        <div class="tag-cloud">
                            <a href="#">Kế toán</a>
                            <a href="#">Bán hàng</a>
                            <a href="#">Kho vận</a>
                            <a href="#">HRM</a>
                            <a href="#">CRM</a>
                            <a href="#">Báo cáo</a>
                            <a href="#">Bảo mật</a>
                            <a href="#">API</a>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-9">

                    <!-- Section: Tài Liệu Mới -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 style="font-size: 24px; font-weight: 700;">Tài Liệu Mới Nhất</h3>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Mới nhất
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Mới nhất</a></li>
                                <li><a class="dropdown-item" href="#">Tải nhiều nhất</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Item 1 -->
                        <div class="col-md-6">
                            <div class="doc-item">
                                <div class="doc-icon icon-pdf">
                                    <i class="ri-file-pdf-line"></i>
                                </div>
                                <div class="w-100">
                                    <h5 class="mb-1" style="font-size: 16px; font-weight: 700;">
                                        <a href="#" class="text-dark text-decoration-none">Hướng dẫn phân hệ Kế toán</a>
                                    </h5>
                                    <p class="mb-2 text-muted small line-clamp-2">Tài liệu hướng dẫn chi tiết các nghiệp vụ kế toán trên hệ thống ERP.</p>
                                    <div class="doc-meta">
                                        <span><i class="ri-pages-line"></i> 45 trang</span>
                                        <span><i class="ri-download-cloud-line"></i> 1.2K</span>
                                        <a href="#" class="ms-auto text-primary text-decoration-none fw-bold">Tải về</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="col-md-6">
                            <div class="doc-item">
                                <div class="doc-icon icon-video">
                                    <i class="ri-video-line"></i>
                                </div>
                                <div class="w-100">
                                    <h5 class="mb-1" style="font-size: 16px; font-weight: 700;">
                                        <a href="#" class="text-dark text-decoration-none">Video: Quy trình Nhập - Xuất kho</a>
                                    </h5>
                                    <p class="mb-2 text-muted small line-clamp-2">Hướng dẫn thao tác nhập kho, luân chuyển kho và xử lý kiểm kê.</p>
                                    <div class="doc-meta">
                                        <span><i class="ri-time-line"></i> 15 phút</span>
                                        <span><i class="ri-eye-line"></i> 850</span>
                                        <a href="#" class="ms-auto text-primary text-decoration-none fw-bold">Xem ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="col-md-6">
                            <div class="doc-item">
                                <div class="doc-icon icon-excel">
                                    <i class="ri-file-excel-line"></i>
                                </div>
                                <div class="w-100">
                                    <h5 class="mb-1" style="font-size: 16px; font-weight: 700;">
                                        <a href="#" class="text-dark text-decoration-none">Template Import Khách hàng (CRM)</a>
                                    </h5>
                                    <p class="mb-2 text-muted small line-clamp-2">File mẫu Excel import dữ liệu khách hàng hàng loạt.</p>
                                    <div class="doc-meta">
                                        <span><i class="ri-file-line"></i> 50KB</span>
                                        <span><i class="ri-download-cloud-line"></i> 2.5K</span>
                                        <a href="#" class="ms-auto text-primary text-decoration-none fw-bold">Tải về</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="col-md-6">
                            <div class="doc-item">
                                <div class="doc-icon icon-word">
                                    <i class="ri-file-word-line"></i>
                                </div>
                                <div class="w-100">
                                    <h5 class="mb-1" style="font-size: 16px; font-weight: 700;">
                                        <a href="#" class="text-dark text-decoration-none">Tài liệu tích hợp API Hóa đơn điện tử</a>
                                    </h5>
                                    <p class="mb-2 text-muted small line-clamp-2">Hướng dẫn kỹ thuật kết nối ERP với nhà cung cấp hóa đơn điện tử.</p>
                                    <div class="doc-meta">
                                        <span><i class="ri-pages-line"></i> 20 trang</span>
                                        <span><i class="ri-download-cloud-line"></i> 400</span>
                                        <a href="#" class="ms-auto text-primary text-decoration-none fw-bold">Tải về</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section: Hướng Dẫn Quản Trị -->
                    <div class="mt-4">
                        <h3 class="mb-4" style="font-size: 24px; font-weight: 700;">Hướng Dẫn Quản Trị Hệ Thống</h3>

                        <div class="doc-item">
                            <div class="doc-icon icon-pdf">
                                <i class="ri-shield-keyhole-line"></i>
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-1" style="font-size: 16px; font-weight: 700;">Phân quyền người dùng (User Roles)</h5>
                                    <span class="badge bg-light text-dark border">PDF</span>
                                </div>
                                <p class="mb-2 text-muted small">Cách tạo nhóm quyền, phân quyền chi tiết từng chức năng.</p>
                                <div class="doc-meta">
                                    <span><i class="ri-calendar-line"></i> 20/06/2025</span>
                                    <a href="#" class="ms-auto text-primary text-decoration-none fw-bold">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>

                        <div class="doc-item">
                            <div class="doc-icon icon-pdf">
                                <i class="ri-settings-3-line"></i>
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-1" style="font-size: 16px; font-weight: 700;">Cấu hình quy trình duyệt (Approval)</h5>
                                    <span class="badge bg-light text-dark border">PDF</span>
                                </div>
                                <p class="mb-2 text-muted small">Hướng dẫn thiết lập quy trình phê duyệt đa cấp cho đơn hàng, đề xuất.</p>
                                <div class="doc-meta">
                                    <span><i class="ri-calendar-line"></i> 18/06/2025</span>
                                    <a href="#" class="ms-auto text-primary text-decoration-none fw-bold">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-5">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="ri-arrow-left-s-line"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="ri-arrow-right-s-line"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Main Content -->

    <!-- Start Request Section -->
    <section class="request-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-3 font-weight-bold text-white">Không Tìm Thấy Tài Liệu Bạn Cần?</h2>
                    <p class="mb-4 opacity-75 text-white" style="font-size: 18px;">Hãy gửi yêu cầu cho đội ngũ kỹ thuật của Trường Thành ERP. Chúng tôi sẽ hỗ trợ hoặc biên soạn tài liệu mới cho bạn.</p>
                    <a href="lien-he.html" class="btn btn-light text-primary fw-bold px-4 py-3 rounded-pill">Yêu Cầu Tài Liệu Mới</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Request Section -->

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
    <!-- Bootstrap JS (Bundle include Popper for Dropdown) -->
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