<?php
session_start(); // Khởi tạo session

// Kiểm tra nếu dữ liệu POST đã được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ biểu mẫu
    $Username = $_POST['username'];

    // Tạo kết nối
    $conn = new mysqli('localhost', 'root', '', 'dang_nhap_ban_sua');
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Chuẩn bị câu truy vấn và thực thi
    $stmt = $conn->prepare("SELECT user_id, username FROM users WHERE username = ?");
    $stmt->bind_param("s", $Username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Lấy thông tin người dùng
        $row = $result->fetch_assoc();
        
        // Lưu thông tin vào session
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        
        // Chuyển hướng đến trang home.php
        header('Location: homedangnhap.php');
        exit();
    } else {
        echo "Tên người dùng không tồn tại";
    }

    // Đóng câu truy vấn và kết nối
    $stmt->close();
    $conn->close();
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
