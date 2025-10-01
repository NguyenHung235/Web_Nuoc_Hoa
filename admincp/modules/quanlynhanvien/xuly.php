<?php
include('../../config/config.php');

$tennhanvien = $_POST['tennhanvien'];
$manv = $_POST['manv'];
$dienthoai = $_POST['dienthoai'];
$diachi = $_POST['diachi'];
$chucvu = $_POST['chucvu'];
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;

if(isset($_POST['themnhanvien'])){
	//them
	$sql_them = "INSERT INTO tbl_nhanvien(tennhanvien,manv,dienthoai,diachi,hinhanh,chucvu) VALUE('".$tennhanvien."','".$manv."','".$dienthoai."','".$diachi."','".$hinhanh."','".$chucvu."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlynhanvien&query=them');
}elseif(isset($_POST['suanhanvien'])){
	//sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_nhanvien SET tennhanvien='".$tennhanvien."',manv='".$manv."',dienthoai='".$dienthoai."',diachi='".$diachi."',hinhanh='".$hinhanh."',chucvu='".$chucvu."'  WHERE id_nhanvien='$_GET[idnhanvien]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE tbl_nhanvien SET tennhanvien='".$tennhanvien."',manv='".$manv."',dienthoai='".$dienthoai."',diachi='".$diachi."',chucvu='".$chucvu."'  WHERE id_nhanvien='$_GET[idnhanvien]'";

	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlynhanvien&query=them');
}else{
	$id=$_GET['idnhanvien'];
	$sql = "SELECT * FROM tbl_nhanvien WHERE id_nhanvien = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_nhanvien WHERE id_nhanvien='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlynhanvien&query=them');
}

?>