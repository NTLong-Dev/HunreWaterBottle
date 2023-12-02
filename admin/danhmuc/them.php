<style>
table, th, td {  border:3px solid gray;
  background-color: white;
}
.center{
  position: relative;
  left: 320px;
}
.tb{
  position: relative;
  top: 10px;
  text-align: center;
}
</style>
<body>

<form action="danhmuc/xuly.php" method="post">
  <div class ="them">
<section id="main-content" >
	<section class="wrapper">
							<table class="table stats-table center" style="width:50%">     
              <td colspan="6" class = "sp" ><h1 style="text-align: center; ">Thêm Sản Phẩm</h1></td>       
                    <tr><th>STT</th>
    <td style="width: 200px;" ><input type="text" style="width: 200px;" name="stt"></td></tr>
    <tr><th>Hình Ảnh</th>
    <td style="width: 200px;" ><input type="file" style="width: 200px;" name="hinhanh"></td></tr>
    <tr><th>Sản Phẩm</th>
    <td style="width: 200px;" ><input type="text" style="width: 200px;" name="ten"></td></tr>
    <tr>  <th>Giá Tiền</th>
    <td style="width: 200px;" ><input type="text" style="width: 200px;" name="giatien"></td></tr>
    <tr><th>Danh Mục</th>
    <td style="width: 200px;" ><input type="text" style="width: 200px;" name="danhmuc"></td>
    </tr>
    <tr><th>Xử Lý</th>
    <td ><input type="submit" value ="Thêm" style="width: 200px;" name="Them">
							</table>
              </div>
</section>
</form>
</table>