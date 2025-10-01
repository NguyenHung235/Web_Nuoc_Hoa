<?php
	$sql_lietke_nv = "SELECT * FROM tbl_nhanvien ORDER BY id_nhanvien DESC";
	$query_lietke_nv = mysqli_query($mysqli,$sql_lietke_nv);
?>
<a href="?action=quanlynhanvien&query=them" class="them">Thêm nhân viên</a>
<p class="tieude">Liệt kê nhân viên</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên nhân viên</th>
    <th>Mã nhân viên</th>
    <th>Số điện thoại</th>
    <th>Địa chi</th>
    <th>Ảnh nhân viên</th>
    <th>Chức vụ</th>
    <th>Thao tác</th>

  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_nv)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tennhanvien'] ?></td>
    <td><?php echo $row['manv'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><img src="./modules/quanlynhanvien/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['chucvu'] ?></td>
   	<td>
   		<a href="modules/quanlynhanvien/xuly.php?idnhanvien=<?php echo $row['id_nhanvien'] ?>">Xoá</a> | <a href="?action=quanlynhanvien&query=sua&idnhanvien=<?php echo $row['id_nhanvien'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>