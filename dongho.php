<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>IPHONE</title>
</head>

<body>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            IPHONE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a href="#">IPHON 16</a>
                            </li>
                            <li>
                                <a href="#">IPHONE 15</a>
                            </li>
                            <li>
                                <a href="#">IPHONE 14</a>
                            </li>
                            <li>
                                <a href="#">IPHONE 13</a>
                            </li>
                            <li>
                                <a href="#">IPHONE 12</a>
                            </li>
                            <li>
                                <a href="#">IPHONE 11</a>
                            </li>
                            <li>
                                <a href="#">IPHONE X</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">LAPTOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">WARCH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">PHỤ KIỆN</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- Sản phẩm 1 -->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <a href="https://www.thegioididong.com/dtdd-apple-iphone-16-series">
                                <img src="img/pk1.jpg" class="card-img-top" alt="AIRPODS PRO image">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">AIRPODS PRO</h5>
                                <p class="card-text"><strong>$53</strong></p>
                                <a href="#" class="btn btn-primary" onclick="addToCart('AIRPODS PRO', 53)">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sản phẩm 2 -->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <a href="#">
                                <img src="img/pk2.jpg" class="card-img-top" alt="CAMERA 360-180 image">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">CAMERA 360-180</h5>
                                <p class="card-text"><strong>$71</strong></p>
                                <a href="#" class="btn btn-primary" onclick="addToCart('CAMERA 360-180', 71)">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sản phẩm 3 -->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <a href="#">
                                <img src="img/pk4.jpg" class="card-img-top" alt="TAI NGHE HAVIT image">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">TAI NGHE HAVIT</h5>
                                <p class="card-text"><strong>$760</strong></p>
                                <a href="#" class="btn btn-primary" onclick="addToCart('TAI NGHE HAVIT', 760)">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sản phẩm 4 -->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <a href="#">
                                <img src="img/pk3.png" class="card-img-top" alt="POD GIÁNG SING image">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">POD GIÁNG SING</h5>
                                <p class="card-text"><strong>$32</strong></p>
                                <a href="#" class="btn btn-primary" onclick="addToCart('POD GIÁNG SING', 32)">Thêm vào giỏ hàng</a>
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