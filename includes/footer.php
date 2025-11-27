<!-- CSS XỬ LÝ RIÊNG CHO FOOTER (STYLE MỚI) -->
<style>
    /* 1. Thiết lập chung cho Footer Area */
    .footer-area {
        background-color: #0a183d !important;
        /* Màu nền theo mẫu */
        color: #d1d5db !important;
        /* Màu chữ xám sáng (tương đương text-gray-300) */
        padding-top: 64px;
        /* pt-16 */
        padding-bottom: 32px;
        /* pb-8 */
        font-family: sans-serif;
    }

    .footer-area a {
        text-decoration: none;
        color: #d1d5db !important;
        transition: all 0.3s ease;
    }

    .footer-area a:hover {
        color: #ff5722 !important;
        /* Màu cam chủ đạo (hoặc đổi thành màu khác tùy ý) */
        padding-left: 5px;
        /* Hiệu ứng đẩy nhẹ khi hover */
    }

    /* 2. Tiêu đề các cột */
    .footer-widget-title {
        color: #ffffff !important;
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 20px;
        display: block;
    }

    /* 3. Danh sách liên kết */
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    /* 4. Phần thông tin công ty bên dưới (Bottom Section) */
    .footer-bottom-info {
        border-top: 1px solid #374151;
        /* Màu đường kẻ (border-gray-700) */
        padding-top: 32px;
        margin-top: 48px;
    }

    .footer-logo {
        height: 48px;
        /* Chiều cao logo */
        width: auto;
        margin-bottom: 24px;
        display: block;
    }

    .company-name {
        color: #ffffff !important;
        font-weight: 700;
        margin-bottom: 8px;
        display: block;
    }

    .info-text p {
        margin-bottom: 8px;
        font-size: 14px;
        line-height: 1.5;
        color: #d1d5db;
    }

    .copyright-text {
        color: #9ca3af !important;
        /* Màu xám đậm hơn chút cho phần bản quyền */
        font-size: 12px;
        margin-top: 24px;
        line-height: 1.6;
    }

    .copyright-text a {
        color: #ff5722 !important;
        /* Màu highlight cho link trong bản quyền */
    }

    .copyright-text a:hover {
        text-decoration: underline;
    }
</style>

<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <!-- PHẦN 1: GRID 4 CỘT LIÊN KẾT -->
        <div class="row">
            <!-- Cột 1: Thông Tin Cần Biết -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h3 class="footer-widget-title">Thông Tin Cần Biết</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo $path; ?>/thong-tin/dieu-khoan-su-dung/">Điều Khoản Sử Dụng</a></li>
                    <li><a href="<?php echo $path; ?>/thong-tin/chinh-sach-bao-mat">Chính Sách Bảo Mật</a></li>
                    <li><a href="<?php echo $path; ?>/thong-tin/quy-dinh-chung/">Quy Định Chung</a></li>
                    <li><a href="<?php echo $path; ?>/thong-tin/chuc-nang-phat-sinh/">Chức Năng Phát Sinh</a></li>
                    <li><a href="<?php echo $path; ?>/thong-tin/bao-tri-website/">Bảo Hành, Bảo Trì</a></li>
                </ul>
            </div>
            <!-- Cột 2: Về Chúng Tôi -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h3 class="footer-widget-title">Về Chúng Tôi</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo $path; ?>/gioi-thieu/">Giới Thiệu</a></li>
                    <li><a href="<?php echo $path; ?>/tin-tuc/">Tin Tức</a></li>
                    <li><a href="#">Hồ Sơ</a></li>
                    <li><a href="#">Tuyển Dụng</a></li>
                    <li><a href="<?php echo $path; ?>/tai-lieu/">Tài Liệu</a></li>
                </ul>
            </div>

            <!-- Cột 3: Giải Pháp ERP -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h3 class="footer-widget-title">Giải Pháp ERP</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo $path; ?>/tinh-nang/">Tính Năng</a></li>
                    <li><a href="<?php echo $path; ?>/bang-gia/">Bảng Giá</a></li>
                    <li><a href="<?php echo $path; ?>/demo/">Demo Sản Phẩm</a></li>
                    <li><a href="<?php echo $path; ?>/giai-phap/giai-phap-toan-dien/">Giải Pháp Toàn Diện</a></li>
                    <li><a href="<?php echo $path; ?>/giai-phap/tuy-chinh-va-mo-rong">Tùy Chỉnh &amp; Mở Rộng</a></li>
                </ul>
            </div>

            <!-- Cột 4: Hỗ Trợ -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h3 class="footer-widget-title">Hỗ Trợ</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo $path; ?>/huong-dan-su-dung/">Hướng Dẫn Sử Dụng</a></li>
                    <li><a href="<?php echo $path; ?>/cau-hoi-thuong-gap/">Câu Hỏi Thường Gặp</a></li>
                    <li><a href="<?php echo $path; ?>/ho-tro-ky-thuat/">Hỗ Trợ Kỹ Thuật</a></li>
                    <li><a href="<?php echo $path; ?>/lien-he/">Liên Hệ Tư Vấn</a></li>
                </ul>
            </div>
        </div>

        <!-- PHẦN 2: THÔNG TIN CÔNG TY (LOGO & ĐỊA CHỈ) -->
        <div class="footer-bottom-info">
            <div class="row">
                <div class="col-12">
                    <!-- Logo -->
                    <a href="<?php echo $path; ?>/">
                        <!-- Lưu ý: Đảm bảo đường dẫn ảnh đúng hoặc dùng logo trắng -->
                        <img src="<?php echo $path; ?>/assets/img/logo2.svg" alt="Truong Thanh ERP Logo" class="footer-logo">
                    </a>

                    <!-- Thông tin liên hệ -->
                    <div class="info-text">
                        <span class="company-name">CÔNG TY TNHH TRUYỀN THÔNG VÀ CÔNG NGHỆ TRƯỜNG THÀNH</span>
                        <p>Giấy phép kinh doanh số: 0110999708</p>
                        <p>Địa Chỉ: Số 16 ngõ 42, Trung Hòa, Cầu Giấy, Hà Nội</p>
                        <p>Hotline: 024.2212.1489</p>
                        <p>Email: contact@truongthanhweb.com</p>
                    </div>

                    <!-- Bản quyền & Pháp lý -->
                    <div class="copyright-text">
                        <p>Bản quyền thuộc về Trường Thành Web.</p>
                        <p>
                            Sử dụng nội dung ở trang này và dịch vụ tại Trường Thành Web có nghĩa là bạn đồng ý với
                            <a href="<?php echo $path; ?>/thong-tin/dieu-khoan-su-dung/">Điều Khoản Sử Dụng</a> và
                            <a href="<?php echo $path; ?>/thong-tin/chinh-sach-bao-mat">Chính Sách Bảo Mật</a> của chúng tôi.
                            Giấy phép kinh doanh số 0110999708 bởi Bộ Tài Chính.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->