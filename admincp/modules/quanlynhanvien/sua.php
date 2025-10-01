<?php
	$sql_sua_nv = "SELECT * FROM tbl_nhanvien WHERE id_nhanvien='$_GET[idnhanvien]' LIMIT 1";
	$query_sua_nv = mysqli_query($mysqli,$sql_sua_nv);
?>

<?php
while($row = mysqli_fetch_array($query_sua_nv)) {
?>
<div class="dangky-form">
<p class="tieude">Sửa Nhân Viên</p>
<form method="POST" action="modules/quanlynhanvien/xuly.php?idnhanvien=<?php echo $row['id_nhanvien'] ?>" enctype="multipart/form-data" class="dangky">
<input type="text" value="<?php echo $row['tennhanvien'] ?>" name="tennhanvien" class="input" placeholder="Nhập tên nhân viên">
<input type="text" value="<?php echo $row['manv'] ?>" name="manv" class="input" placeholder="Nhập mã nhân viên">
<input type="number" value="<?php echo $row['dienthoai'] ?>" name="dienthoai" class="input" placeholder="Nhập số điện thoại">
<input type="text" value="<?php echo $row['diachi'] ?>" name="diachi" class="input" placeholder="Nhập địa chỉ">


	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
<input type="text" value="<?php echo $row['chucvu'] ?>" name="chucvu" class="input" placeholder="Nhập chức vụ">	
<input type="submit" name="suanhanvien" value="Sửa nhân viên" class="btn">
 </form>
 <?php
 } 
 ?>
</div>

