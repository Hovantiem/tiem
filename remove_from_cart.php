<?php
session_start();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Tạo kết nối
    $conn = new mysqli('localhost', 'root', '', 'dang_nhap_ban_sua');

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Xóa sản phẩm khỏi cơ sở dữ liệu
    $stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
    if ($stmt === false) {
        die("Lỗi chuẩn bị câu lệnh: " . $conn->error);
    }
    $stmt->bind_param("i", $id);
    if (!$stmt->execute()) {
        die("Lỗi thực thi câu lệnh: " . $stmt->error);
    }

    // Đóng câu lệnh và kết nối
    $stmt->close();
    $conn->close();

    // Chuyển hướng về trang giỏ hàng
    header("Location: cart.php");
    exit();
} else {
    echo "ID không hợp lệ.";
}
?>