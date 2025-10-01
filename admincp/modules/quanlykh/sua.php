<?php
	$sql_sua_kh = "SELECT * FROM tbl_dangky WHERE id_dangky='$_GET[iddangky]' LIMIT 1";
	$query_sua_kh = mysqli_query($mysqli,$sql_sua_kh);
?>

<?php
while($row = mysqli_fetch_array($query_sua_kh)) {
?>
<div class="dangky-form">
<p class="tieude">Sửa sản phẩm</p>
<form method="POST" action="modules/quanlykh/xuly.php?iddangky=<?php echo $row['id_dangky'] ?>" enctype="multipart/form-data" class="dangky">
<input type="text" value="<?php echo $row['tenkhachhang'] ?>" name="tenkhachhang" class="input">
<input type="text" value="<?php echo $row['email'] ?>" name="email" class="input">
<input type="text" value="<?php echo $row['diachi'] ?>" name="diachi" class="input">
<input type="text" value="<?php echo $row['matkhau'] ?>" name="matkhau" class="input">
<input type="text" value="<?php echo $row['dienthoai'] ?>" name="dienthoai" class="input">
<input type="submit" name="suakhachhang" value="Sửa Khách Hàng" class="btn">
 </form>
 <?php
 } 
 ?>
</div>

