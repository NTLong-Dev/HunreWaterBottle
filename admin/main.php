<?php
include("danhmuc/lietke.php");
if(isset($_GET['query'])){
    $query = $_GET['query'];
}else{
    $query = null;
}
if($query == 'sua'){
    include("danhmuc/sua.php");
}elseif($query == 'them'){
    include("danhmuc/them.php");
}
?>