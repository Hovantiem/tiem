<?php
// add_product_process.php
session_start();

// Kiểm tra nếu dữ liệu POST đã được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $image_url = $_POST['image_url'];

    // Tạo kết nối đến cơ sở dữ liệu
    $conn = new mysqli('localhost', 'root', '', 'dang_nhap_ban_sua');
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Chuẩn bị câu truy vấn và thực thi
    $stmt = $conn->prepare("INSERT INTO products (product_name, product_price, image_url) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $product_name, $product_price, $image_url);

    if ($stmt->execute()) {
        echo "Sản phẩm đã được thêm thành công!";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng câu truy vấn và kết nối
    $stmt->close();
    $conn->close();
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
