
<div class="logo">
	<img src="./images/uploaded_e3ed6f15b385d5f0f37325b63f5b8a1b.jpg" alt="" class="img-logo">
</div>
<div class="slider">
	<img src="./images/Nuoc-hoa-Zara.jpg" alt="" class="img-slider">
</div>
<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = $_POST['password_cu'];
		$matkhau_moi = $_POST['password_moi'];
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<p style="color:green">Mật khẩu đã được thay đổi."</p>';
		}else{
			echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại."</p>';
		}
	} 
?>
<div class="dangky-form">
<form action="" autocomplete="off" method="POST" class="dangky">
		<h3 class="header-dangky">Đổi mật khẩu Admin</h3>
<input type="text" name="email" class="input" placeholder="Nhập Email *">
<input type="text" name="password_cu" class="input" placeholder="Nhập mật khẩu cũ *">
<input type="text" name="password_moi" class="input" placeholder="Nhập mạt khẩu mới *">
<input type="submit" name="doimatkhau" value="Đổi mật khẩu" class="btn">

	</form>
	</div>