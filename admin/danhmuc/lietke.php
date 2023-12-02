<?php
$sql_lietke = "SELECT * FROM danhmuc ORDER BY id ASC";
$row_liet_ke = mysqli_query($mysqli,$sql_lietke);
?>
<style>
  .tt{
  position: relative;
  top: 0px;
  left: 65px;
}
table, th, td {  border:3px solid gray;
  background-color: white;
}
.center{
  position: relative;
  left: 320px;
}
</style>
<body>
<section id="main-content">
	<section class="wrapper">
							<table class="table stats-table tt" style="width:90%"> 
              <td colspan="6" class = "sp" ><h1 style="text-align: center; ">Sản Phẩm</h1></td>  
<tr>
    <th>STT</th>
    <th>Hình Ảnh</th>
    <th>Sản Phẩm</th>
    <th>Giá Tiền</th>
    <th>Danh Mục</th>
    <th>Quản Lý</th>
  </tr>
  <?php
  while($rows = mysqli_fetch_array($row_liet_ke)){

  ?>
  <tr>
  <td><?php echo $rows['id'] ?></td>
  <td><?php echo $rows['HinhAnh'] ?></td>
    <td><?php echo $rows['Ten_Danh_Muc'] ?></td>
    <td><?php echo $rows['GiaTien'] ?>đ</td>
    <td><?php echo $rows['DanhMuc'] ?></td>
    <td><a href="danhmuc/xuly.php?id=<?php echo $rows['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá không?')">Xoá</a> | <a href="?id=<?php echo $rows['id'] ?>&query=sua">Sửa</a> </td>
    <?php
    }?>

  </tr>
  <tr>
    <td colspan="6" ><a href="?query=them"><button style='float: right; height: 30px'>Thêm</button></a></td>
  </tr>
</table>
</section>
</section>