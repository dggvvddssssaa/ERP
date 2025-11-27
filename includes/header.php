<?php
$path = "/ERP";
?>

<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Mobile Menu -->
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="<?php echo $path; ?>/index.php">
                        <img src="<?php echo $path; ?>/assets/img/logo.svg" class="black-logo" alt="Truong Thanh ERP">
                    </a>
                </div>

                <!-- THÊM: Nút tư vấn cho giao diện Mobile -->
                <div class="mobile-button-box">
                    <a href="<?php echo $path; ?>/lien-he/" class="default-btn btn-call-mobile">
                        <i class="bx bxs-phone-call"></i> Tư vấn
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop Menu -->
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="<?php echo $path; ?>/index.php">
                    <img src="<?php echo $path; ?>/assets/img/logo.svg" class="black-logo" alt="Truong Thanh ERP">
                    <img src="<?php echo $path; ?>/assets/img/logo2.svg" class="white-logo" alt="Truong Thanh ERP">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="<?php echo $path; ?>/index.php" class="nav-link">Trang chủ</a></li>
                        <li class="nav-item"><a href="<?php echo $path; ?>/gioi-thieu/" class="nav-link">Giới thiệu</a></li>
                        <li class="nav-item"><a href="<?php echo $path; ?>/tinh-nang/" class="nav-link">Tính năng</a></li>
                        <li class="nav-item"><a href="<?php echo $path; ?>/bang-gia/" class="nav-link">Bảng giá</a></li>
                        <li class="nav-item"><a href="<?php echo $path; ?>/tin-tuc/" class="nav-link">Tin tức</a></li>
                    </ul>

                    <div class="others-options d-none d-lg-flex align-items-center">
                        <div class="option-item">
                            <!-- Nút cho Desktop -->
                            <a href="<?php echo $path; ?>/lien-he/" class="default-btn btn-call">
                                <i class="bx bxs-phone-call"></i> Tư vấn miễn phí
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
<style>
    /* --- 1. XỬ LÝ LOGO --- */
    .navbar-brand img {
        max-width: unset !important;
        height: 50px !important;
        width: auto !important;
    }

    /* --- 2. CĂN CHỈNH MENU DESKTOP --- */
    .main-navbar .navbar {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .navbar-expand-md .navbar-nav .nav-link {
        line-height: 50px;
        padding-top: 0;
        padding-bottom: 0;
        font-weight: 600;
        font-size: 16px;
        color: #1a1a1a;
    }

    .navbar-nav .nav-item {
        margin-left: 15px;
        margin-right: 15px;
    }

    /* --- 3. STYLE CHO NÚT TƯ VẤN (Dùng chung) --- */
    .default-btn.btn-call,
    .default-btn.btn-call-mobile {
        background-color: #0d6efd;
        color: #ffffff;
        border-radius: 5px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: 0.3s;
        border: none;
        white-space: nowrap;
    }

    .default-btn.btn-call:hover,
    .default-btn.btn-call-mobile:hover {
        background-color: #0b5ed7;
        color: #fff;
    }

    /* Style riêng cho nút Desktop */
    .default-btn.btn-call {
        padding: 10px 25px;
        font-size: 16px;
    }

    /* --- 4. XỬ LÝ RIÊNG CHO MOBILE (Quan trọng) --- */

    /* Mặc định ẩn nút mobile ở màn hình lớn */
    .mobile-button-box {
        display: none;
    }

    /* Khi màn hình nhỏ hơn 991px (Tablet & Mobile) */
    @media only screen and (max-width: 991px) {

        /* !!! QUAN TRỌNG: ẨN NÚT DESKTOP ĐI ĐỂ KHÔNG BỊ HIỆN 2 NÚT !!! */
        .main-navbar .others-options {
            display: none !important;
        }

        /* Căn chỉnh lại thanh điều hướng mobile */
        .main-responsive-menu {
            position: relative;
            height: 60px;
            display: flex;
            align-items: center;
        }

        /* Chỉnh lại Logo Mobile */
        .main-responsive-nav .logo {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 999;
        }

        .main-responsive-nav .logo img {
            height: 35px !important;
            width: auto !important;
        }

        /* Hiển thị nút mobile */
        .mobile-button-box {
            display: block;
            position: absolute;
            right: 55px;
            /* Cách lề phải để chừa chỗ cho nút Menu */
            top: 50%;
            transform: translateY(-50%);
            z-index: 999;
        }

        /* Style nút trên mobile */
        .default-btn.btn-call-mobile {
            padding: 6px 15px;
            font-size: 13px;
            height: 36px;
        }

        .default-btn.btn-call-mobile i {
            font-size: 16px;
        }

        /* Đẩy nút Menu (Hamburger) của MeanMenu sang phải cùng */
        .mean-container a.meanmenu-reveal {
            left: auto !important;
            right: 0 !important;
            top: 50% !important;
            transform: translateY(-50%);
        }

        .others-options {
            display: none !important;
        }
    }

    /* Màn hình điện thoại rất nhỏ (dưới 375px) */
    @media only screen and (max-width: 375px) {
        .mobile-button-box span {
            display: none;
        }

        .default-btn.btn-call-mobile {
            padding: 5px 10px;
        }
    }
</style>