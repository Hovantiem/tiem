<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu và loại bỏ khoảng trắng
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $repassword = trim($_POST['repassword']);

    // Kiểm tra nếu mật khẩu và xác nhận mật khẩu không khớp
    if ($password !== $repassword) {
        echo "Mật khẩu không khớp, vui lòng nhập lại.";
        echo "<meta http-equiv='refresh' content='3;url=trangdky.php'>";
        exit();
    }

    // Mã hóa mật khẩu
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Tạo kết nối
    $conn = new mysqli('localhost', 'root', '', 'dang_nhap_ban_sua');
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Chuẩn bị câu truy vấn để kiểm tra tên người dùng
    $stmt = $conn->prepare("SELECT username FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Tên người dùng đã tồn tại
        echo "Tài khoản đã tồn tại.";
        echo "<meta http-equiv='refresh' content='3;url=trangdky.php'>";
    } else {
        // Tên người dùng không tồn tại, thực hiện đăng ký
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);
        if ($stmt->execute()) {
            // Đăng ký thành công
            echo "Đăng ký thành công.";
            echo "<meta http-equiv='refresh' content='3;url=homechinh.php'>";
        } else {
            // Lỗi khi thực hiện đăng ký
            echo "Đã xảy ra lỗi, vui lòng thử lại.";
            echo "<meta http-equiv='refresh' content='3;url=trangdky.php'>";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
