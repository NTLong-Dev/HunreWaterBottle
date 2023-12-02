<?php
session_start();
include("admin/config/Db.php");
unset($_SESSION['gioHang']);
header("Location: shopping-cart.php");
exit;
?>
