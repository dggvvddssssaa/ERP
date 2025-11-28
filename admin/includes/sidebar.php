<?php
$path = "/ERP/admin/";
?>
<div class="sidebar p-3" style="width: 250px; flex-shrink: 0; min-height: 100vh;">
    <h5 class="text-white mb-3">Menu</h5>
    <ul class="list-unstyled">
        <li><a href="<?php echo $path; ?>index.php"><i class="fas fa-home me-2"></i> Tổng quan</a></li>
        <li><a href="<?php echo $path; ?>contacts/contacts.php"><i class="fas fa-users me-2"></i>Liên hệ</a></li>
        <li><a href="<?php echo $path; ?>news/news.php"><i class="fas fa-box me-2"></i>Tin tức</a></li>
        <li><a href="<?php echo $path; ?>pricetables/pricetables.php"><i class="fas fa-file-invoice me-2"></i>Bảng giá</a></li>
        <li><a href="<?php echo $path; ?>help_center/index.php"><i class="fas fa-file-invoice me-2"></i>Hưỡng dẫn sử dụng</a></li>
        <li><a href="<?php echo $path; ?>"><i class="fas fa-cogs me-2"></i> Cài đặt</a></li>
    </ul>
</div>