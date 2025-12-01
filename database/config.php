<?php
// Khai báo hằng số cấu hình
if (!defined('HOST')) define('HOST', 'localhost');
if (!defined('USERNAME')) define('USERNAME', 'root');
if (!defined('PASSWORD')) define('PASSWORD', '');
if (!defined('DATABASE')) define('DATABASE', 'shop_quanao');

// Kết nối MySQLi
$mysqli = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
$conn = mysqli_connect("localhost","root","","shop_quanao");
$mysqli->set_charset("utf8");

// Kiểm tra kết nối
if ($mysqli->connect_errno) {
    echo "Không kết nối được MYSQLi: " . $mysqli->connect_error;
    exit();
}
?>
