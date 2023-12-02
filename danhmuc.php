<?php
include("admin/config/Db.php");

// Kiểm tra xem có dữ liệu từ form tìm kiếm được gửi lên hay không
if(isset($_POST['timkiem'])){
  $timkiem = $_POST['timkiem'];

  // Thực hiện truy vấn để lấy danh sách sản phẩm theo từ khóa tìm kiếm
  $sql_lietke = "SELECT * FROM danhmuc WHERE Ten_Danh_Muc LIKE '%".$timkiem."%'";
  $row_liet_ke = mysqli_query($mysqli, $sql_lietke);
} else {
  // Nếu không có từ khóa tìm kiếm, hiển thị tất cả sản phẩm
  $category = $_GET['category'];
  $sql_lks = "SELECT DanhMuc FROM danhmuc";
  $row_lks = mysqli_query($mysqli, $sql_lks);
  $sql_lietke = "SELECT * FROM danhmuc WHERE DanhMuc LIKE '%$category%'";
  $row_liet_ke = mysqli_query($mysqli, $sql_lietke);
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>Bình Nước Hunre</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="assets\css\bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="assets\css\main.css">
<link rel="stylesheet" href="assets\css\blue.css">
<link rel="stylesheet" href="assets\css\owl.carousel.css">
<link rel="stylesheet" href="assets\css\owl.transitions.css">
<link rel="stylesheet" href="assets\css\animate.min.css">
<link rel="stylesheet" href="assets\css\rateit.css">
<link rel="stylesheet" href="assets\css\bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets\css\font-awesome.css">

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
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Danh Mục</div>
          <nav class="yamm megamenu-horizontal">
          <ul class="nav">
          <?php
$categories = array();
while($roaw = mysqli_fetch_array($row_lks)){
    $category = $roaw['DanhMuc'];
    if(!in_array($category, $categories)){
        $categories[] = $category;
        ?>
        <li class="dropdown menu-item">
            <a href="danhmuc.php?category=<?php echo $category ?>" class="dropdown-toggle">
                <?php echo $category ?>
            </a>
        </li>
        <?php
    }
}
?>
              <!-- /.menu-item -->
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
      </div>
<style>
    #products-tabs-slider{
  position: relative;
  top: -30px;
}
</style>
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <div id="products-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Sản Phẩm</h3>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                <?php
  while($rows = mysqli_fetch_array($row_liet_ke)){
  ?>
   <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.php?id=<?php echo $rows['id']?>"><img src="assets\images\products\<?php echo $rows['HinhAnh']?>"></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.php"><?php echo $rows['Ten_Danh_Muc'] ?></a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"><?php echo $rows['GiaTien'] ?>đ</span> <span class="price-before-discount">180.000đ</span> </div>
                          <!-- /.product-price --> 
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                 
                                <li class="add-cart-button btn-group">
                                  <a href="detail.php?id=<?php echo $rows['id']?>"><button class="btn btn-primary icon"  type="button">Xem Thông Tin</button></a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
  <?php } ?>
                  <!-- /.item -->
                  
                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
        </div>
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 

<?php 
include("mess.php");
include("footer.php");
?>

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="assets\js\jquery-1.11.1.min.js"></script> 
<script src="assets\js\bootstrap.min.js"></script> 
<script src="assets\js\bootstrap-hover-dropdown.min.js"></script> 
<script src="assets\js\owl.carousel.min.js"></script> 
<script src="assets\js\echo.min.js"></script> 
<script src="assets\js\jquery.easing-1.3.min.js"></script> 
<script src="assets\js\bootstrap-slider.min.js"></script> 
<script src="assets\js\jquery.rateit.min.js"></script> 
<script type="text/javascript" src="assets\js\lightbox.min.js"></script> 
<script src="assets\js\bootstrap-select.min.js"></script> 
<script src="assets\js\wow.min.js"></script> 
<script src="assets\js\scripts.js"></script>
</body>
</html>