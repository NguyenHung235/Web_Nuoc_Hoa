<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">TRANG CHỦ</a></li>
				<?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
				<?php
				} 
				?>
				<li><a href="index.php?quanly=giohang">GIỎ HÀNG</a></li>
				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?quanly=thaydoimatkhau">ĐỔI MẬT KHẨU</a></li>
				<li><a href="index.php?dangxuat=1">ĐĂNG XUẤT</a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">ĐĂNG KÍ</a></li>
				<?php
				} 
				?>
				
				<li><a href="index.php?quanly=lienhe">LIÊN HỆ</a></li>
				
					
				
			</ul>
			<p style="margin-top: -4px;">
				<form action="index.php?quanly=timkiem" method="POST" class="timkiem-form">
					<input style="padding: 5px;
    border-radius: 15px;" type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa" class="input-timkiem">
					<input style="padding: 5px;border-radius: 15px;" type="submit" name="timkiem" value="Tìm kiếm" class="btn-timkiem">
				</form>
			</p>
		</div>