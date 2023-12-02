<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="../css/font.css" type="text/css"/>
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="../js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="#" class="logo">
            Admin
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    </header>
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="../home.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Báo Cáo Thống Kê</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="../sanpham.php">
                            <i class="fa fa-book"></i>
                            <span>Sản Phẩm</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="../donhang/index.php">
                            <i class="fa fa-th"></i>
                            <span>Đơn Hàng</span>
                        </a>
                    </li>
                    <li>
                        <a href="../nguoidung/index.php">
                            <i class="fa fa-user"></i>
                            <span>Khách Hàng</span>
                        </a>
                    </li>
                </ul>            
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
</section>
<section id="main-content">
	<section class="wrapper">
    <?php
        include('..//config/Db.php');
        include("main.php")
     ?>
    </section>
    </section>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/jquery.slimscroll.js"></script>
<script src="../js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="../js/jquery.scrollTo.js"></script>
</body>
</html>


