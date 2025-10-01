<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admincp</title>
	<link rel="stylesheet" type="text/css" href="css/4.css">
	<!-- Latest compiled and minified CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
<link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css"> -->
</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
} 
?>
<body>
	<h3 class="title_admin">TRANG QUẢN TRỊ Nước hoa ZARA</h3>
	<!-- <div class="logo">
	<img src="../images/logo-1.png" alt="" class="img-logo"> -->
</div>
<!-- <?php
			include("config/config.php");
			include("modules/header.php");
?> -->
	<div class="wrapper">
	<?php 
			include("modules/menu.php");
			include("modules/main.php");
	?>
	</div>
	
</body>
</html>