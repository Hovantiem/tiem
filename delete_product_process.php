<?php
// delete_product_process.php
session_start();

// Kiểm tra nếu dữ liệu POST đã được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];

    // Tạo kết nối đến cơ sở dữ liệu
    $conn = new mysqli('localhost', 'root', '', 'dang_nhap_ban_sua');
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Chuẩn bị câu truy vấn và thực thi
    $stmt = $conn->prepare("DELETE FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);

    if ($stmt->execute()) {
        echo "Sản phẩm đã được xóa thành công!";
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
