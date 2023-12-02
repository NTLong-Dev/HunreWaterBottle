<?php
session_start();
include('admin/config/Db.php');

$taikhoan1 = $_POST["taikhoan"];
$matkhau1 = $_POST["matkhau"];
if($taikhoan1 == "" || $matkhau1 == ""){
    echo '<script>alert("Bạn chưa điền đủ thông tin"); window.location.href = "sign-in.php";</script>';
}else{
if (isset($_POST['dangnhap'])) {
    $sql_dangnhap = "SELECT * FROM nguoidung WHERE taikhoan = '$taikhoan1' AND matkhau = '$matkhau1'";
    $result_dangnhap = mysqli_query($mysqli, $sql_dangnhap);

    if (mysqli_num_rows($result_dangnhap) > 0) {
        // Lưu tên tài khoản vào session
        $_SESSION['taikhoan'] = $taikhoan1;

        // Đăng nhập thành công
        echo '<script>alert("Đăng nhập thành công"); window.location.href = "index.php";</script>';
    } else {
        // Đăng nhập thất bại
        echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác"); window.location.href = "sign-in.php";</script>';
    }
}
}