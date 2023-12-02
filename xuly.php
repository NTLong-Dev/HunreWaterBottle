<?php
include('admin/config/Db.php');
$taikhoan = $_POST["email1"];
$matkhau = $_POST["password1"];
$hoten = $_POST["hoten"];
$rePass = $_POST["rePass"];
if($taikhoan == "" || $matkhau == "" || $hoten == "" || $rePass == ""){
    echo '<script>alert("Bạn chưa nhập đủ thông tin"); window.location.href = "sign-in.php";</script>';
}elseif($matkhau != $rePass){
    echo '<script>alert("Mật Khẩu Không Khớp"); window.location.href = "sign-in.php";</script>';
}
else{
function generateUniqueID() {
    $uniqueID = mt_rand(1, 9999);
    return $uniqueID;
}

if(isset($_POST['Them'])){
    $id = generateUniqueID();
    $sql_them1 = "INSERT INTO nguoidung(`id`, `taikhoan`, `matkhau`,`hoTen` ) VALUES ('$id','".$taikhoan."', '".$matkhau."', '".$hoten."')";
    mysqli_query($mysqli,$sql_them1);
    echo '<script>alert("Đăng Ký Thành Công"); window.location.href = "sign-in.php";</script>';
}
}
?>
