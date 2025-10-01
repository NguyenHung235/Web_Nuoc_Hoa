<?php
include('../../config/config.php');

$tenkhachhang = $_POST['tenkhachhang'];
$email = $_POST['email'];
$diachi = $_POST['diachi'];
$matkhau = $_POST['matkhau'];
$dienthoai = $_POST['dienthoai'];



if(isset($_POST['themkhachhang'])){
	//them
	$sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}elseif(isset($_POST['suakhachhang'])){
	//sua
	$sql_update = "UPDATE tbl_dangky SET tenkhachhang='".$tenkhachhang."',email='".$email."',diachi='".$diachi."',matkhau='".$matkhau."',dienthoai='".$dienthoai."' WHERE id_dangky='$_GET[iddangky]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlykh&query=lietke');
}else{

	$id=$_GET['iddangky'];
	$sql_xoa = "DELETE FROM tbl_dangky WHERE id_dangky='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlykh&query=lietke');
}

?>