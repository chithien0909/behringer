<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Behringer</title>
    <!--Fontawesome 5.8.1-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Bootstrap link    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="js/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--Customs style    -->
    <link rel="stylesheet" href="./scss/main.css">
</head>
<body>
    <div class="container">
        <div class="site-header">
            <div class="header">
                <div class="left-header">
                    <img class="logo" src="./images/logo.svg">
                </div>
                <div class="right-header">
                    <div class="search">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">
                                    <img style="width: 22px;height: 22px" src="./images/search.svg" alt="Search">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="login">
                        <a href="#">
                            <img style="width: 10px;height: 10px;" src="./images/people.svg" alt="Login">Đăng nhập
                        </a>
                    </div>
                    <div class="cart">
                        <a href="#">
                            <img style="width: 10px; height: 10px" src="./images/cart.svg" alt="Cart">Giỏ hàng
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="f-menu">
        <div class="container">
            <div class="site-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="left-header navbar-brand" href="#">
                        <img class="logo" src="./images/logo.svg">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav w-100">
                            <a class="nav-item nav-link" href="#">mixers</a>
                            <a class="nav-item nav-link" href="#">poweramplifier</a>
                            <a class="nav-item nav-link" href="#">loudspeaker system</a>
                            <a class="nav-item nav-link" href="#">micro</a>
                            <a class="nav-item nav-link" href="#">signal processors</a>
                            <a class="nav-item nav-link" href="#">accessories</a>
                            <a class="nav-item nav-link" href="#">wireless microphone systems</a>
                            <a class="nav-item nav-link" href="#">crossovers</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="site-header">
            <div class="info">
                <div>
                    <img style="width: 21px;height: 38px" src="./images/dolar.svg" alt="Dolar">
                    <div class="text">
                        <h4>giá cả tốt nhất thị trường</h4>
                        <p>Chúng tôi cam kết hàng chính hãng với giá cả tốt nhất</p>
                    </div>
                </div>
                <div>
                    <img style="width: 48px;height: 32px" src="./images/transport.svg" alt="transport">
                    <div class="text">
                        <h4>vận chuyển tận nơi</h4>
                        <p>Chính sách vận chuyển nhanh chóng thuận tiện</p>
                    </div>
                </div>
                <div>
                    <img style="width: 37px;height: 38px" src="./images/repair.svg" alt="Repair">
                    <div class="text">
                        <h4>bảo hành chu đáo</h4>
                        <p>Thủ tục bào hành nhanh chóng, gọn nhẹ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="site-content">
            <div class="hot-product">
                <div class="top-content">
                    <div class="title">
                        <h2><img style="width: 16px;height: 16px" src="./images/speaker.svg" alt="Speaker icon"> sản phẩm bán chạy</h2>
                    </div>
                    <div class="filter">
                        <div class="filter-icon">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <ul class="filter-content">
                            <li data-sort="power_amplifiers" class="active">Power amplifiers</li>
                            <li data-sort="loudspeaker_systems" >loudspeaker systems</li>
                            <li data-sort="signal_processors">signal processors</li>
                        </ul>
                    </div>
                </div>
                <div id="power_amplifiers" class="active filter-item row">
                    <div class="col-md-6 fadeIn animated">
                        <div class="box">
                            <img class="img-full" src="./images/img_1.png" alt="Image">
                            <div class="button">
                                <button class="btn btn-primary">tìm hiểu thêm</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 fadeIn animated ">
                        <div class="box">
                            <div class="img-top">
                                <img src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 fadeIn animated ">
                        <div class="box">
                            <div class="img-top">
                                <img src="./images/img_3.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="loudspeaker_systems" class="filter-item row">
                    <div class="col-md-6 fadeIn animated">
                        <div class="box">
                            <img class="img-full" src="./images/img_1.png" alt="Image">
                            <div class="button">
                                <button class="btn btn-primary">tìm hiểu thêm</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animated fadeIn ">
                        <div class="box">
                            <div class="img-top">
                                <img src="./images/img_6.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animated fadeIn ">
                        <div class="box">
                            <div class="img-top">
                                <img src="./images/img_6.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="signal_processors" class="filter-item row">
                    <div class="col-md-6 animated fadeIn">
                        <div class="box">
                            <img class="img-full" src="./images/img_1.png" alt="Image">
                            <div class="button">
                                <button class="btn btn-primary">tìm hiểu thêm</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animated fadeIn ">
                        <div class="box">
                            <div class="img-top">
                                <img src="./images/img_5.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animated fadeIn ">
                        <div class="box">
                            <div class="img-top">
                                <img src="./images/img_5.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content">
            <div  class="product-1">
                <div class="top-content">
                    <div class="title">
                        <h2>
                            <img style="width: 16px;height: 16px" src="./images/speaker.svg" alt="Speaker icon">
                            loudspeaker systems
                        </h2>
                    </div>
                </div>
                <div class="slick-slider-1">
                    <div class="row slide-content">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-left">
                                            <img src="./images/img_6.png" alt="Image">
                                            <div class="favorite">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="content">
                                                <h4 class="title">Amplifier Behringer iNUKE</h4>
                                                <p class="category">NU3000DSP</p>
                                                <div class="ranking">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="fas fa-star fa-star-empty"></i>
                                                    <span class="counter">(2)</span>
                                                </div>
                                                <div class="text">
                                                    <p>• Ultra-Lightweight</p>
                                                    <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                                    <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                                </div>
                                                <div class="price">
                                                    <p>10.920.000<span>VND</span></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-secondary">mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-left">
                                            <img src="./images/img_3.png" alt="Image">
                                            <div class="favorite">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="content">
                                                <h4 class="title">Amplifier Behringer iNUKE</h4>
                                                <p class="category">NU3000DSP</p>
                                                <div class="ranking">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="fas fa-star fa-star-empty"></i>
                                                    <span class="counter">(2)</span>
                                                </div>
                                                <div class="text">
                                                    <p>• Ultra-Lightweight</p>
                                                    <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                                    <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                                </div>
                                                <div class="price">
                                                    <p>10.920.000<span>VND</span></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-secondary">mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-left">
                                            <img src="./images/img_4.png" alt="Image">
                                            <div class="favorite">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="content">
                                                <h4 class="title">Amplifier Behringer iNUKE</h4>
                                                <p class="category">NU3000DSP</p>
                                                <div class="ranking">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="fas fa-star fa-star-empty"></i>
                                                    <span class="counter">(2)</span>
                                                </div>
                                                <div class="text">
                                                    <p>• Ultra-Lightweight</p>
                                                    <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                                    <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                                </div>
                                                <div class="price">
                                                    <p>10.920.000<span>VND</span></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-secondary">mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-left">
                                            <img src="./images/img_5.png" alt="Image">
                                            <div class="favorite">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="content">
                                                <h4 class="title">Amplifier Behringer iNUKE</h4>
                                                <p class="category">NU3000DSP</p>
                                                <div class="ranking">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="fas fa-star fa-star-empty"></i>
                                                    <span class="counter">(2)</span>
                                                </div>
                                                <div class="text">
                                                    <p>• Ultra-Lightweight</p>
                                                    <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                                    <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                                </div>
                                                <div class="price">
                                                    <p>10.920.000<span>VND</span></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-secondary">mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row slide-content">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-left">
                                            <img src="./images/img_6.png" alt="Image">
                                            <div class="favorite">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="content">
                                                <h4 class="title">Amplifier Behringer iNUKE</h4>
                                                <p class="category">NU3000DSP</p>
                                                <div class="ranking">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="fas fa-star fa-star-empty"></i>
                                                    <span class="counter">(2)</span>
                                                </div>
                                                <div class="text">
                                                    <p>• Ultra-Lightweight</p>
                                                    <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                                    <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                                </div>
                                                <div class="price">
                                                    <p>10.920.000<span>VND</span></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-secondary">mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-left">
                                            <img src="./images/img_3.png" alt="Image">
                                            <div class="favorite">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="content">
                                                <h4 class="title">Amplifier Behringer iNUKE</h4>
                                                <p class="category">NU3000DSP</p>
                                                <div class="ranking">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="fas fa-star fa-star-empty"></i>
                                                    <span class="counter">(2)</span>
                                                </div>
                                                <div class="text">
                                                    <p>• Ultra-Lightweight</p>
                                                    <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                                    <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                                </div>
                                                <div class="price">
                                                    <p>10.920.000<span>VND</span></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-secondary">mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-left">
                                            <img src="./images/img_4.png" alt="Image">
                                            <div class="favorite">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="content">
                                                <h4 class="title">Amplifier Behringer iNUKE</h4>
                                                <p class="category">NU3000DSP</p>
                                                <div class="ranking">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="fas fa-star fa-star-empty"></i>
                                                    <span class="counter">(2)</span>
                                                </div>
                                                <div class="text">
                                                    <p>• Ultra-Lightweight</p>
                                                    <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                                    <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                                </div>
                                                <div class="price">
                                                    <p>10.920.000<span>VND</span></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-secondary">mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="img-left">
                                            <img src="./images/img_5.png" alt="Image">
                                            <div class="favorite">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body">
                                            <div class="content">
                                                <h4 class="title">Amplifier Behringer iNUKE</h4>
                                                <p class="category">NU3000DSP</p>
                                                <div class="ranking">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="fas fa-star fa-star-empty"></i>
                                                    <span class="counter">(2)</span>
                                                </div>
                                                <div class="text">
                                                    <p>• Ultra-Lightweight</p>
                                                    <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                                    <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                                </div>
                                                <div class="price">
                                                    <p>10.920.000<span>VND</span></p>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-secondary">mua hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content">
            <div class="product-2">
                <div class="top-content">
                    <div class="title">
                        <h2>
                            <img style="width: 16px;height: 16px" src="./images/speaker.svg" alt="Speaker icon">
                            loudspeaker systems
                        </h2>
                    </div>
                </div>
                <div class="row slick-slider">
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="img-top">
                                <img class="img-top" src="./images/img_2.png" alt="Image">
                                <div class="favorite">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    <h4 class="title">Amplifier Behringer iNUKE</h4>
                                    <p class="category">NU3000DSP</p>
                                    <div class="ranking">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="fas fa-star fa-star-empty"></i>
                                        <span class="counter">(2)</span>
                                    </div>
                                    <div class="text">
                                        <p>• Ultra-Lightweight</p>
                                        <p>• High-Density 3000-Watt Power Amplifier with DSP Control and USB Interface</p>
                                        <p>• Delivers 2 x 1500 Watts into 2 Ohms</p>
                                    </div>
                                    <div class="price">
                                        <p>10.920.000<span>VND</span></p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-secondary">mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="email-notify">
            <div class="container">
                <div class="site-footer">
                    <div class="content">
                        <div class="text">
                            <p>Để lại email của bạn để nhận được những tin khuyến mãi hấp dẫn từ chúng tôi</p>
                        </div>
                        <div class="form-email">
                            <div class="input-group mb-3">
                                <input type="text" class="email-input form-control" placeholder="Địa chỉ emal của bạn"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn" type="button">
                                        <img style="width: 16px;height: 13px" src="./images/icon_1.svg" alt="Icon">
                                        đăng ký nhận tin
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div class="site-footer">
                    <div class="row">
                        <div class="col-md-2 col-sm-6">
                            <div class="col-item">
                                <h4 class="title">Hướng dẫn khách hàng</h4>
                                <a href="#">Hướng dẫn mua hàng</a>
                                <a href="#">Hướng dẫn mua hàng online</a>
                                <a href="#">Hướng dẫn thanh toán</a>
                                <a href="#">Hướng dẫn bảo hành</a>
                            </div>
                            <div class="col-item">
                                <h4 class="title">chính sách  ưu đãi</h4>
                                <a href="#">Chính sách bảo hành</a>
                                <a href="#">Chính sách vận chuyển giao nhận</a>
                                <a href="#">Chính sách đổi trả hàng</a>
                                <a href="#">Bảo mật thông tin khách hàng</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="col-item">
                                <h4 class="title">thông tin công ty</h4>
                                <a href="#">Giới thiệu công ty</a>
                                <a href="#">Quan điểm kinh doanh</a>
                                <a href="#">Hệ thống siêu thị</a>
                            </div>
                            <div class="col-item">
                                <h4 class="title">thông tin hỗ trợ</h4>
                                <a href="#">Các đường dây nóng</a>
                                <a href="#">Tuyển dụng</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-item">
                                <h5 class="sub-title">BEHRINGER AUDIO EQUIPMENT</h5>
                                <h4 class="title">CÔNG TY TNHH ÂM THANH TRUNG CHÍNH</h4>
                            </div>
                            <div class="col-item">
                                <h4 class="title">chi nhánh 1</h4>
                                <p>Địa chỉ: 488 Trần Khát Chân, Phường Phố Huế, Q. Hai Bà Trưng, Hà Nội</p>
                                <p>Điện thoại : 024.36 36 60 60 - 024 36 28 60 33</p>
                                <p>Mobile: 0902.188.722 </p>
                            </div>
                            <div class="col-item">
                                <h4 class="title">chi nhánh 1</h4>
                                <p>Địa chỉ: 65 Điện Biên Phủ, P4, Q.3, TP. HCM</p>
                                <p>Điện thoại :0969 823 594 </p>
                                <p>Mobile: 0903 400 600</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="map">
                                <img src="./images/map.png" alt="Map">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer">
                    <hr>
                    <div class="source">
                        <div class="copyright">
                            <p>Bản quyền © 2019 Behringer Viet Nam</p>
                        </div>
                        <div class="made-by">
                            Made with love by <strong>Letweb</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Bootstrap script    -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/slick-1.8.1/slick/slick.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>