
<div class="logo">
	<img src="./images/uploaded_e3ed6f15b385d5f0f37325b63f5b8a1b.jpg" alt="" class="img-logo">
</div>
<div class="slider">
	<img src="./images/Nuoc-hoa-Zara.jpg" alt="" class="img-slider">
</div>
<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = $_POST['password'];
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
		}
	} 
?>
<div class="dangky-form">
<form action="" autocomplete="off" method="POST" class="dangky">
<h3 header-dangky>Đăng nhập khách hàng</h3>
<input type="text" size="50" name="email" placeholder="Email..." class="input">

<input type="password" size="50" name="password" placeholder="Mật khẩu..." class="input">

				
<input type="submit" name="dangnhap" value="Đăng nhập" class="btn">
</form>
</div>