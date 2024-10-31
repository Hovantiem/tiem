<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
    <style>
        .carousel-item img {
            height: 300px;
            object-fit: cover;
        }

        .grid-item {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            text-align: center;
        }

        .brand-image {
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        /* Đặt phông nền cho toàn bộ trang */
        body {
            background-image: url('img/3d0.jpg');
            background-size: cover;
            /* Hình nền phủ toàn bộ trang */
            background-position: center;
            /* Căn giữa hình ảnh */
            background-repeat: no-repeat;
            /* Không lặp lại hình ảnh */
            background-attachment: fixed;
            /* Hình nền cố định khi cuộn trang */
            height: 100vh;
            /* Chiều cao bằng 100% chiều cao màn hình */
            margin: 0;
        }
    </style>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">mời bạn nhập thông tin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container p-1">
                        <div class="modal-body">
                            <?php
                            session_start(); // Khởi tạo session

                            if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
                                $user_id = $_SESSION['user_id'];
                                $username = $_SESSION['username'];
                                echo "User ID: " . htmlspecialchars($user_id) . "<br>";
                                echo "Username: " . htmlspecialchars($username);
                            } else {
                                echo "Bạn chưa đăng nhập.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="products.php">Giỏ Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            TAP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">MAC BOX</a>
                            </li>
                            <li>
                                <a href="iphone.php">Iphone</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mx-2">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">
                    <i class="fa-solid fa-image-portrait"></i>
                </button>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-2">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">

                        <div id="carouselExampleAutoplay" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/205.jpg" class="d-block w-100" alt="Slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/400.jpg" class="d-block w-100" alt="Slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/300.jpg" class="d-block w-100" alt="Slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/lt3.jpg" class="d-block w-100" alt="Slide 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/900.webp" class="d-block w-100" alt="Slide 5">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleAutoplay" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleAutoplay" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <div class="row border border-3">
                            <div class="col-12 ms-2 p-3">
                                <h4 class="text-center fst-italic">Top sản phẩm</h4>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active"
                                        aria-current="true">
                                        TOP 4 Hãng Hàng Đầu
                                    </a>
                                    <a href="iphone.php" class="list-group-item list-group-item-action">Iphone</a>
                                    <a href="laptop.php" class="list-group-item list-group-item-action">Laptop</a>
                                    <a href="dongho.php" class="list-group-item list-group-item-action">wach</a>
                                    <a href="phukien.php" class="list-group-item list-group-item-action">Phụ Kiện</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="border border-4 mt-4">
            <h4 class="text-center mt-1 bg-warning">
                <p class="text-uppercase">sản phẩm nổi bật</p>
            </h4>
            <div class="container">
                <div class="row mt-3">
                    <!-- Cột bên trái 1-->
                    <div class="col-6">
                        <div class="row">
                            <h6 class="text-center mt-1 bg-success">
                                <p class="text-uppercase">IPHONE</p>
                            </h6>
                            <!-- Sản phẩm 1 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/21.png" class="card-img-top" alt="Product 1">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Iphone 12 PRM</h5>
                                        <p class="card-text"><strong>$19.99</strong></p>
                                        <a href="https://www.thegioididong.com/dtdd-apple-iphone-16-series" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 2 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/321.jpg" class="card-img-top" alt="Product 2">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Iphone 15 PRM</h5>
                                        <p class="card-text"><strong>$29.99</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 3 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/789.webp" class="card-img-top" alt="Product 3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Iphone 14 PRM</h5>
                                        <p class="card-text"><strong>$29.99</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 4 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/123.webp" class="card-img-top" alt="Product 4">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Iphone XSM</h5>
                                        <p class="card-text"><strong>$29.99</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cột bên phải 1-->
                    <div class="col-6">
                        <div class="row">
                            <h6 class="text-center mt-1 bg-light">
                                <p class="text-uppercase">LAPTOP</p>
                            </h6>
                            <!-- Sản phẩm 1 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/lt1.jpg" class="card-img-top" alt="Product 1">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">DELL 5707</h5>
                                        <p class="card-text"><strong>$540</strong></p>
                                        <a href="https://www.thegioididong.com/dtdd-apple-iphone-16-series" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 2 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/lt2.jpg" class="card-img-top" alt="Product 2">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">MAC-7</h5>
                                        <p class="card-text"><strong>$1200</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 3 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/lt3.jpg" class="card-img-top" alt="Product 3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">ASUS-9029</h5>
                                        <p class="card-text"><strong>$1870</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 4 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/lt4.webp" class="card-img-top" alt="Product 4">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">ASUS-9029 PLUS</h5>
                                        <p class="card-text"><strong>$2333</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row border-bottom">
                    <!-- Cột bên trái 2-->
                    <div class="col-6">
                        <div class="row">
                            <h6 class="text-center mt-1 bg-primary">
                                <p class="text-uppercase">WARCH</p>
                            </h6>
                            <!-- Sản phẩm 1 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/dh1.jpg" class="card-img-top" alt="Product 1">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">SERIES-4</h5>
                                        <p class="card-text"><strong>$1480</strong></p>
                                        <a href="https://www.thegioididong.com/dtdd-apple-iphone-16-series" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 2 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/dh2.jpeg" class="card-img-top" alt="Product 2">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">DÂY WC TITAN</h5>
                                        <p class="card-text"><strong>$56</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 3 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/t5000.jpg" class="card-img-top" alt="Product 3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">WC-9</h5>
                                        <p class="card-text"><strong>$980</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 4 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/dh4.jpg" class="card-img-top" alt="Product 4">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">WC-3</h5>
                                        <p class="card-text"><strong>$390</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cột bên phải -->
                    <div class="col-6">
                        <div class="row">
                            <h6 class="text-center mt-1 bg-info">
                                <p class="text-uppercase">PHỤ KIỆN</p>
                            </h6>
                            <!-- Sản phẩm 1 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/pk1.jpg" class="card-img-top" alt="Product 1">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">AIRPODS PRO</h5>
                                        <p class="card-text"><strong>$53</strong></p>
                                        <a href="https://www.thegioididong.com/dtdd-apple-iphone-16-series" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 2 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/pk2.jpg" class="card-img-top" alt="Product 2">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">CAMERA 360-180</h5>
                                        <p class="card-text"><strong>$71</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 3 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/pk4.jpg" class="card-img-top" alt="Product 3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">TAI NGHE HAVIT</h5>
                                        <p class="card-text"><strong>$760</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sản phẩm 4 -->
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card">
                                    <img src="img/pk3.png" class="card-img-top" alt="Product 4">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">POD GIÁNG SING</h5>
                                        <p class="card-text"><strong>$32</strong></p>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>