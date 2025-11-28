<?php
// 1. KẾT NỐI DATABASE
require_once '../admin/config/db_connection.php';

// 2. LẤY DỮ LIỆU CÁC GÓI DỊCH VỤ
$plans_result = $conn->query("SELECT * FROM pricing_plans");
$plans = [];
while ($row = $plans_result->fetch_assoc()) {
    $plans[] = $row; // Lưu vào mảng để dùng cho cả 2 tab (Tháng/Năm)
}

// 3. LẤY DỮ LIỆU BẢNG SO SÁNH
$comp_result = $conn->query("SELECT * FROM pricing_comparisons ORDER BY sort_order ASC");

// Hàm hỗ trợ hiển thị icon check/cross trong bảng so sánh
function render_val($val)
{
    if ($val == 'CHECK') return "<i class='bx bx-check text-success fs-4'></i>";
    if ($val == 'CROSS') return "<i class='bx bx-x text-danger fs-4'></i>";
    return htmlspecialchars($val);
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/boxicons.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/css/odometer.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.min.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dark.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

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

        .highlight-col {
            background-color: rgba(255, 107, 53, 0.05);
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <?php include("../includes/header.php") ?>

    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Bảng Giá Dịch Vụ</h2>
                        <p>Chọn gói phù hợp với quy mô và nhu cầu của doanh nghiệp bạn</p>
                        <ul>
                            <li><a href="index.html">Trang chủ</a><i class='bx bx-right-arrow-alt'></i></li>
                            <li>Bảng giá</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Gói Dịch Vụ</span>
                <h2>Chi Phí Linh Hoạt - Tối Ưu Hiệu Quả</h2>
                <ul class="pricing-plan">
                    <li><i class='bx bx-check'></i> Dùng thử miễn phí 30 ngày</li>
                    <li><i class='bx bx-check'></i> Hỗ trợ kỹ thuật 24/7</li>
                </ul>
            </div>

            <div class="tab pricing-list-tab">
                <ul class="tabs">
                    <li><a href="#">Theo Tháng</a></li>
                    <li>
                        <a href="#">Theo Năm
                            <span><img src="../assets/img/icons/curve-arrow.png" alt="image"> Tiết kiệm 20%</span>
                        </a>
                    </li>
                </ul>

                <div class="tab_content">

                    <div class="tabs_item">
                        <div class="row">
                            <?php foreach ($plans as $plan): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-table <?php echo $plan['is_popular'] ? 'active' : ''; ?>">

                                        <?php if ($plan['is_popular']): ?>
                                            <div class="popular"><a href="#">Phổ biến nhất</a></div>
                                        <?php endif; ?>

                                        <div class="pricing-header">
                                            <h3><?php echo htmlspecialchars($plan['name']); ?></h3>
                                            <p><?php echo htmlspecialchars($plan['description']); ?></p>
                                        </div>

                                        <div class="price">
                                            <?php if (is_numeric($plan['price_monthly'])): ?>
                                                <?php echo number_format($plan['price_monthly']); ?><sup>đ</sup>
                                                <p>mỗi tháng</p>
                                            <?php else: ?>
                                                <?php echo htmlspecialchars($plan['price_monthly']); ?>
                                                <p>thỏa thuận</p>
                                            <?php endif; ?>
                                        </div>

                                        <ul class="pricing-features">
                                            <?php
                                            // Tách các dòng tính năng thành mảng
                                            $features = explode("\n", $plan['features_list']);
                                            foreach ($features as $feature):
                                                if (trim($feature) != ""):
                                            ?>
                                                    <li><i class='bx bx-check'></i> <?php echo htmlspecialchars(trim($feature)); ?></li>
                                            <?php endif;
                                            endforeach; ?>
                                        </ul>

                                        <div class="pricing-btn">
                                            <a href="../lien-he/" class="default-btn">Đăng ký ngay</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <?php foreach ($plans as $plan): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-table <?php echo $plan['is_popular'] ? 'active' : ''; ?>">

                                        <?php if ($plan['is_popular']): ?>
                                            <div class="popular"><a href="#">Phổ biến nhất</a></div>
                                        <?php endif; ?>

                                        <div class="pricing-header">
                                            <h3><?php echo htmlspecialchars($plan['name']); ?></h3>
                                            <p>Thanh toán theo năm</p>
                                        </div>

                                        <div class="price">
                                            <?php if (is_numeric($plan['price_yearly'])): ?>
                                                <?php echo number_format($plan['price_yearly']); ?><sup>đ</sup>
                                                <p>mỗi năm</p>
                                            <?php else: ?>
                                                <?php echo htmlspecialchars($plan['price_yearly']); ?>
                                                <p>thỏa thuận</p>
                                            <?php endif; ?>
                                        </div>

                                        <?php if (is_numeric($plan['price_monthly']) && is_numeric($plan['price_yearly'])):
                                            $saving = ($plan['price_monthly'] * 12) - $plan['price_yearly'];
                                            if ($saving > 0):
                                        ?>
                                                <div class="text text-success fw-bold mt-2">Tiết kiệm <?php echo number_format($saving); ?>đ</div>
                                        <?php endif;
                                        endif; ?>

                                        <ul class="pricing-features">
                                            <?php
                                            $features = explode("\n", $plan['features_list']);
                                            foreach ($features as $feature):
                                                if (trim($feature) != ""):
                                            ?>
                                                    <li><i class='bx bx-check'></i> <?php echo htmlspecialchars(trim($feature)); ?></li>
                                            <?php endif;
                                            endforeach; ?>
                                        </ul>

                                        <div class="pricing-btn">
                                            <a href="../lien-he/" class="default-btn">Đăng ký ngay</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="comparison-table table-responsive">
                <div class="section-title">
                    <h2>So Sánh Chi Tiết Tính Năng</h2>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Tính năng</th>
                            <?php
                            // Reset pointer về đầu mảng plans
                            reset($plans);
                            foreach ($plans as $plan):
                            ?>
                                <th scope="col" class="<?php echo $plan['is_popular'] ? 'highlight-col' : ''; ?>">
                                    <?php echo htmlspecialchars($plan['name']); ?>
                                </th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($comp_result->num_rows > 0): ?>
                            <?php while ($row = $comp_result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['feature_name']); ?></td>
                                    <td><?php echo render_val($row['val_basic']); ?></td>
                                    <td class="highlight-col"><?php echo render_val($row['val_pro']); ?></td>
                                    <td><?php echo render_val($row['val_enterprise']); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center">Chưa có dữ liệu so sánh.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

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
                            <i class="bx bx-chevron-down"></i> Có được dùng thử miễn phí không? </a>
                        <p class="accordion-content show">Có, chúng tôi cung cấp gói dùng thử miễn phí 30 ngày với đầy đủ tính năng của gói Professional. Bạn có thể đăng ký ngay mà không cần thẻ tín dụng để trải nghiệm hệ thống.</p>
                    </li>
                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i> Có thể thay đổi gói dịch vụ sau khi đăng ký không? </a>
                        <p class="accordion-content">Hoàn toàn có thể. Bạn có thể nâng cấp hoặc hạ cấp gói dịch vụ bất cứ lúc nào. Phí sẽ được tính toán lại dựa trên thời gian sử dụng thực tế và gói cước mới.</p>
                    </li>
                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i> Có ưu đãi gì khi thanh toán theo năm? </a>
                        <p class="accordion-content">Khi thanh toán theo năm, bạn sẽ được giảm khoảng 20% so với thanh toán theo tháng. Ví dụ: Gói Professional chỉ còn 45 triệu/năm thay vì 54 triệu nếu trả từng tháng.</p>
                    </li>
                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i> Chi phí triển khai và đào tạo có tính riêng không? </a>
                        <p class="accordion-content">Không, chi phí triển khai cơ bản và đào tạo hướng dẫn sử dụng online đã bao gồm trong gói dịch vụ. Chỉ có những yêu cầu tùy chỉnh tính năng đặc biệt (Customize) hoặc đào tạo offline tận nơi mới có thể phát sinh chi phí bổ sung.</p>
                    </li>
                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-chevron-down"></i> Có chính sách hoàn tiền không? </a>
                        <p class="accordion-content">Có, chúng tôi có chính sách hoàn tiền 100% trong vòng 30 ngày đầu tiên nếu bạn cảm thấy hệ thống không phù hợp với nhu cầu của doanh nghiệp.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->

    <section class="overview-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="overview-content">
                        <h2>Bắt Đầu Chuyển Đổi Số Ngay Hôm Nay</h2>
                        <p>Đăng ký tư vấn miễn phí để nhận báo giá chi tiết.</p>
                        <div class="overview-btn">
                            <a href="../lien-he/" class="btn-one">Đăng Ký Tư Vấn <i class='bx bx-right-arrow-alt'></i></a>
                            <a href="tel:19001234" class="btn-two">Gọi Ngay: 1900 1234 <i class='bx bxs-phone-call'></i></a>
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

    <?php include("../includes/footer.php") ?>

    <div class="go-top"><i class="bx bx-chevron-up"></i><i class="bx bx-chevron-up"></i></div>

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