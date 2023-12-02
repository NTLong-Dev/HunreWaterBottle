<?php
session_start();
unset($_SESSION['taikhoan']);
echo '<script>alert("Đăng Xuất thành công"); window.location.href = "sign-in.php";</script>';
?>