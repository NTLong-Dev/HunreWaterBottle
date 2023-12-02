<?php
session_start();
include("admin/config/Db.php");
$taikhoan = $_SESSION['taikhoan'];
 unset($_SESSION['gioHang'][$taikhoan]);
header("Location: shopping-cart.php");
exit;
?>