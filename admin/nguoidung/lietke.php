<?php
$sql_lietke = "SELECT * FROM nguoidung ORDER BY id ASC";
$row_liet_ke = mysqli_query($mysqli,$sql_lietke);
?>
<style>
table, th, td {  border:3px solid gray;
  background-color: white;
}
.center{
  position: relative;
  left: -120px;
  top: -90px;
}
.hien{
  color: gray;

}

</style>
<body>
<section id="main-content" >
	<section class="wrapper">
							<table class="table stats-table center" style="width:100%">     
              <td colspan="6" class = "sp" ><h1 style="text-align: center; ">Người Dùng</h1></td>   
<tr>
    <th>STT</th>
    <th>Tài Khoản</th>
    <th>Mật Khẩu</th>
    <th>Quản Lý</th>
  </tr>
  <?php
  while($rows = mysqli_fetch_array($row_liet_ke)){

  ?>
  <tr>
  <td><?php echo $rows['id'] ?></td>
    <td><?php echo $rows['taikhoan'] ?></td>
    <td><?php echo $rows['matkhau'] ?></td>
    <td><a href="xuly.php?id=<?php echo $rows['id'] ?>&query=xoa" onclick="return confirm('Bạn có chắc chắn muốn xoá không?')">Xoá</a></td>
    <?php
    }?>

  </tr>
</table>