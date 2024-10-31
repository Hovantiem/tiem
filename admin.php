<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin - Quản lý sản phẩm</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#add-product-form').on('submit', function(event) {
                event.preventDefault(); // Ngăn chặn hành vi gửi form mặc định

                $.ajax({
                    url: 'add_product_process.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('Sản phẩm đã được thêm thành công!');
                        window.location.href = 'iphone.php'; // Tải lại trang sản phẩm
                    },
                    error: function() {
                        alert('Đã xảy ra lỗi khi thêm sản phẩm.');
                    }
                });
            });

            $('#delete-product-form').on('submit', function(event) {
                event.preventDefault(); // Ngăn chặn hành vi gửi form mặc định

                $.ajax({
                    url: 'delete_product_process.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('Sản phẩm đã được xóa thành công!');
                        window.location.href = 'iphone.php'; // Tải lại trang sản phẩm
                    },
                    error: function() {
                        alert('Đã xảy ra lỗi khi xóa sản phẩm.');
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="container mt-4">
        <h2>Thêm sản phẩm</h2>
        <form id="add-product-form">
            <div class="mb-3">
                <label for="product_name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="mb-3">
                <label for="product_price" class="form-label">Giá sản phẩm</label>
                <input type="number" step="0.01" class="form-control" id="product_price" name="product_price" required>
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">URL hình ảnh</label>
                <input type="text" class="form-control" id="image_url" name="image_url" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>

        <h2 class="mt-4">Xóa sản phẩm</h2>
        <form id="delete-product-form">
            <div class="mb-3">
                <label for="product_id" class="form-label">ID sản phẩm</label>
                <input type="number" class="form-control" id="product_id" name="product_id" required>
            </div>
            <button type="submit" class="btn btn-danger">Xóa sản phẩm</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
