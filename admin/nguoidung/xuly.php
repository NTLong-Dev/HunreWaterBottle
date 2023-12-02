<?php 
include('../config/Db.php');

if(isset($_GET['id']) && isset($_GET['query'])=='xoa'){
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM nguoidung WHERE id = '".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:index.php');
}
?>
