<?php
include("admin/config/Db.php");
session_start();
// Kiểm tra xem biến session 'gioHang' đã tồn tại chưa
if (!isset($_SESSION['gioHang'])) {
    // Nếu chưa tồn tại, khởi tạo một mảng rỗng
    $_SESSION['gioHang'] = array();
}
if (isset($_GET['id']) && isset($_GET['query']) && $_GET['query'] == 'themgiohang') {
    $id = $_GET['id'];
    // Lấy thông tin sản phẩm từ CSDL
    $sql = "SELECT * FROM danhmuc WHERE id = '".$id."'";
    $result = mysqli_query($mysqli, $sql);
    $product = mysqli_fetch_assoc($result);
    // Lưu thông tin sản phẩm vào mảng trong biến session
    $_SESSION['gioHang'][$_SESSION['taikhoan']][] = array(
        'id' => $product['id'],
        'hinhanh' => $product['HinhAnh'],
        'tenDanhMuc' => $product['Ten_Danh_Muc'],
        'giaTien' => $product['GiaTien']
    );
}

$sql_lk = "SELECT * FROM danhmuc ORDER BY id ASC";
$row_lk = mysqli_query($mysqli, $sql_lk);
if (isset($_SESSION['taikhoan'])) {
    $taikhoan = $_SESSION['taikhoan'];
} else {
    $taikhoan = "Guest";
}
$sql_lietke = "SELECT * FROM nguoidung ORDER BY id ASC";
$row_liet_ke = mysqli_query($mysqli, $sql_lietke);

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
                            <li><a href="/index.php">Home</a></li>
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
                                                <th class="cart-romove item">Ảnh</th>
                                                <th class="cart-description item">Tên Sản Phẩm</th>
                                                <th class="cart-edit item">Giá Tiền</th>
                                                <th class="cart-edit item">Xoá</th>
                                            </tr>
                                        </thead><!-- /thead -->
                                        <tfoot>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="shopping-cart-btn">
                                                        <span class="">
                                                            <a href="xoa.php" class="btn btn-upper btn-primary outer-left-xs">Xoá Toàn Bộ</a>
                                                        </span>
                                                    </div><!-- /.shopping-cart-btn -->
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tr>
                                            <?php
                                            if (isset($_SESSION['gioHang'][$taikhoan]) && is_array($_SESSION['gioHang'][$taikhoan])) {
                                                foreach ($_SESSION['gioHang'][$taikhoan] as $sanPham) {
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td class="cart-image">
                                                                <a class="entry-thumbnail" style="cursor:auto;">
                                                                    <img src="assets/images/products/<?php echo $sanPham['hinhanh']; ?>" alt="">
                                                                </a>
                                                            </td>
                                                            <td class="cart-product-name-info">
                                                                <td style="position:relative; left: -355px; padding-left:220px;"><h5><?php echo $sanPham['tenDanhMuc']; ?></h5></td>
                                                                <div class="cart-product-info">
                                                                    <td style="position:relative; left: -275px;"><p><?php echo $sanPham['giaTien']; ?>đ</p></td>
                                                                </div>
                                                                <td class="romove-item" style="position:relative; left: -120px;"><a href="xoa-sanpham.php" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                                </tbody>
                                    </table><!-- /table -->
                                </div>
                            </div><!-- /.shopping-cart-table -->
                            <div class="col-md-4 col-sm-12 estimate-ship-tax">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="estimate-title">Thông Tin Và Địa Chỉ</span>
                                            </th>
                                        </tr>
                                    </thead><!-- /thead -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <form action="donhang.php" method="POST">
                                                <div class="form-group">
                                                    <label class="info-title control-label">Nhập Địa Chỉ Cụ Thể<span>*</span></label>
                                                    <input type="text" class="form-control unicase-form-control text-input" name="diachi">
                                                </div>
                                                <div class="pull-right">
                                                    <?php  if (isset($_SESSION['gioHang'][$taikhoan]) && !empty($_SESSION['gioHang'][$taikhoan])) { ?>
                                                        <?php
                                                    if(isset($_GET['partnerCode'])){
                                                        $thanhtoan = 'Thanh Toán Online';
                                                    } else {
                                                        $thanhtoan = 'Thanh Toán Khi Nhận Hàng';
                                                    }
                                                    ?>
                                                    <input type="hidden" name="thanhtoan" value="<?php echo $thanhtoan; ?>">
                                                 
                                                <button type="submit" class="btn btn-primary checkout-btn "style="position: relative; left: 650px; top: -70px; z-index: 999">Thanh Toán</button>
                                                </div>
                                                <?php }?>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.estimate-ship-tax -->
                            <div class="col-md-4 col-sm-12 estimate-ship-tax">
                                <table class="table">
                                    <thead>
                                    <div class="form-group">
                                                    <label class="info-title control-label">Chọn Hình Thức Thanh Toán<span>*</span></label>
                                    </thead>
                                     <tbody>
                                     <tr>
                                        <form action="momo/atm.php"method=Post>
                                                        
                                        <input  type="hidden" name="tongtien1" value="<?php 
                                                    if(isset($_SESSION['gioHang'][$taikhoan]) && !empty($_SESSION['gioHang'][$taikhoan])) {
                                                        $totalAmount = 0.0;
                                                        foreach ($_SESSION['gioHang'][$taikhoan] as $sanPham) {
                                                            $totalAmount += $sanPham['giaTien'];
                                                        }
                                                        echo $totalAmount . "000";
                                                    }
                                                    ?>">
                                                    <?php
                       
                                                    if (isset($_SESSION['gioHang'][$taikhoan]) && !empty($_SESSION['gioHang'][$taikhoan])) { ?>
                                            <input type="submit" value="Thanh Toán Online"  class="btn-upper btn btn-primary" require>
                                        </form>
                                        </tr>
                                


                                    </tbody>
    
                                    </div>
                    
                                </table><!-- /table -->
                                <tr>
                                        <input type="submit" value="Thanh Toán Khi Nhận Hàng"  class="btn-upper btn btn-primary" require>
                                        </tr>
                                        
                                        <?php }
                                                    ?>
                                
                            </div><!-- /.estimate-ship-tax -->

                            <div class="col-md-4 col-sm-12 cart-shopping-total">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="cart-checkout-btn pull-left">
                                                    <table >
                                                     <td>Tổng Tiền: </td>   

                                                     <td>
                                                    <?php 
                                                    if(isset($_SESSION['gioHang'][$taikhoan]) && !empty($_SESSION['gioHang'][$taikhoan])) {
                                                        $totalAmount = 0.0;
                                                        foreach ($_SESSION['gioHang'][$taikhoan] as $sanPham) {
                                                            $totalAmount += $sanPham['giaTien'];
                                                        }
                                                        echo number_format($totalAmount, 3) . 'đ';
                                                    } else {
                                                        echo '0đ';
                                                    }
                                                    ?>
                                                </td>
                                                    
                                                    </table>
                                                    <?php

                                                    if (isset($_SESSION['gioHang'][$taikhoan]) && !empty($_SESSION['gioHang'][$taikhoan])) { ?>
                                                    <a href="donhang.php?query=themdonhang" style="display: none;"></a>
                                                   <?php } else {
                                                        echo "Không có đơn hàng để thanh toán";
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody><!-- /tbody -->
                                </table><!-- /table -->
                            </div><!-- /.cart-shopping-total -->
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
            include("mess.php");
            include("footer.php");
        } else {
            echo '<script>alert("Bạn Chưa Đăng Nhập"); window.location.href = "sign-in.php";</script>';
        }
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