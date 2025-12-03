<?php
// 1. KẾT NỐI DATABASE
// Lưu ý: Kiểm tra lại đường dẫn file kết nối DB của bạn. 
// Dựa trên code mẫu bạn gửi, tôi dùng đường dẫn tương đối này:
require_once '../admin/config/db_connection.php';

// Cấu hình đường dẫn thư mục chứa file upload
$upload_dir = '../assets/uploads/documents/';

// 2. XỬ LÝ LỌC VÀ TÌM KIẾM
$where = "WHERE 1=1";

// Tìm kiếm từ khóa
$search_query = "";
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $search_query = $conn->real_escape_string($_GET['q']);
    $where .= " AND (title LIKE '%$search_query%' OR description LIKE '%$search_query%')";
}

// Lọc theo loại file (file_type)
$type_filter = "";
if (isset($_GET['type']) && !empty($_GET['type'])) {
    $type_filter = $conn->real_escape_string($_GET['type']);
    // Kiểm tra các giá trị hợp lệ
    if (in_array($type_filter, ['pdf', 'word', 'excel', 'video'])) {
        $where .= " AND file_type = '$type_filter'";
    }
}

// 3. XỬ LÝ PHÂN TRANG
$limit = 10; // Số tài liệu trên mỗi trang
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

// Đếm tổng số bản ghi để chia trang
$sql_count = "SELECT COUNT(*) as total FROM documents $where";
$result_count = $conn->query($sql_count);
$row_count = $result_count->fetch_assoc();
$total_records = $row_count['total'];
$total_pages = ceil($total_records / $limit);

// 4. LẤY DỮ LIỆU TÀI LIỆU
$sql = "SELECT * FROM documents $where ORDER BY created_at DESC LIMIT $offset, $limit";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- 1. ADD GOOGLE FONTS -->
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
        /* CSS Custom - Giữ nguyên của bạn */
        :root {
            --primary-color: #00B2FF;
            --text-color: #333;
            --bg-light: #f8f9fa;
        }

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

    <!-- HEADER -->
    <?php include("../includes/header.php") ?>

    <!-- Start Hero Search Section -->
    <section class="docs-hero">
        <div class="container">
            <h1 class="mb-3" style="font-weight: 800; color: #0e1b29;">Kho Tài Liệu & Hướng Dẫn</h1>
            <p class="mb-4 text-muted" style="font-size: 18px;">Tìm kiếm tài liệu hướng dẫn sử dụng ERP, CRM và các giải pháp kỹ thuật.</p>

            <form action="" method="GET" class="docs-search-box mb-5">
                <input type="text" name="q" class="form-control" placeholder="Nhập từ khóa tìm kiếm..." value="<?php echo htmlspecialchars($search_query); ?>">
                <!-- Giữ lại filter type nếu đang chọn khi search -->
                <?php if ($type_filter): ?>
                    <input type="hidden" name="type" value="<?php echo $type_filter; ?>">
                <?php endif; ?>
                <button type="submit"><i class="ri-search-line"></i></button>
            </form>

            <!-- Filter Area -->
            <div class="row g-3 justify-content-center">

                <!-- Loại Filter (Cập nhật link PHP) -->
                <div class="col-lg-3 col-md-4">
                    <div class="dropdown">
                        <button class="btn filter-btn dropdown-toggle" type="button" id="typeFilter" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            if ($type_filter == 'pdf') echo 'Tài liệu PDF';
                            elseif ($type_filter == 'video') echo 'Video Training';
                            else echo 'Tất cả loại';
                            ?>
                        </button>
                        <ul class="dropdown-menu filter-dropdown-menu" aria-labelledby="typeFilter">
                            <li><a class="dropdown-item" href="?<?php echo http_build_query(array_merge($_GET, ['type' => ''])); ?>">Tất cả loại</a></li>
                            <li><a class="dropdown-item" href="?<?php echo http_build_query(array_merge($_GET, ['type' => 'pdf'])); ?>">Tài liệu PDF</a></li>
                            <li><a class="dropdown-item" href="?<?php echo http_build_query(array_merge($_GET, ['type' => 'word'])); ?>">Tài liệu Word</a></li>
                            <li><a class="dropdown-item" href="?<?php echo http_build_query(array_merge($_GET, ['type' => 'excel'])); ?>">Tài liệu Excel</a></li>
                            <li><a class="dropdown-item" href="?<?php echo http_build_query(array_merge($_GET, ['type' => 'video'])); ?>">Video Training</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Chủ đề Filter (Giữ giao diện, chưa có logic vì DB thiếu cột category) -->
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

                <div class="col-lg-2 col-md-12 d-flex align-items-center justify-content-center justify-content-lg-start">
                    <a href="?" class="text-muted text-decoration-none small mt-2 mt-lg-0"><i class="ri-refresh-line me-1"></i> Xóa bộ lọc</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Search Section -->

    <!-- Start Main Content -->
    <section class="docs-area pt-5 pb-100">
        <div class="container">
            <div class="row">
                <!-- Left Sidebar (Giữ tĩnh để giữ UI) -->
                <div class="col-lg-3">
                    <div class="sidebar-box">
                        <h4 class="mb-3" style="font-size: 18px; font-weight: 700;">Danh Mục</h4>
                        <div class="cat-list">
                            <a href="?" class="active">
                                <span><i class="ri-folder-line me-2"></i> Tất cả tài liệu</span>
                            </a>
                            <a href="#">
                                <span><i class="ri-book-mark-line me-2"></i> Hướng dẫn ERP</span>
                            </a>
                            <a href="#">
                                <span><i class="ri-video-line me-2"></i> Video Training</span>
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h4 class="mb-3" style="font-size: 18px; font-weight: 700;">Tags Phổ Biến</h4>
                        <div class="tag-cloud">
                            <a href="#">Kế toán</a>
                            <a href="#">Bán hàng</a>
                            <a href="#">Kho vận</a>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-9">

                    <!-- Title Section -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 style="font-size: 24px; font-weight: 700;">
                            <?php echo (!empty($search_query)) ? "Kết quả tìm kiếm: \"$search_query\"" : "Tài Liệu Mới Nhất"; ?>
                        </h3>
                        <div class="text-muted">Tổng: <?php echo $total_records; ?> tài liệu</div>
                    </div>

                    <div class="row">
                        <!-- LOOP PHP HIỂN THỊ TÀI LIỆU -->
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <?php
                                // Xử lý logic icon và màu sắc dựa trên file_type từ DB
                                $icon_class = 'ri-file-line';
                                $bg_class = 'icon-pdf';
                                $btn_text = 'Tải về';

                                // Chuyển về chữ thường để so sánh
                                $f_type = strtolower($row['file_type']);

                                if (strpos($f_type, 'pdf') !== false) {
                                    $icon_class = 'ri-file-pdf-line';
                                    $bg_class = 'icon-pdf';
                                } elseif (strpos($f_type, 'word') !== false) {
                                    $icon_class = 'ri-file-word-line';
                                    $bg_class = 'icon-word';
                                } elseif (strpos($f_type, 'excel') !== false) {
                                    $icon_class = 'ri-file-excel-line';
                                    $bg_class = 'icon-excel';
                                } elseif (strpos($f_type, 'video') !== false) {
                                    $icon_class = 'ri-video-line';
                                    $bg_class = 'icon-video';
                                    $btn_text = 'Xem ngay';
                                }
                                ?>
                                <div class="col-md-6">
                                    <div class="doc-item">
                                        <div class="doc-icon <?php echo $bg_class; ?>">
                                            <i class="<?php echo $icon_class; ?>"></i>
                                        </div>
                                        <div class="w-100">
                                            <h5 class="mb-1" style="font-size: 16px; font-weight: 700;">
                                                <a href="#" class="text-dark text-decoration-none"><?php echo htmlspecialchars($row['title']); ?></a>
                                            </h5>
                                            <p class="mb-2 text-muted small line-clamp-2">
                                                <?php echo htmlspecialchars($row['description']); ?>
                                            </p>
                                            <div class="doc-meta">
                                                <?php if ($f_type == 'video'): ?>
                                                    <span><i class="ri-time-line"></i> Video</span>
                                                <?php else: ?>
                                                    <span><i class="ri-pages-line"></i> <?php echo htmlspecialchars($row['file_size']); ?></span>
                                                <?php endif; ?>

                                                <span><i class="ri-download-cloud-line"></i> <?php echo $row['download_count']; ?></span>

                                                <!-- Link tải về -->
                                                <a href="<?php echo $upload_dir . $row['file_path']; ?>" target="_blank" class="ms-auto text-primary text-decoration-none fw-bold">
                                                    <?php echo $btn_text; ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <div class="col-12 text-center py-5">
                                <img src="https://cdni.iconscout.com/illustration/premium/thumb/empty-state-2130362-1800926.png" alt="No data" style="width: 200px; opacity: 0.7">
                                <p class="mt-3 text-muted">Không tìm thấy tài liệu nào phù hợp.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Pagination PHP -->
                    <?php if ($total_pages > 1): ?>
                        <div class="mt-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <!-- Nút Previous -->
                                    <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                                        <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['page' => $page - 1])); ?>">
                                            <i class="ri-arrow-left-s-line"></i>
                                        </a>
                                    </li>

                                    <!-- Số trang -->
                                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                        <li class="page-item <?php if ($page == $i) echo 'active'; ?>">
                                            <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['page' => $i])); ?>">
                                                <?php echo $i; ?>
                                            </a>
                                        </li>
                                    <?php endfor; ?>

                                    <!-- Nút Next -->
                                    <li class="page-item <?php if ($page >= $total_pages) echo 'disabled'; ?>">
                                        <a class="page-link" href="?<?php echo http_build_query(array_merge($_GET, ['page' => $page + 1])); ?>">
                                            <i class="ri-arrow-right-s-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    <?php endif; ?>

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

    <!-- FOOTER -->
    <?php include("../includes/footer.php") ?>

    <!-- Start Go Top Section -->
    <div class="go-top">
        <i class="bx bx-chevron-up"></i>
        <i class="bx bx-chevron-up"></i>
    </div>

    <!-- Scripts -->
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
</body>

</html>