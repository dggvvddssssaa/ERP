<?php
require_once 'db_connection.php';

if ($conn) {
    echo "<h1>✅ Kết nối thành công!</h1>";
    echo "Database đang dùng: " . "erp";
} else {
    echo "<h1>❌ Kết nối thất bại</h1>";
}
