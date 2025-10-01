<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<div class="dangky-form">
<p class="tieude">Sửa danh mục sản phẩm</p>
 <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" class="dangky">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
 	?>
<input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" class="input">

<input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu" class="input">
		<input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm" class="btn">
	  <?php
	  } 
	  ?>

 </form>
 </div>