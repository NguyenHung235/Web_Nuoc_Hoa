<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = $_POST['password'];
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admincp</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="logo">
	<img src="../images/logo-1.png" alt="" class="img-logo">
</div>
<!-- <div class="slider">
	<img src="../images/vi.jpg" alt="" class="img-slider">
</div> -->
<div class="dangky-form">
	<form action="" autocomplete="off" method="POST" class="dangky">
	<h3>Đăng nhập Admin</h3>
	<input type="text" name="username" class="input" placeholder="Username">
	<input type="password" name="password" class="input" placeholder="Password">
	<input type="submit" name="dangnhap" value="Đăng nhập" class="btn">

	</form>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>



