
<div class="dangky-form">
<p class="tieude">Thêm sản phẩm</p>
 <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data" class="dangky">
<input type="text" name="tensanpham" class="input" placeholder="Nhập tên sản phẩm">
<input type="text" name="masp" class="input" placeholder="Nhập mã sản phẩm">
<input type="text" name="giasp" class="input" placeholder="Nhập giá khuyến mãi">
<textarea rows="1"  name="giakm" style="resize: none" class="input" placeholder="Nhập giá gốc"></textarea>	
<input type="text" name="soluong" class="input" placeholder="Nhập số lượng sản phẩm">
<input type="file" name="hinhanh" class="input">
<textarea rows="10"  name="tomtat" style="resize: none" class="input" placeholder="Nhập tóm tắt sản phẩm"></textarea>	
<textarea rows="10"  name="noidung" style="resize: none" class="input" placeholder="Nhập nội dung sản phẩm"></textarea>

<span>Danh mục:</span>
	    	<select name="danhmuc" class="select">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
			<span>Tình trạng:</span>
	    	<select name="tinhtrang" class="select">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
<input type="submit" name="themsanpham" value="Thêm sản phẩm"class="btn">

 </form>
</div>