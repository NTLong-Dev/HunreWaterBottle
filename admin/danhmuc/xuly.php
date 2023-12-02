<?php
include('../config/Db.php');
$ten = $_POST["stt"];
$hinhanh = $_POST["hinhanh"];
$thutu = $_POST["ten"];
$giatien = $_POST["giatien"];
$danhmuc = $_POST["danhmuc"];
    if(isset($_POST['Them'])){
        $sql_them = "INSERT INTO danhmuc(`id`, `HinhAnh`, `Ten_Danh_Muc`, `GiaTien`,`DanhMuc`) VALUES ('".$ten."', '".$hinhanh."', '".$thutu."', '".$giatien."', '".$danhmuc."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../sanpham.php');
}elseif(isset($_POST['Sua'])){
    $sql_sua = "UPDATE `danhmuc` SET id='".$ten."',HinhAnh='".$hinhanh."',Ten_Danh_Muc='".$thutu."',GiaTien='".$giatien."',DanhMuc='".$danhmuc."' WHERE id='$_GET[id]'";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../sanpham.php');
    
}else{
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM danhmuc WHERE id = '".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../sanpham.php'); ?>
<?php }?>
