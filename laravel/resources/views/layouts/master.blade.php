<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <title>NXB ĐHSP TPHCM</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="css/images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="js/png-fix.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/functions.js"></script>
</head>
<script>
    $(document).ready(function(){
        startnow();
    });
    function changeimage(){
        x = ( x === imgs.length - 1) ? 0 : x+1;
        document.getElementById("sm").src = imgs[x];
    }
    function startnow(){
        setInterval(changeimage,3000);
    }
    var imgs =[] ,x = -1;
    imgs[0] ="{{ asset('/img/book1.jpg') }}";
    imgs[1] ="{{ asset('/img/book2.jpg') }}";
    imgs[2] ="{{ asset('/img/book1.jpg') }}";
</script>
<body>
<!-- Header -->
<div id="header" class="shell">
    <div id="logo"><img src="{{asset('img/dhsplogo.png')}}" alt="" style="width:100%;height: 100%"/></div>
    <!-- Navigation -->
    <div id="navigation">
        <ul>
            <li><a href="#" class="active">Trang chủ</a></li>
            <li><a href="#">Tin tức - Sự kiện</a></li>
            <li><a href="#">Hoạt động NXB</a></li>
            <li><a href="#">Khoa học - Giáo dục</a></li>
            <li><a href="#">Sách</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>
    </div>
    <!-- End Navigation -->
    <div class="cl">&nbsp;</div>
    <!-- Login-details -->
    <div id="login-details">
        <p>Welcome, <a href="#" id="user">Guest</a> .</p><p><a href="#" class="cart" ><img src="css/images/cart-icon.png" alt="" /></a>Shopping Cart (0) <a href="#" class="sum">$0.00</a></p>
    </div>
    <!-- End Login-details -->
</div>
<!-- End Header -->
<!-- Slider -->
<div id="slider">
    <div class="shell">
        <ul>
            <li>
                <div class="image">
                    <img src="{{ asset('img/sl1.jpg') }}" alt="" style="width: 100%;height: 100%" />
                </div>
            </li>
            <li>
                <div class="image">
                    <img src="{{ asset('img/sl2.jpg') }}" alt="" />
                </div>
            </li>
            <li>
                <div class="image">
                    <img src="{{ asset('img/sl3.jpg') }}" alt="" />
                </div>
            </li>
            <li>
                <div class="image">
                    <img src="{{ asset('img/sl4.png') }}" alt="" />
                </div>
            </li>
        </ul>
        <div class="nav">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
        </div>
    </div>
</div>
<!-- End Slider -->
<div id="main" class="shell">
    <!-- Sidebar -->
    <div id="sidebar">
        <ul class="categories">
            <li>
                <h4>NXB ĐHSP TPHCM</h4>
                <ul>
                    <li><a href="#">Văn bản pháp quy</a></li>
                    <li><a href="#">Thông cáo báo chí</a></li>
                    <li><a href="#">LÍch công tác</a></li>
                </ul>
            </li>
            <li>
                <h4>Các tủ sách</h4>
                <ul>
                    <li><a href="#">Sách giáo dục</a></li>
                    <li><a href="#">Giáo trình</a></li>
                    <li><a href="#">Từ điển chuyên ngành</a></li>
                    <li><a href="#">Sách tham khảo HSSV</a></li>
                    <li><a href="#">Ấn phẩm khác</a></li>
                </ul>
            </li>
            <li>
                <h4>Sách mới</h4>
                <ul>
                    <div style="width: 80%;height: 250px;background-color: blue">
                        <img id="sm" src="{{ asset('/img/book1.jpg') }}" style="width: 100%;height: 100%">
                    </div>
                </ul>
            </li>
            <li>
                <h4>Web Links</h4>
                <ul>
                    <li><a href="http://www.hcmup.edu.vn">Trường Đại học Sư phạm TPHCM</a></li>
                </ul>
            </li>
            <li>
                <h4>Đăng nhập</h4>
                <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Đăng kí</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- End Sidebar -->
    <!-- Start Content -->
    <div id="content">
        <!-- Products -->
        @yield('content')
        <div class="products">
        </div>
    </div>
    <!-- End Content -->
    <div class="cl">&nbsp;</div>
</div>
<!-- End Main -->
<!-- Footer -->
<div id="footer" class="shell">
    <div class="top">
        <div class="cnt">
            <div class="col about">
                <h4>Nhà xuất bản ĐHSP TP.HCM</h4>
                <p>Copyright © 2015 - 2016 Nhà xuất bản Đại học Sư Phạm TPHCM. </p>
                <p>  Thiết kế bới nhóm NXB2</p>
                <p> Địa chỉ: 280 An Dương Vương, Phường 4, Quận 5, TPHCM</p>
                <p>Số điện thoại: (08)38 301303 - (08)35 264 805 - Fax: (08) 39 381 382</p>
                <p> Email: nxbdhsphcm11@gmail.com </p>
                <p>Website: http://www.nxb.hcmup.edu.vn</p>
            </div>
            <div class="col store">
                <h4>Links</h4>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Tin tức - Sự kiện</a></li>
                    <li><a href="#">Hoạt động NXB</a></li>
                    <li><a href="#">Khoa học - Giáo dục</a></li>
                    <li><a href="#">Sách</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="col" id="newsletter">
                <h4>Newsletter</h4>
                <p>Lorem ipsum dolor sit amet  consectetur. </p>
                <form action="" method="post">
                    <input type="text" class="field" value="Your Name" title="Your Name" />
                    <input type="text" class="field" value="Email" title="Email" />
                    <div class="form-buttons"><input type="submit" value="Submit" class="submit-btn" /></div>
                </form>
            </div>
            <div class="cl">&nbsp;</div>
            <div class="copy">
                <p>&copy; <a href="#">Nhà xuất bản ĐHSP TP.HCM</a>. Thiết kế bởi <a href="http://css-free-templates.com/">nhóm NXB2</a></p>
            </div>
        </div>
    </div>
</div>
<!-- End Footer -->
</body>
</html>