<?php 
include("admin\config\Db.php");
$timkiem = $_POST['timkiem'];
$sql_lietke = "SELECT * FROM danhmuc WHERE Ten_Danh_Muc = '".$timkiem."' ";
$row_liet_ke = mysqli_query($mysqli,$sql_lietke);
    ?>

