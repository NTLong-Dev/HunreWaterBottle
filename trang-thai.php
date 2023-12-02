<?php
session_start();
include('admin/config/Db.php');

if (isset($_SESSION['taikhoan'])) {
    $taikhoan = $_SESSION['taikhoan'];
    $sql_lietke1 = "SELECT hoTen FROM nguoidung WHERE taiKhoan = '".$_SESSION['taikhoan']."'";
    $row_liet_ke1 = mysqli_query($mysqli, $sql_lietke1);
    $rowst = mysqli_fetch_array($row_liet_ke1);
    $hoTen = $rowst['hoTen'];
    $sql_lietke = "SELECT * FROM donhang WHERE nguoidat = '".$hoTen."' ORDER BY id ASC";
    $row_liet_ke = mysqli_query($mysqli,$sql_lietke); 
} else {
    $taikhoan = "Guest";
}

// Chỉ hiển thị một trang duy nhất
if ($taikhoan !== "Guest") {
?>
 

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- Meta -->
            <meta charset="utf-8">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta name="keywords" content="MediaCenter, Template, eCommerce">
            <meta name="robots" content="all">
            <title>Bình Nước Hunre</title>
            <!-- Bootstrap Core CSS -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <!-- Customizable CSS -->
            <link rel="stylesheet" href="assets/css/main.css">
            <link rel="stylesheet" href="assets/css/blue.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.css">
            <link rel="stylesheet" href="assets/css/owl.transitions.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/rateit.css">
            <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
            <!-- Icons/Glyphs -->
            <link rel="stylesheet" href="assets/css/font-awesome.css">
            <!-- Fonts -->
            <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        </head>
        <body class="cnt-home">
            <!-- ============================================== HEADER ============================================== -->
            <?php
            include("header.php");
            ?>
            <!-- ============================================== HEADER : END ============================================== -->
            <div class="breadcrumb">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <ul class="list-inline list-unstyled">
                            <li><a href="index.php">Home</a></li>
                        </ul>
                    </div><!-- /.breadcrumb-inner -->
                </div><!-- /.container -->
            </div><!-- /.breadcrumb -->
            <div class="body-content outer-top-xs">
                <div class="container">
                    <div class="row ">
                        <div class="shopping-cart">
                            <div class="shopping-cart-table ">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-romove item">STT</th>
                                                <th class="cart-description item">Mã Đơn</th>
                                                <th class="cart-edit item">Sản Phẩm</th>
                                                <th class="cart-edit item">Người Đặt Hàng</th>
                                                <th class="cart-edit item">Địa Chỉ</th>
                                                <th class="cart-edit item">Hình Thức Thanh Toán</th>
                                                <th class="cart-edit item">Trạng Thái</th>
                                            </tr>
                                        </thead><!-- /thead -->
                                        <tr>
                                            <style>
                                                td{
                                                    position: relative;
                                                    left: 20px;
                                                }
                                            </style>
                                        <?php
                                        while($rows = mysqli_fetch_array($row_liet_ke)){
                                            
                                        ?>
                                                    <tbody>
                                                        <tr style="position: relative; left: 0px;">
                                                            <div class="cart-product-name-info" >
                                                                <td style="position: relative; left: 4px;"><p id =><?php echo $rows['id'] ?></p></td> </div>
                                                                <div class="cart-product-info">
                                                                    <td style="position: relative; left: 0px;"><p><?php echo $rows['madon'] ?></p></td>
                                                                </div>
                                                                <div class="cart-product-info">
                                                                    <td><p><?php echo $rows['SanPham'] ?></p></td>
                                                                </div>
                                                                <div class="cart-product-info">
                                                                    <td ><p><?php echo $rows['nguoidat'] ?></p></td>
                                                                </div>
                                                                <div class="cart-product-info">
                                                                    <td style="position: relative; left: 20px;"><p><?php echo $rows['diaChi'] ?></p></td>
                                                                </div>
                                                                <div class="cart-product-info">
                                                                    <td style="position: relative; left: 20px;"><p><?php echo $rows['hinhThuc'] ?></p></td>
                                                                </div>
                                                                <div class="cart-product-info">
                                                                    <td><p><?php if($rows['trangthai'] == "Duyệt"){
                                                                        echo "Đơn Hàng Đã Được Duyệt";
                                                                    }else{
                                                                        echo "Đơn Hàng Đang Chờ Duyệt";
                                                                    } ?></p></td>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                    </table><!-- /table -->
                                </div>
                            </div><!-- /.shopping-cart-table -->

                        </div><!-- /.shopping-cart -->
                    </div> <!-- /.row -->
                    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
                    <div id="brands-carousel" class="logo-slider wow fadeInUp">
                        <div class="logo-slider-inner">
                            <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                                <div class="item m-t-15">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item m-t-10">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="image">
                                        <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                                    </a>
                                </div><!--/.item-->
                            </div><!-- /.owl-carousel #logo-slider -->
                        </div><!-- /.logo-slider-inner -->
                    </div><!-- /.logo-slider -->
                    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
                </div><!-- /.container -->
            </div><!-- /.body-content -->
            <?php 
                    } else {
                        echo '<script>alert("Bạn Chưa Đăng Nhập"); window.location.href = "sign-in.php";</script>';
                    }
include("mess.php");
include("footer.php");
?>
    <!-- For demo purposes – can be removed on production -->
    <!-- For demo purposes – can be removed on production : End -->
    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/echo.min.js"></script>
    <script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>