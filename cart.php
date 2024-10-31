<?php
session_start(); // Khởi tạo session

// Khởi tạo biến tổng số tiền
$total_price = 0;

// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'dang_nhap_ban_sua');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Truy vấn để lấy dữ liệu giỏ hàng từ cơ sở dữ liệu
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Giỏ hàng</h1>
        <?php if ($result->num_rows > 0): ?>
            <div class="row">
                <?php while ($item = $result->fetch_assoc()): ?>
                    <div class="col-12 col-md-4 col-lg-2 mb-4">
                        <div class="card">
                            <img src="<?php echo htmlspecialchars($item['image_url']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['product_name']); ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo htmlspecialchars($item['product_name']); ?></h5>
                                <p class="card-text"><strong>$<?php echo htmlspecialchars($item['product_price']); ?></strong></p>
                                <a href="remove_from_cart.php?id=<?php echo $item['id']; ?>" class="btn btn-danger">Xóa</a>
                            </div>
                        </div>
                    </div>
                    <?php $total_price += $item['product_price']; ?>
                <?php endwhile; ?>
            </div>
            <div class="alert alert-info" role="alert">
                <h4>Tổng số tiền: $<?php echo number_format($total_price, 2); ?></h4>
            </div>

            <!-- Form Thanh Toán -->
            <h2>Thanh toán</h2>
            <form action="process_payment.php" method="post">
                <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Thanh toán</button>
            </form>

        <?php else: ?>
            <p>Giỏ hàng trống</p>
        <?php endif; ?>

        <a href="index.php" class="btn btn-secondary mt-4">Quay lại trang chính</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Đóng kết nối
$conn->close();
?>