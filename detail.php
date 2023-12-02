<?php 
include("admin\config\Db.php");
$sql_lietke = "SELECT * FROM danhmuc ORDER BY id ASC";
$row_liet_ke = mysqli_query($mysqli,$sql_lietke);
$sql_lks = "SELECT DanhMuc FROM danhmuc";
$row_lks = mysqli_query($mysqli, $sql_lks);
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
        <link href="assets\css\lightbox.css" rel="stylesheet">
		

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets\css\font-awesome.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


	</head>
    <body class="cnt-home" >
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
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
				<div class="home-banner outer-top-n">
</div>		
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
            </ul>
	  <!-- /.nav --> 
	</nav>
	<!-- /.megamenu-horizontal --> 
  </div>
<!-- ============================================== Testimonials============================================== -->

<div class="sidebar-widget  wow fadeInUp outer-top-vs ">
	<div class="head"><strong>BÌNH LUẬN CỦA KHÁCH HÀNG</strong></div>
	<div id="advertisement" class="advertisement">
		
        <div class="item">
            <div class="avatar"><img src="assets\images\testimonials/avatar-facebook-mac-dinh-nam.jpeg" alt="Image"></div>
		<div class="testimonials"><em>"</em>Cái Này Dùng Ổn Nha <br> Cả Nhà.<em> "</em></div>
		<div class="clients_author">Hoàng</div><!-- /.container-fluid -->
        </div><!-- /.item -->

         <div class="item">
         	<div class="avatar"><img src="assets\images\testimonials/avatar-facebook-mac-dinh-nam.jpeg" alt="Image"></div>
		<div class="testimonials"><em>"</em>Dùng Tốt<em>"</em></div>
		<div class="clients_author">Long</div>    
        </div><!-- /.item -->

    </div><!-- /.owl-carousel -->
</div>
				</div>
			</div><!-- /.sidebar -->
			<?php   while($rows = mysqli_fetch_array($row_liet_ke)){
	     $id = $rows['id'];
		 if (isset($_GET['id']) && $_GET['id'] == $id) {
  ?>
			<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">
                
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title="Gallery" href="assets\images\products\<?php echo $rows['HinhAnh']?>">
                    <img class="img-responsive" alt="" src="assets\images\products\<?php echo $rows['HinhAnh']?>">
                </a>
            </div><!-- /.single-product-gallery-item -->
        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                        <img class="img-responsive" width="85" alt="" src="assets\images\products\<?php echo $rows['HinhAnh']?>">
                    </a>
                </div>
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        			

  					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name"><?php echo $rows['Ten_Danh_Muc'] ?></h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										<div class="rating rateit-small"></div>
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">(13 Reviews)</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->

						
							<div class="description-container m-t-20">
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6">
										<div class="price-box">
											<span class="price"><?php echo $rows['GiaTien'] ?>đ</span>
											<span class="price-strike">100.000đ</span>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
											    <i class="fa fa-heart"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="col-sm-2">
										<span class="label">Số Lượng :</span>
										
									</div>
									
									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
								                <div class="arrows">
								                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
								                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
								                </div>
								                <input type="text" value="1">
							              </div>
							            </div>
									</div>

									<div class="col-sm-7">
										<script src="/assets/js/scripts.js"></script>
										<?php
										include("admin\config\Db.php");
										$sql_lk = "SELECT * FROM danhmuc ORDER BY id ASC";
										$row_lk = mysqli_query($mysqli,$sql_lk);
										if (isset($_SESSION['taikhoan'])) {
											$taikhoan = $_SESSION['taikhoan'];
										} else {
											$taikhoan = "Guest";
										}
										if ($taikhoan !== "Guest") {
										?>
									
										<a href="shopping-cart.php?id=<?php echo $rows['id'] ?>&query=themgiohang" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i>Thêm Vào Giỏ Hàng</a>
									<?php }
									?>
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

					
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
					<?php } }?>
				</div><!-- /.row -->
				</div><!-- /.row -->
				<style>
					.product-tabs{
						position:relative;
						width: 72.5%;
						left:15px;
						top:10px;
					}
				</style>
                </div>
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">Mô Tả</a>
								
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">
						
							<div class="tab-content">
							
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
									<p class="text">
											Bình Nhựa Thể Thao Đeo Chéo Thể Tích 1L6 N261 thích hợp làm bình đựng nước thể thao mang đi tập gym! Bình nước tập gym này sẽ là 1 phần không thể thiếu của các gymers. Khách thường thắc mắc mua bình đựng nước thể thao ở đâu tphcm? Thế Giới Bình Nước tự hào là đơn vị chuyên cung cấp các bình nước tập gym, bình nước BPA FREE thể thao, bình nước xe đạp giá cả phải chăng lại vô cùng chất lượng. Bình Nước Thể Thao 2 lít nhiều khi cũng được các phượt thủ dùng làm bình nước phượt hay bình nước du lịch mỗi khi đi đâu xa. 
										</p>
									</div>	
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">Bình Luận Về Sản Phẩm</h4>
										</div><!-- /.product-reviews -->
										

										
										<div class="product-add-review">
											<h4 class="title">Review</h4>
											<div class="review-table">
												<div class="table-responsive">
													<table class="table">	
														<thead>
															<tr>
																<th class="cell-label">&nbsp;</th>
																<th>1 sao</th>
																<th>2 sao</th>
																<th>3 sao</th>
																<th>4 sao</th>
																<th>5 sao</th>
															</tr>
														</thead>	
														<tbody>
															<tr>
																<td class="cell-label">Chất Lượng</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
														
														</tbody>
													</table><!-- /.table .table-bordered -->
												</div><!-- /.table-responsive -->
											</div><!-- /.review-table -->
											
											<div class="review-form">
												<div class="form-container">
													<form role="form" class="cnt-form">
														
														<div class="row">
															<div class="col-sm-7">
																<div class="form-group">
																	<label for="exampleInputName">Nhập Tên Của Bạn<span class="astk">*</span></label>
																	<input type="text" class="form-control txt" id="exampleInputName" placeholder="">
																</div><!-- /.form-group -->
																
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputReview">Review <span class="astk">*</span></label>
																	<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
																</div><!-- /.form-group -->
															</div>
														</div><!-- /.row -->
														
														<div class="action text-right">
															<button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
														</div><!-- /.action -->

													</form><!-- /.cnt-form -->
												</div><!-- /.form-container -->
											</div><!-- /.review-form -->

										</div><!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

								
							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<?php 
include("mess.php");
include("footer.php");
?>
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
