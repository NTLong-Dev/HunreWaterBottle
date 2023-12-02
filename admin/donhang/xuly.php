<?php 
include('../config/Db.php');

if(isset($_GET['id']) && $_GET['query'] == 'xoa'){
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM donhang WHERE id = '".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:index.php');
}elseif(isset($_GET['id']) && $_GET['query'] == 'duyet'){
    $id = $_GET['id'];
    $sql_duyet = "UPDATE donhang SET trangthai = 'Duyệt' WHERE id = '".$id."'";
    echo "<script>document.getElementById('$id').remove();</script>";
    mysqli_query($mysqli, $sql_duyet);
    header('Location:index.php');
}
?>
