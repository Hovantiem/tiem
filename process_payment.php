<?php
session_start(); // Khởi tạo session

// Bao gồm cấu hình kết nối
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $total_price = isset($_POST['total_price']) ? $_POST['total_price'] : 0;

    // Thực hiện câu lệnh INSERT vào cơ sở dữ liệu
    $stmt = $conn->prepare("INSERT INTO orders (name, email, address, total_price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $name, $email, $address, $total_price);

    if ($stmt->execute()) {
        // Xóa giỏ hàng sau khi thanh toán
        unset($_SESSION['cart']);

        // Hiển thị thông báo thành công
        echo "<h1>Cảm ơn bạn đã mua hàng!</h1>";
        echo "<p>Họ và Tên: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Địa chỉ: $address</p>";
        echo "<p>Tổng số tiền: $" . number_format($total_price, 2) . "</p>";
    } else {
        echo "Đã xảy ra lỗi khi lưu đơn hàng: " . $stmt->error;
    }

    // Đóng câu lệnh và kết nối
    $stmt->close();
    $conn->close();
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
