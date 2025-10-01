<?php
	$sql_lietke_kh = "SELECT * FROM tbl_dangky  ORDER BY tenkhachhang DESC";
	$query_lietke_kh = mysqli_query($mysqli,$sql_lietke_kh);
?>
<p class="tieude">Liệt kê khách hàng</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên khách hàng</th>
    <th>Email</th>
    <th>Điện thoại</th>
    <th>Mật Khẩu</th>
    <th>Chức năng</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_kh)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['matkhau'] ?></td>

  
      
   	<td>
   		<a href="modules/quanlykh/xuly.php?iddangky=<?php echo $row['id_dangky'] ?>">Xoá</a> | <a href="?action=quanlykh&query=sua&iddangky=<?php echo $row['id_dangky'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>