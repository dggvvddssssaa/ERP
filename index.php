<?php
// 1. KẾT NỐI DATABASE
// Lưu ý: Đường dẫn này giả định file index.php nằm ở thư mục gốc (cùng cấp với admin)
// Nếu lỗi kết nối, hãy kiểm tra lại đường dẫn require_once
require_once './admin/config/db_connection.php';

// 2. LẤY 3 TIN TỨC MỚI NHẤT
$sql_news = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
$result_news = $conn->query($sql_news);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <!--=== BoxIcons CSS ===-->
  <link rel="stylesheet" href="assets/css/boxicons.min.css" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <!-- Owl Default CSS -->
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
  <!-- Odometer CSS -->
  <link rel="stylesheet" href="assets/css/odometer.min.css" />
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="assets/css/nice-select.min.css" />
  <!--=== MeanMenu CSS ===-->
  <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- Dark CSS -->
  <link rel="stylesheet" href="assets/css/dark.css" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="assets/css/responsive.css" />

  <!--=== Title ===-->
  <title>Trường Thành ERP - Giải pháp Quản trị Doanh nghiệp Toàn diện</title>
  <link rel="icon" type="image/png" href="https://truongthanherp.com/wp-content/uploads/2021/10/favicon.png" />

  <style>
    /* Tùy chỉnh font chữ tiếng Việt */
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    a,
    li,
    span {
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>
  <!-- Start Preloader Area -->
  <div class="preloader">
    <div class="spinner"></div>
  </div>

  <!-- HEADER -->
  <?php include("./includes/header.php") ?>

  <!-- ... (Giữ nguyên phần Slider và các section khác ở trên) ... -->

  <!-- Start Main Slider Area -->
  <div class="home-sliders owl-carousel owl-theme">
    <!-- ... (Giữ nguyên nội dung Slider) ... -->
    <div class="home-item item-bg1">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="slider-content">
              <b>Hệ thống Trường Thành ERP</b>
              <h1>Giải Pháp Quản Trị Doanh Nghiệp Toàn Diện</h1>
              <p>Tối ưu hóa quy trình, nâng cao năng suất và kiểm soát chi phí hiệu quả cho ngành Xây dựng, Bất động sản và Sản xuất.</p>
              <div class="slider-btn">
                <a href="./lien-he/" class="default-btn">Đăng ký tư vấn<i class="bx bx-right-arrow-alt"></i><span></span></a>
                <a href="#" class="video-btn popup-youtube"><i class="bx bx-play"></i>Xem Video Giới Thiệu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shape"><img src="assets/img/slider/shape.png" alt="image" /></div>
    </div>
  </div>

  <!-- Start Management Area -->
  <section class="management-area ptb-100">
    <!-- ... (Giữ nguyên nội dung section này) ... -->
    <div class="container-fluid">
      <div class="section-title">
        <span>Giải Pháp Cốt Lõi</span>
        <h2>Quản Lý Hiệu Quả - Tăng Trưởng Bền Vững</h2>
        <p>Trường Thành cung cấp bộ giải pháp phần mềm quản lý chuyên sâu, đáp ứng đặc thù của từng doanh nghiệp.</p>
      </div>
      <div class="management-slider owl-carousel owl-theme">
        <!-- ... (Các item management giữ nguyên) ... -->
        <div class="management-item">
          <div class="image"><img src="assets/img/icons/management/1.png" alt="image" /></div>
          <h3>ERP Xây Dựng</h3>
          <p>Quản lý toàn diện từ đấu thầu, thi công, vật tư đến quyết toán công trình.</p>
          <ul class="management-list">
            <li><i class="bx bx-right-arrow-alt"></i> Quản lý dự toán</li>
            <li><i class="bx bx-right-arrow-alt"></i> Kiểm soát vật tư</li>
            <li><i class="bx bx-right-arrow-alt"></i> Tiến độ thi công</li>
          </ul><a href="./tinh-nang/" class="management-btn"><i class="bx bx-right-arrow-alt"></i> Xem chi tiết</a>
        </div>
        <div class="management-item">
          <div class="image"><img src="assets/img/icons/management/2.png" alt="image" /></div>
          <h3>ERP Bất Động Sản</h3>
          <p>Giải pháp quản lý sàn giao dịch, chủ đầu tư và vận hành tòa nhà.</p>
          <ul class="management-list">
            <li><i class="bx bx-right-arrow-alt"></i> Quản lý giỏ hàng</li>
            <li><i class="bx bx-right-arrow-alt"></i> Chăm sóc khách hàng</li>
            <li><i class="bx bx-right-arrow-alt"></i> Hợp đồng & Công nợ</li>
          </ul><a href="./tinh-nang/" class="management-btn"><i class="bx bx-right-arrow-alt"></i> Xem chi tiết</a>
        </div>
        <div class="management-item">
          <div class="image"><img src="assets/img/icons/management/3.png" alt="image" /></div>
          <h3>Tài Chính - Kế Toán</h3>
          <p>Đáp ứng đầy đủ nghiệp vụ kế toán theo thông tư mới nhất của Bộ Tài Chính.</p>
          <ul class="management-list">
            <li><i class="bx bx-right-arrow-alt"></i> Báo cáo thuế</li>
            <li><i class="bx bx-right-arrow-alt"></i> Kế toán quản trị</li>
            <li><i class="bx bx-right-arrow-alt"></i> Kết nối Hóa đơn điện tử</li>
          </ul><a href="./tinh-nang/" class="management-btn"><i class="bx bx-right-arrow-alt"></i> Xem chi tiết</a>
        </div>
      </div>
    </div>
    <div class="management-shape"><img src="assets/img/shape/1.png" alt="image" /></div>
  </section>

  <!-- ... (Giữ nguyên các section About, Features, Fun Facts, Join, Platform, Why Choose, Assistant, Testimonial) ... -->
  <!-- Vì file quá dài, tôi đã lược bớt phần giữa để tập trung vào phần Blog bạn cần sửa -->
  <!-- Bạn hãy copy nguyên phần code HTML từ file gốc của bạn vào đây nếu cần, chỉ thay thế section Blog Area bên dưới -->

  <!-- Start Blog Area (ĐÃ SỬA: Lấy dữ liệu từ DB) -->
  <section class="blog-area pt-100 pb-70">
    <div class="container">
      <div class="section-title-two">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="title">
              <span>Tin Tức Mới Nhất</span>
              <h2>Kiến Thức Quản Trị & Công Nghệ</h2>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="text">
              <p>Cập nhật những xu hướng chuyển đổi số, bài học quản trị và thông tin mới nhất từ Trường Thành ERP.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <?php if ($result_news && $result_news->num_rows > 0): ?>
          <?php while ($row = $result_news->fetch_assoc()): ?>
            <div class="col-lg-4 col-md-6">
              <div class="blog-item">
                <div class="image">
                  <!-- Link chi tiết tin tức -->
                  <a href="./xem-tin-tuc/?id=<?php echo $row['id']; ?>" class="d-block w-100">
                    <?php if (!empty($row['image'])): ?>
                      <!-- Hiển thị ảnh từ DB -->
                      <img src="assets/img/blog/<?php echo $row['image']; ?>"
                        alt="<?php echo htmlspecialchars($row['title']); ?>"
                        style="width: 100%; height: 250px; object-fit: cover;">
                    <?php else: ?>
                      <!-- Ảnh mặc định nếu không có ảnh -->
                      <img src="assets/img/blog/default.jpg"
                        alt="Default Image"
                        style="width: 100%; height: 250px; object-fit: cover;">
                    <?php endif; ?>
                  </a>
                  <div class="btn">
                    <a href="#"><?php echo htmlspecialchars($row['category']); ?></a>
                  </div>
                </div>

                <div class="content">
                  <ul class="post-meta">
                    <li>
                      <i class='bx bxs-calendar'></i>
                      <?php echo date('d/m/Y', strtotime($row['created_at'])); ?>
                    </li>
                    <li>
                      <i class='bx bx-user'></i>
                      Admin
                    </li>
                  </ul>

                  <h3>
                    <a href="./xem-tin-tuc/?id=<?php echo $row['id']; ?>">
                      <?php
                      // Cắt tiêu đề nếu quá dài
                      echo mb_strimwidth(htmlspecialchars($row['title']), 0, 70, "...");
                      ?>
                    </a>
                  </h3>

                  <!-- Thêm mô tả ngắn nếu muốn -->
                  <p>
                    <?php
                    echo mb_strimwidth(htmlspecialchars($row['summary']), 0, 100, "...");
                    ?>
                  </p>

                  <a href="./xem-tin-tuc/?id=<?php echo $row['id']; ?>" class="read-more">
                    Đọc Thêm
                    <i class='bx bx-right-arrow-alt'></i>
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <div class="col-12 text-center">
            <p>Hiện chưa có bài viết nào.</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- End Blog Area -->

  <!-- FOOTER -->
  <?php include("./includes/footer.php") ?>

  <!-- Start Go Top Section -->
  <div class="go-top">
    <i class="bx bx-chevron-up"></i>
    <i class="bx bx-chevron-up"></i>
  </div>

  <!-- Jquery Slim JS -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--=== MeanMenu JS ===-->
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- Magnific Popup JS -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Appear JS -->
  <script src="assets/js/jquery.appear.min.js"></script>
  <!-- Odometer JS -->
  <script src="assets/js/odometer.min.js"></script>
  <!--=== Form AjaxChimp JS ===-->
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
  <!-- Form Validator JS -->
  <script src="assets/js/form-validator.min.js"></script>
  <!-- Contact JS -->
  <script src="assets/js/contact-form-script.js"></script>
  <!-- Nice Select JS -->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- Wow Popup JS -->
  <script src="assets/js/wow.min.js"></script>
  <!-- Custom JS -->
  <script src="assets/js/main.js"></script>
</body>

</html>