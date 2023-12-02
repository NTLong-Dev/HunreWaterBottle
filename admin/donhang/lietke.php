<?php
$sql_lietke = "SELECT * FROM donhang ORDER BY id ASC";
$row_liet_ke = mysqli_query($mysqli,$sql_lietke);
?>
<style>
  .tt{
  position: relative;
  top: 0px;
  left: 65px;
}
table, th, td {
  border:3px solid gray;
  background-color: white;
}
</style>
<body>
							<table class="table stats-table tt" style="width:90%"> 
              <td colspan="7" class = "sp" ><h1 style="text-align: center; ">Đơn Hàng</h1></td>  
<tr>    <th>STT</th>
    <th>Mã Đơn</th>
    <th>Sản Phẩm</th>
    <th>Người Đặt Hàng</th>
    <th>Địa Chỉ</th>
    <th>Hình Thức Thanh Toán</th>
    <th>Quản Lý</th></tr>
  <?php
while($rows = mysqli_fetch_array($row_liet_ke)){
?>
<tr id="<?php echo $rows['id'] ?>">
    <td><?php echo $rows['id'] ?></td>
    <td><?php echo $rows['madon'] ?></td>
    <td><?php echo $rows['SanPham'] ?></td>
    <td><?php echo $rows['nguoidat'] ?></td>
    <td><?php echo $rows['diaChi'] ?></td>
    <td><?php echo $rows['hinhThuc'] ?></td>
    <td>
        <a href="#" onclick="duyetDonHang(<?php echo $rows['id'] ?>)">Duyệt</a> |
        <a href="xuly.php?id=<?php echo $rows['id'] ?>&query=xoa"onclick="return confirm('Bạn có chắc chắn muốn xoá không?')">Xoá</a>
    </td>
</tr>
<?php
}
?>
</table>
<script>
function duyetDonHang(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(id).remove();
        }
    };
    xhttp.open("GET", "xuly.php?id=" + id + "&query=duyet", true);
    xhttp.send();
}

function xoaDonHang(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(id).remove();
        }
    };
    xhttp.open("GET", "xuly.php?id=" + id + "&query=xoa", true);
    xhttp.send();
}
</script>
</table>