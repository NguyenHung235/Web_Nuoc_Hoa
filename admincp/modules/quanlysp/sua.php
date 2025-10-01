<?php
	$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>

<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
<div class="dangky-form">
<p class="tieude">Sửa sản phẩm</p>
<form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data" class="dangky">
<input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham" class="input">
<input type="text" value="<?php echo $row['masp'] ?>" name="masp" class="input">
<input type="text" value="<?php echo $row['giasp'] ?>" name="giasp" class="input">
<textarea rows="1"  name="giakm" style="resize: none" class="input"><?php echo $row['giakm'] ?></textarea>
<input type="text" value="<?php echo $row['soluong'] ?>" name="soluong" class="input">

	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
<textarea rows="10"  name="tomtat" style="resize: none" class="input"><?php echo $row['tomtat'] ?></textarea>
<textarea rows="10"  name="noidung" style="resize: none" class="input"><?php echo  $row['noidung'] ?></textarea>
<span>Danh mục</span>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    			if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
<span>Tình trạng</span>
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Kích hoạt</option>
	    		<option value="0" selected>Ẩn</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
<input type="submit" name="suasanpham" value="Sửa sản phẩm" class="btn">
 </form>
 <?php
 } 
 ?>
</div>

