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
    <title>Demo Hệ Thống - Trường Thành ERP</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

    <!-- CSS Tùy Chỉnh Cho Phần Demo Interface -->
    <style>
        .erp-demo-interface {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid #e0e0e0;
            min-height: 600px;
        }

        .erp-sidebar {
            background: #0a183d;
            color: #fff;
            min-height: 600px;
            padding: 20px 0;
        }

        .erp-nav-link {
            color: #b0b8c8;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            border-left: 3px solid transparent;
            text-decoration: none !important;
            cursor: pointer;
            font-size: 15px;
        }

        .erp-nav-link:hover,
        .erp-nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-left-color: #ff6b35;
        }

        .erp-nav-link i {
            font-size: 20px;
            margin-right: 10px;
            width: 25px;
            text-align: center;
        }

        .erp-content {
            background: #f4f7fa;
            padding: 0;
        }

        .erp-header {
            background: #fff;
            padding: 15px 25px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .erp-body {
            padding: 25px;
            height: 600px;
            overflow-y: auto;
        }

        .stat-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            border: 1px solid #eee;
        }

        .icon-box {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-size: 24px;
        }

        /* Overwrite nav-pills behavior */
        .nav-pills .nav-link {
            border-radius: 0;
        }

        .chart-container {
            width: 100%;
            height: 300px;
        }

        /* Process Card Styles */
        .process-card {
            background: #fff;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
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
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Demo Hệ Thống ERP</h2>
                        <p>Trải nghiệm giao diện thực tế của hệ thống ERP với đầy đủ tính năng quản lý doanh nghiệp.</p>
                        <ul>
                            <li>
                                <a href="index.html">Trang chủ</a>
                                <i class='bx bx-right-arrow-alt'></i>
                            </li>
                            <li>Demo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Main Demo Section -->
    <section class="demo-area ptb-100 bg-f9f9f9">
        <div class="container">
            <div class="section-title">
                <span>Trải Nghiệm Trực Quan</span>
                <h2>Giao Diện Quản Trị ERP</h2>
                <p>Click vào menu bên trái để khám phá các module chức năng.</p>
            </div>

            <!-- ERP Interface Container -->
            <div class="erp-demo-interface">
                <div class="row no-gutters">
                    <!-- Sidebar Navigation -->
                    <div class="col-lg-2 erp-sidebar">
                        <div class="px-4 mb-4">
                            <h5 class="text-white mb-0" style="font-family: 'Pacifico', cursive;">Trường Thành</h5>
                            <small class="text-muted">Phiên bản Demo</small>
                        </div>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link erp-nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
                                <i class='bx bx-grid-alt'></i> Dashboard
                            </a>
                            <a class="nav-link erp-nav-link" id="v-pills-finance-tab" data-toggle="pill" href="#v-pills-finance" role="tab" aria-controls="v-pills-finance" aria-selected="false">
                                <i class='bx bx-dollar-circle'></i> Tài Chính
                            </a>
                            <a class="nav-link erp-nav-link" id="v-pills-hr-tab" data-toggle="pill" href="#v-pills-hr" role="tab" aria-controls="v-pills-hr" aria-selected="false">
                                <i class='bx bx-group'></i> Nhân Sự
                            </a>
                            <a class="nav-link erp-nav-link" id="v-pills-sales-tab" data-toggle="pill" href="#v-pills-sales" role="tab" aria-controls="v-pills-sales" aria-selected="false">
                                <i class='bx bx-cart'></i> Bán Hàng
                            </a>
                            <a class="nav-link erp-nav-link" id="v-pills-inventory-tab" data-toggle="pill" href="#v-pills-inventory" role="tab" aria-controls="v-pills-inventory" aria-selected="false">
                                <i class='bx bx-box'></i> Kho Hàng
                            </a>
                            <a class="nav-link erp-nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">
                                <i class='bx bx-bar-chart-alt-2'></i> Báo Cáo
                            </a>
                        </div>
                    </div>

                    <!-- Main Content Area -->
                    <div class="col-lg-10 erp-content">
                        <!-- Header inside Demo -->
                        <div class="erp-header">
                            <h4 class="mb-0 font-weight-bold text-dark" id="moduleTitle">Tổng Quan Hệ Thống</h4>
                            <div class="d-flex align-items-center">
                                <div class="mr-4 text-muted">
                                    <i class='bx bx-bell'></i> 3 thông báo
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Admin" class="rounded-circle mr-2" style="width: 35px; height: 35px;">
                                    <span class="text-dark font-weight-bold">Nguyễn Văn Admin</span>
                                </div>
                            </div>
                        </div>

                        <!-- Body Content -->
                        <div class="erp-body tab-content" id="v-pills-tabContent">

                            <!-- 1. Dashboard Module -->
                            <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="stat-card">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <p class="text-muted mb-1 font-weight-bold">Doanh thu</p>
                                                    <h4 class="mb-0">2.4 Tỷ</h4>
                                                    <small class="text-success"><i class='bx bx-up-arrow-alt'></i> +12.5%</small>
                                                </div>
                                                <div class="icon-box" style="background: #e6fffa; color: #00b894;">
                                                    <i class='bx bx-money'></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-card">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <p class="text-muted mb-1 font-weight-bold">Đơn mới</p>
                                                    <h4 class="mb-0">1,247</h4>
                                                    <small class="text-primary"><i class='bx bx-up-arrow-alt'></i> +8.3%</small>
                                                </div>
                                                <div class="icon-box" style="background: #e3f2fd; color: #2196f3;">
                                                    <i class='bx bx-shopping-bag'></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-card">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <p class="text-muted mb-1 font-weight-bold">Khách mới</p>
                                                    <h4 class="mb-0">324</h4>
                                                    <small class="text-purple" style="color: #9c27b0;"><i class='bx bx-up-arrow-alt'></i> +15%</small>
                                                </div>
                                                <div class="icon-box" style="background: #f3e5f5; color: #9c27b0;">
                                                    <i class='bx bx-user-plus'></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-card">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <p class="text-muted mb-1 font-weight-bold">Tồn kho</p>
                                                    <h4 class="mb-0">89.2%</h4>
                                                    <small class="text-warning"><i class='bx bx-down-arrow-alt'></i> -2.1%</small>
                                                </div>
                                                <div class="icon-box" style="background: #fff3e0; color: #ff9800;">
                                                    <i class='bx bx-package'></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Charts Row -->
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="stat-card">
                                            <h5 class="mb-4">Biểu Đồ Doanh Thu</h5>
                                            <div id="revenueChart" class="chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="stat-card">
                                            <h5 class="mb-4">Cơ Cấu Sản Phẩm</h5>
                                            <div id="productChart" class="chart-container"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Finance Module -->
                            <div class="tab-pane fade" id="v-pills-finance" role="tabpanel">
                                <div class="row mb-4">
                                    <div class="col-lg-4">
                                        <div class="stat-card">
                                            <h5>Tổng Quan Tài Chính</h5>
                                            <hr>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span>Doanh thu:</span>
                                                <span class="text-success font-weight-bold">2,450,000,000 VNĐ</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span>Chi phí:</span>
                                                <span class="text-danger font-weight-bold">1,890,000,000 VNĐ</span>
                                            </div>
                                            <div class="d-flex justify-content-between border-top pt-2">
                                                <strong>Lợi nhuận:</strong>
                                                <strong class="text-primary">560,000,000 VNĐ</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="stat-card h-100">
                                            <h5>Giao dịch gần đây</h5>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th>Ngày</th>
                                                            <th>Mô tả</th>
                                                            <th>Loại</th>
                                                            <th>Số tiền</th>
                                                            <th>Trạng thái</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>15/11/2024</td>
                                                            <td>Thanh toán từ KH Minh Châu</td>
                                                            <td><span class="badge badge-success">Thu</span></td>
                                                            <td class="text-success">+18,500,000</td>
                                                            <td><i class='bx bxs-check-circle text-success'></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14/11/2024</td>
                                                            <td>Thanh toán lương T11</td>
                                                            <td><span class="badge badge-danger">Chi</span></td>
                                                            <td class="text-danger">-125,000,000</td>
                                                            <td><i class='bx bxs-check-circle text-success'></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13/11/2024</td>
                                                            <td>Mua NVL sản xuất</td>
                                                            <td><span class="badge badge-danger">Chi</span></td>
                                                            <td class="text-danger">-45,200,000</td>
                                                            <td><i class='bx bxs-time-five text-warning'></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. HR Module -->
                            <div class="tab-pane fade" id="v-pills-hr" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="stat-card text-center">
                                            <h3 class="font-weight-bold">147</h3>
                                            <p class="text-muted">Tổng nhân viên</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-card text-center">
                                            <h3 class="font-weight-bold text-success">142</h3>
                                            <p class="text-muted">Đi làm hôm nay</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-card text-center">
                                            <h3 class="font-weight-bold text-warning">5</h3>
                                            <p class="text-muted">Nghỉ phép</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-card text-center">
                                            <h3 class="font-weight-bold text-primary">8</h3>
                                            <p class="text-muted">Tuyển dụng mới</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <h5>Danh sách nhân sự</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nhân viên</th>
                                                    <th>Phòng ban</th>
                                                    <th>Chức vụ</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://ui-avatars.com/api/?name=Tran+Minh&background=random" class="rounded-circle mr-2" style="width:30px;height:30px">
                                                            <span>Trần Văn Minh</span>
                                                        </div>
                                                    </td>
                                                    <td>Kỹ thuật</td>
                                                    <td>Trưởng nhóm</td>
                                                    <td><span class="badge badge-success">Đang làm việc</span></td>
                                                    <td><a href="#" class="text-primary">Chi tiết</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="https://ui-avatars.com/api/?name=Nguyen+Lan&background=random" class="rounded-circle mr-2" style="width:30px;height:30px">
                                                            <span>Nguyễn Thị Lan</span>
                                                        </div>
                                                    </td>
                                                    <td>Marketing</td>
                                                    <td>Chuyên viên</td>
                                                    <td><span class="badge badge-warning">Nghỉ phép</span></td>
                                                    <td><a href="#" class="text-primary">Chi tiết</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Sales Module -->
                            <div class="tab-pane fade" id="v-pills-sales" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="stat-card">
                                            <h5>Cơ Hội Bán Hàng (Pipeline)</h5>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Khách hàng</th>
                                                            <th>Dự án quan tâm</th>
                                                            <th>Giá trị dự kiến</th>
                                                            <th>Xác suất</th>
                                                            <th>Giai đoạn</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Công ty Đại Phát</td>
                                                            <td>Hệ thống ERP Enterprise</td>
                                                            <td>450,000,000 VNĐ</td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-success" style="width: 85%">85%</div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge badge-pill badge-info">Đàm phán</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tập đoàn Hòa Bình</td>
                                                            <td>Module Nhân sự</td>
                                                            <td>120,000,000 VNĐ</td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-warning" style="width: 60%">60%</div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge badge-pill badge-primary">Thuyết trình</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 5. Inventory Module -->
                            <div class="tab-pane fade" id="v-pills-inventory" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="stat-card">
                                            <p class="text-muted font-weight-bold mb-1">Tổng SP</p>
                                            <h3>2,847</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-card">
                                            <p class="text-muted font-weight-bold mb-1">Sắp hết</p>
                                            <h3 class="text-danger">23</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="stat-card">
                                            <p class="text-muted font-weight-bold mb-1">Hoạt động kho</p>
                                            <div class="d-flex justify-content-between">
                                                <div>Nhập: <span class="text-success font-weight-bold">456</span></div>
                                                <div>Xuất: <span class="text-warning font-weight-bold">789</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <h5>Tồn kho sản phẩm</h5>
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Mã SP</th>
                                                <th>Tên SP</th>
                                                <th>Tồn</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SP-001</td>
                                                <td>Laptop Dell Inspiron 15</td>
                                                <td>45</td>
                                                <td><span class="badge badge-success">Đủ hàng</span></td>
                                            </tr>
                                            <tr>
                                                <td>SP-002</td>
                                                <td>Máy in Canon 2900</td>
                                                <td>8</td>
                                                <td><span class="badge badge-warning">Sắp hết</span></td>
                                            </tr>
                                            <tr>
                                                <td>SP-003</td>
                                                <td>Bàn phím Logitech</td>
                                                <td>0</td>
                                                <td><span class="badge badge-danger">Hết hàng</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 6. Reports Module -->
                            <div class="tab-pane fade" id="v-pills-reports" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="stat-card">
                                            <h5>Báo Cáo Doanh Thu Quý</h5>
                                            <div id="quarterlyChart" class="chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="stat-card">
                                            <h5>Hiệu Suất Nhân Viên</h5>
                                            <div id="salesPerformanceChart" class="chart-container"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5">
                <p class="text-muted mb-3">Bạn ấn tượng với bản Demo? Hãy đăng ký dùng thử để trải nghiệm đầy đủ!</p>
                <a href="contact.html" class="btn-one mr-3">
                    Đăng Ký Dùng Thử 30 Ngày
                </a>
                <a href="contact.html" class="btn-two">
                    Liên Hệ Tư Vấn
                </a>
            </div>
        </div>
    </section>
    <!-- End Main Demo Section -->

    <!-- Feature Highlights -->
    <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Tính Năng Nổi Bật</h2>
                <p>Khám phá những điểm mạnh của hệ thống ERP Trường Thành</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class='bx bx-laptop'></i>
                        </div>
                        <h3>Giao Diện Thân Thiện</h3>
                        <p>Dashboard trực quan, dễ sử dụng với thiết kế hiện đại, tối ưu trải nghiệm người dùng.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <h3>Thời Gian Thực</h3>
                        <p>Dữ liệu được cập nhật tức thì (Real-time), giúp ra quyết định nhanh chóng.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class='bx bx-layer'></i>
                        </div>
                        <h3>Tích Hợp Đa Module</h3>
                        <p>Kết nối liền mạch giữa các bộ phận: Kế toán, Kho, Bán hàng, Nhân sự.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class='bx bx-slider-alt'></i>
                        </div>
                        <h3>Tùy Chỉnh Linh Hoạt</h3>
                        <p>Dễ dàng điều chỉnh quy trình và báo cáo theo đặc thù riêng của doanh nghiệp.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Area -->
    <section class="process-area ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Quy Trình Triển Khai</h2>
                <p>Hành trình chuyển đổi số của bạn bắt đầu từ đây</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="process-card text-center">
                        <div class="process-icon mb-3">
                            <span class="d-inline-block rounded-circle bg-f12711 text-white font-weight-bold" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px;">01</span>
                        </div>
                        <h4>Tư Vấn & Khảo Sát</h4>
                        <p class="text-muted">Phân tích nhu cầu và đưa ra giải pháp phù hợp nhất.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="process-card text-center">
                        <div class="process-icon mb-3">
                            <span class="d-inline-block rounded-circle bg-f12711 text-white font-weight-bold" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px;">02</span>
                        </div>
                        <h4>Lập Kế Hoạch</h4>
                        <p class="text-muted">Xây dựng lộ trình triển khai chi tiết theo quy trình.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="process-card text-center">
                        <div class="process-icon mb-3">
                            <span class="d-inline-block rounded-circle bg-f12711 text-white font-weight-bold" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px;">03</span>
                        </div>
                        <h4>Đào Tạo & Setup</h4>
                        <p class="text-muted">Cài đặt hệ thống và đào tạo nhân sự sử dụng.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="process-card text-center">
                        <div class="process-icon mb-3">
                            <span class="d-inline-block rounded-circle bg-f12711 text-white font-weight-bold" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px;">04</span>
                        </div>
                        <h4>Golive & Hỗ Trợ</h4>
                        <p class="text-muted">Vận hành chính thức và hỗ trợ kỹ thuật 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- ECharts JS (Thêm vào để vẽ biểu đồ) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.3/echarts.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Script Riêng Cho Demo Page -->
    <!-- Custom JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Script Xử Lý Demo Page (Đã Fix Lỗi Tab) -->
    <script>
        $(document).ready(function() {

            // --- FIX LỖI TAB KHÔNG CHUYỂN ---
            // Xử lý sự kiện click thủ công thay vì dựa vào Bootstrap
            $('.erp-nav-link').on('click', function(e) {
                e.preventDefault(); // Chặn hành vi mặc định

                // 1. Xử lý giao diện Menu bên trái
                $('.erp-nav-link').removeClass('active'); // Bỏ active các tab khác
                $(this).addClass('active'); // Active tab vừa click

                // 2. Xử lý nội dung bên phải
                var targetId = $(this).attr('href'); // Lấy ID từ href (ví dụ: #v-pills-finance)

                // Ẩn tất cả các tab content
                $('.tab-pane').removeClass('show active');

                // Hiển thị tab content tương ứng
                $(targetId).addClass('show active');

                // 3. Cập nhật tiêu đề và resize biểu đồ
                var targetText = $(this).text().trim();
                $('#moduleTitle').text("Quản Lý " + targetText);

                // Resize biểu đồ (nếu có trong tab đó) để không bị vỡ giao diện
                setTimeout(function() {
                    if (typeof myRevenueChart !== 'undefined') myRevenueChart.resize();
                    if (typeof myProductChart !== 'undefined') myProductChart.resize();
                    if (typeof myQuarterlyChart !== 'undefined') myQuarterlyChart.resize();
                    if (typeof mySalesChart !== 'undefined') mySalesChart.resize();
                }, 200);
            });
            // --- HẾT PHẦN FIX LỖI ---


            // --- ECHARTS CONFIGURATION (Cấu hình biểu đồ) ---

            // 1. Revenue Chart
            var revenueChartDom = document.getElementById('revenueChart');
            var myRevenueChart;
            if (revenueChartDom) {
                myRevenueChart = echarts.init(revenueChartDom);
                var revenueOption = {
                    tooltip: {
                        trigger: 'axis'
                    },
                    grid: {
                        top: 20,
                        right: 20,
                        bottom: 20,
                        left: 40,
                        containLabel: true
                    },
                    xAxis: {
                        type: 'category',
                        data: ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7']
                    },
                    yAxis: {
                        type: 'value'
                    },
                    series: [{
                        data: [820, 932, 901, 934, 1290, 1330, 1320],
                        type: 'line',
                        smooth: true,
                        areaStyle: {
                            color: 'rgba(255, 107, 53, 0.2)'
                        },
                        itemStyle: {
                            color: '#ff6b35'
                        }
                    }]
                };
                myRevenueChart.setOption(revenueOption);
            }

            // 2. Product Chart (Pie)
            var productChartDom = document.getElementById('productChart');
            var myProductChart;
            if (productChartDom) {
                myProductChart = echarts.init(productChartDom);
                var productOption = {
                    tooltip: {
                        trigger: 'item'
                    },
                    series: [{
                        type: 'pie',
                        radius: ['40%', '70%'],
                        data: [{
                                value: 1048,
                                name: 'Laptop'
                            },
                            {
                                value: 735,
                                name: 'PC'
                            },
                            {
                                value: 580,
                                name: 'Linh kiện'
                            },
                            {
                                value: 484,
                                name: 'Khác'
                            }
                        ]
                    }]
                };
                myProductChart.setOption(productOption);
            }

            // 3. Quarterly Chart
            var quarterlyChartDom = document.getElementById('quarterlyChart');
            var myQuarterlyChart;
            if (quarterlyChartDom) {
                myQuarterlyChart = echarts.init(quarterlyChartDom);
                var quarterlyOption = {
                    tooltip: {
                        trigger: 'axis'
                    },
                    xAxis: {
                        type: 'category',
                        data: ['Q1', 'Q2', 'Q3', 'Q4']
                    },
                    yAxis: {
                        type: 'value'
                    },
                    series: [{
                        data: [120, 200, 150, 280],
                        type: 'bar',
                        itemStyle: {
                            color: '#1b2b37'
                        }
                    }]
                };
                myQuarterlyChart.setOption(quarterlyOption);
            }

            // 4. Sales Performance
            var salesChartDom = document.getElementById('salesPerformanceChart');
            var mySalesChart;
            if (salesChartDom) {
                mySalesChart = echarts.init(salesChartDom);
                var salesOption = {
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {
                            type: 'shadow'
                        }
                    },
                    grid: {
                        left: '3%',
                        right: '4%',
                        bottom: '3%',
                        containLabel: true
                    },
                    xAxis: {
                        type: 'value',
                        boundaryGap: [0, 0.01]
                    },
                    yAxis: {
                        type: 'category',
                        data: ['NV A', 'NV B', 'NV C', 'NV D']
                    },
                    series: [{
                        type: 'bar',
                        data: [18203, 23489, 29034, 104970],
                        itemStyle: {
                            color: '#ff6b35'
                        }
                    }]
                };
                mySalesChart.setOption(salesOption);
            }

            // Resize charts on window resize
            window.addEventListener('resize', function() {
                if (typeof myRevenueChart !== 'undefined') myRevenueChart.resize();
                if (typeof myProductChart !== 'undefined') myProductChart.resize();
                if (typeof myQuarterlyChart !== 'undefined') myQuarterlyChart.resize();
                if (typeof mySalesChart !== 'undefined') mySalesChart.resize();
            });
        });
    </script>
</body>

</html>