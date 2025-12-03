<?php
session_start();
session_unset(); // Thêm dòng này để xóa sạch biến session
session_destroy();
header("Location: login.php");
exit();
