<?php
include('config/Db.php');
$sql_lietke = "SELECT * FROM danhmuc ORDER BY id ASC";
$row_liet_ke = mysqli_query($mysqli,$sql_lietke);
$sql_lietke1 = "SELECT * FROM nguoidung ORDER BY id ASC";
$row_liet_ke1 = mysqli_query($mysqli,$sql_lietke1);
$num_rows = mysqli_num_rows($row_liet_ke1);
$sql_lietke2 = "SELECT * FROM donhang";
$row_liet_ke2 = mysqli_query($mysqli,$sql_lietke2);
$num_rows1 = mysqli_num_rows($row_liet_ke2);
?>
<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<?php 
include('header.php');
?>
<!--header start-->
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<!-- //market-->
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									<h3>Báo Cáo Thống Kê</h3>
								</header>
								<div class="market-updates">
									<div class="col-md-3 market-update-gd">
										<div class="market-update-block clr-block-1">
											<div class="col-md-4 market-update-right">
												<i class="fa fa-users" ></i>
											</div>
											<div class="col-md-8 market-update-left">
											<h4>Người Dùng</h4>
											<h4><?php echo $num_rows?></h4>
											</div>
										  <div class="clearfix"> </div>
										</div>
									</div>
									<div class="col-md-3 market-update-gd">
										<div class="market-update-block clr-block-4">
											<div class="col-md-4 market-update-right">
												<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											</div>
											<div class="col-md-8 market-update-left">
												<h4>Số Đơn Đặt Hàng</h4>
												<h4><?php echo $num_rows1?></h4>
											</div>
										  <div class="clearfix"> </div>
										</div>
									</div>
								   <div class="clearfix"> </div>
								</div>	
								<div class="agileits-box-body clearfix">
									<div id="hero-area"></div>
								</div>
							</div>
						</div>

				</div>
			</div>
		</div>
		<div class="agileits-w3layouts-stats">
					<div class="col-md-6 stats-info stats-last widget-shadow">
						<div class="stats-last-agile">
							<table class="table stats-table ">
								<thead>
									<tr>
										<th>STT</th>
										<th>Tên Sản Phẩm</th>
										<th>Số Lượng Đặt</th>
									</tr>
								</thead>
								<tbody>
								<?php
                    while($rows = mysqli_fetch_array($row_liet_ke)){
                        $danh_muc = $rows['Ten_Danh_Muc'];
                        $sql_san_pham = "SELECT * FROM donhang WHERE SanPham LIKE '%$danh_muc%'";
                        $row_san_pham = mysqli_query($mysqli, $sql_san_pham);
                        $num_rows_san_pham = mysqli_num_rows($row_san_pham);
                    ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <style>
                            a.name{
                                color: gray;
                                cursor:context-menu;
                            }
                        </style>
						<td><a class="name"><?php echo $rows['Ten_Danh_Muc']; ?></a></td>
                        <td><?php echo $num_rows_san_pham ?></td>
                    </tr>
                    <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
</section>
</section>
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	

<!-- calendar -->
</body>
</html>