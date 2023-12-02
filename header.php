<?php 
@session_start();
include("admin\config\Db.php");
$sql_lk = "SELECT * FROM danhmuc ORDER BY id ASC";
$row_lk = mysqli_query($mysqli,$sql_lk);
if (isset($_SESSION['taikhoan'])) {
    $taikhoan = $_SESSION['taikhoan'];
} else {
    $taikhoan = "Guest";
}
?>
<style>
    table td{
        padding-left: 20px;
}
</style>
<style>
	div.cnt-account{
	  position: relative;
    right: 15px;
	}
</style>
<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                    <?php if ($taikhoan !== "Guest") { ?>
                            <li><p style="color:white"><i class="icon fa fa-user"></i><?php echo " ".$taikhoan; ?></p></li>
                            <li style="color:gray">|</li>
                            <li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
                        <?php } else { ?>
                            <li><p style="color:white"><i class="icon fa fa-user"></i><?php echo " ".$taikhoan; ?></p></li>
                            <li style="color:gray">|</li>
                            <li><a href="sign-in.php"><i class="icon fa fa-lock"></i>Login</a></li>
                        <?php } ?>
                    </ul>
                </div> <!-- /.cnt-account -->
                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                    </ul> <!-- /.list-unstyled -->
                </div> <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div> <!-- /.header-top-inner -->
        </div> <!-- /.container -->
    </div> <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/logo1.png" alt="logo" width="120px" style="margin-top:-55px ; position: relative; left: 60px">
                        </a>
                    </div> <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div> <!-- /.logo-holder -->
                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form action="index.php" method="POST">
                            <div class="control-group">
                                <input class="search-field" placeholder="Tìm Kiếm..." name="timkiem">
                                <style>
                                    .ss{
                                        background-color: #f1c40f;
                                        
                                    }
                                    .search-field{
                                        outline: none;
                                    }
                                </style>
                                <button class="btn ss" type="submit"style="color: black ;width:55px; height: 50px; border-radius: 1px; position: relative; left: 2px" ><i class="fa fa-search" ></i>
                            </div>
                        </form>
                    </div> <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div> <!-- /.top-search-holder -->
                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div class="dropdown dropdown-cart">
                        <a href="shopping-cart.php" class="dropdown-toggle lnk-cart" >
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="trang-thai.php" class="dropdown-toggle lnk-cart">
                        <div class="items-cart-inner">
                        <div class="total-price-basket">
                                    <span class="lbl">Đơn Hàng</span>
                                </div>
                        </div>
                        </a>
                        
                    </div> <!-- /.dropdown-cart -->
                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div> <!-- /.top-cart-row -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-header -->
</header>

<!-- Rest of the HTML body content goes here -->