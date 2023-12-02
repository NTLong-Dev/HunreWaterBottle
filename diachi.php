<?php 
$diaChi = $_POST['diachi'];
if($diaChi == ""){
    echo '<script>alert("Bạn chưa nhập đủ thông tin"); window.location.href = "shopping-cart.php";</script>';
} else {
    echo '<script>alert("Thành Công"); window.location.href = "shopping-cart.php";</script>';
}
?>