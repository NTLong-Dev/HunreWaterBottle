<?php
$sql_sua = "SELECT * FROM danhmuc WHERE id = '$_GET[id]' LIMIT 1";
$row_sua = mysqli_query($mysqli,$sql_lietke);
?>
<style>
.centers{
  position: relative;
  left: 500px;
}
</style>
<body>
<table style="width:50%">
<form action="danhmuc/xuly.php?id=<?php echo $_GET['id'] ?>" method="post">
    <?php 
    while($dong = mysqli_fetch_array($row_sua)){
      $id = $dong['id'];
      if (isset($_GET['id']) && $_GET['id'] == $id) {
    ?>
<form action="danhmuc/xuly.php" method="post">
<section id="main-content" >
	<section class="wrapper">
							<table class="table stats-table centers" style="width:50%">     
              <td colspan="6" class = "sp" ><h1 style="text-align: center; ">Sửa Sản Phẩm</h1></td>       
                    <tr><th>STT</th>
    <td style="width: 200px;" ><input type="text" style="width: 200px;" name="stt" value = "<?php echo $dong ['id']?>"></td></tr>
    <tr><th>Hình Ảnh</th>
    <td style="width: 200px;" ><input type="file" style="width: 200px;" name="hinhanh" value = "<?php echo $dong ['HinhAnh']?>"></td></tr>
    <tr><th>Sản Phẩm</th>
    <td style="width: 200px;" ><input type="text" style="width: 200px;" name="ten" value = "<?php echo $dong ['Ten_Danh_Muc']?>"></td></tr>
    <tr>  <th>Giá Tiền</th>
    <td style="width: 200px;" ><input type="text" style="width: 200px;" name="giatien" value = "<?php echo $dong ['GiaTien']?>"></td></tr>
    <tr><th>Danh Mục</th>
    <td style="width: 200px;" ><input type="text" style="width: 200px;" name="danhmuc" value = "<?php echo $dong ['DanhMuc']?>"></td>
    </tr>
    <tr><th>Xử Lý</th>
    <td ><input type="submit" value ="Sửa" style="width: 200px;" name="Sua">
							</table>
</section>
</form>
</table>
<?php 
      }
  }?>