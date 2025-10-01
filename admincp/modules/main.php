<div class="clear"></div>
<div class="main">
<!-- định hướng trang -->
	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				if($tam=='quanlydanhmucsanpham' && $query=='lietke'){
					include("modules/quanlydanhmucsp/lietke.php");
				}elseif ($tam=='quanlydanhmucsanpham' && $query=='them') {
					include("modules/quanlydanhmucsp/them.php");
				}elseif ($tam=='quanlydanhmucsanpham' && $query=='sua') {
					include("modules/quanlydanhmucsp/sua.php");
				}elseif ($tam=='quanlysp' && $query=='lietke') {
			
					include("modules/quanlysp/lietke.php");
				}
				elseif($tam=='quanlysp' && $query=='sua'){
					include("modules/quanlysp/sua.php");
				}elseif($tam=='quanlysp' && $query=='them'){
					include("modules/quanlysp/them.php");
				}elseif ($tam=='quanlykh' && $query=='lietke') {
					include("modules/quanlykh/them.php");
					include("modules/quanlykh/lietke.php");
				}elseif($tam=='quanlykh' && $query=='sua'){
					include("modules/quanlykh/sua.php");
				}elseif ($tam=='quanlynhanvien' && $query=='lietke') {
					include("modules/quanlynhanvien/lietke.php");
				}elseif($tam=='quanlynhanvien' && $query=='sua'){
					include("modules/quanlynhanvien/sua.php");
				}
				elseif($tam=='quanlynhanvien' && $query=='them'){
					include("modules/quanlynhanvien/them.php");
				}elseif($tam=='quanlydonhang' && $query=='lietke'){
					include("modules/quanlydonhang/lietke.php");
				}elseif($tam=='donhang' && $query=='xemdonhang'){
					include("modules/quanlydonhang/xemdonhang.php");
				}
				else{
					include("modules/dashboard.php");
				}
	?> 
	
</div>