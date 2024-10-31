<?php
session_start(); // Khởi tạo session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';
    $product_price = isset($_POST['product_price']) ? $_POST['product_price'] : '';
    $image_url = isset($_POST['image_url']) ? $_POST['image_url'] : '';

    // Tạo kết nối
    $conn = new mysqli('localhost', 'root', '', 'dang_nhap_ban_sua');

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Chuẩn bị câu lệnh INSERT vào cơ sở dữ liệu
    $stmt = $conn->prepare("INSERT INTO cart (product_id, product_name, product_price, image_url) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Lỗi chuẩn bị câu lệnh: " . $conn->error);
    }

    // Liên kết tham số và thực thi câu lệnh
    $stmt->bind_param("ssss", $product_id, $product_name, $product_price, $image_url);
    if (!$stmt->execute()) {
        die("Lỗi thực thi câu lệnh: " . $stmt->error);
    }

    // Đóng câu lệnh và kết nối
    $stmt->close();
    $conn->close();

    // Chuyển hướng đến trang giỏ hàng
    header("Location: cart.php");
    exit();
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
