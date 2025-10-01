<div class="logo">
	<img src="./images/uploaded_e3ed6f15b385d5f0f37325b63f5b8a1b.jpg" alt="" class="img-logo">
</div>
<div class="slider">
	<img src="./images/Nuoc-hoa-Zara.jpg" alt="" class="img-slider">
</div>
<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = $_POST['matkhau'];
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=giohang');
		}
	}
?>
<div class="dangky-form">
<p class="header-dangky">Đăng ký thành viên</p>
<style type="text/css">

</style>
<form action="" method="POST" class="dangky">

<input type="text" size="50" name="hovaten" placeholder="Nhập họ tên *" class="input">

<input type="text" size="50" name="email" placeholder="Nhập Email *" class="input">


<input type="number" size="50" name="dienthoai" placeholder="Nhập số điện thoại*"class="input">

<input type="text" size="50" name="diachi" placeholder="Nhập địa chỉ *" class="input">
<input type="text" size="50" name="matkhau" placeholder="Nhập mật khẩu *" class="input">
<input type="submit" name="dangky" value="Đăng ký" class="btn">
<a href="index.php?quanly=dangnhap" style="color: black;" class="a-dangky">Đăng nhập nếu có tài khoản</a>

</form>

</div>


