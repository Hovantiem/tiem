<?php
$servername = "localhost";
$username = "root"; // Thay đổi nếu bạn có tên người dùng khác
$password = ""; // Thay đổi nếu bạn có mật khẩu khác
$dbname = "dang_nhap_ban_sua";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
