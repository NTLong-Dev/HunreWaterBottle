<?php 
    $admin = $_POST["Email"];
    $pass = $_POST["Password"];
    $a = "Long";
    $b = "Long";
    if($admin == $a && $pass == $b){
        echo '<script>alert("Đăng Nhập Admin thành công"); window.location.href = "home.php";</script>';
    }else{
        echo '<script>alert("Tài Khoản Và Mật Khẩu Sai");window.location.href = "index.php";</script>';
    }
    ?>