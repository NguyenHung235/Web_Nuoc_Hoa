<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="fonts/themify-icons.css">
	   <!-- Link Swiper's CSS -->
	   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<title>Nước hoa ZARA-Nước hoa Authentic</title>
<style>
	 body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
</style>
</head>
<body>
	<div class="wrapper">

		<?php
			session_start();
			include("admincp/config/config.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>

	</div>
</body>
</html>