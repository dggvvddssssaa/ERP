<?php
$path = "/ERP/admin/";

// Hàm kiểm tra active menu đơn giản
function isActive($needle)
{
    // Kiểm tra nếu URL hiện tại chứa từ khóa thì trả về class active
    return strpos($_SERVER['REQUEST_URI'], $needle) !== false ? 'active' : '';
}
?>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">

        <!-- Phần hiển thị trên Mobile (Giữ nguyên của Volt để không lỗi giao diện mobile) -->
        <div class="user-card d-flex d-md-none justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <!-- Bạn có thể thay ảnh user ở đây -->
                    <img src="<?php echo $path; ?>assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="User">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Xin chào</h2>
                    <a href="#" class="btn btn-secondary btn-sm d-inline-flex align-items-center">Sign Out</a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Danh sách Menu chính -->
        <ul class="nav flex-column pt-3 pt-md-0">

            <!-- Logo thương hiệu -->
            <li class="nav-item">
                <a href="<?php echo $path; ?>index.php" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <!-- Thay logo của bạn vào đây -->
                        <img src="<?php echo $path; ?>assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
                    </span>
                    <span class="mt-1 sidebar-text">ERP Admin</span>
                </a>
            </li>

            <!-- Divider -->
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

            <!-- Menu: Tổng quan -->
            <li class="nav-item <?php echo isActive('index.php'); ?>">
                <a href="<?php echo $path; ?>index.php" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-home"></i>
                    </span>
                    <span class="sidebar-text">Tổng quan</span>
                </a>
            </li>

            <!-- Menu: Liên hệ -->
            <li class="nav-item <?php echo isActive('contacts'); ?>">
                <a href="<?php echo $path; ?>contacts/contacts.php" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-users"></i>
                    </span>
                    <span class="sidebar-text">Liên hệ</span>
                </a>
            </li>

            <!-- Menu: Tin tức -->
            <li class="nav-item <?php echo isActive('news'); ?>">
                <a href="<?php echo $path; ?>news/news.php" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-box"></i>
                    </span>
                    <span class="sidebar-text">Tin tức</span>
                </a>
            </li>

            <!-- Menu: Bảng giá -->
            <li class="nav-item <?php echo isActive('pricetables'); ?>">
                <a href="<?php echo $path; ?>pricetables/pricetables.php" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-file-invoice"></i>
                    </span>
                    <span class="sidebar-text">Bảng giá</span>
                </a>
            </li>

            <!-- Menu: Hướng dẫn sử dụng -->
            <li class="nav-item <?php echo isActive('help_center'); ?>">
                <a href="<?php echo $path; ?>help_center/index.php" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-book"></i> <!-- Tôi đổi icon này cho hợp lý hơn -->
                    </span>
                    <span class="sidebar-text">Hướng dẫn sử dụng</span>
                </a>
            </li>
            <!-- Menu: Hướng dẫn sử dụng -->
            <li class="nav-item <?php echo isActive('help_center'); ?>">
                <a href="<?php echo $path; ?>documents/index.php" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-print"></i><!-- Tôi đổi icon này cho hợp lý hơn -->
                    </span>
                    <span class="sidebar-text">Tài liệu</span>
                </a>
            </li>

            <!-- Divider -->
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

            <!-- Menu: Cài đặt -->
            <li class="nav-item <?php echo isActive('settings'); ?>">
                <a href="<?php echo $path; ?>settings.php" class="nav-link"> <!-- Tôi đoán file là settings.php -->
                    <span class="sidebar-icon">
                        <i class="fas fa-cogs"></i>
                    </span>
                    <span class="sidebar-text">Cài đặt</span>
                </a>
            </li>

        </ul>
    </div>
</nav>