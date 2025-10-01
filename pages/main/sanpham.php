<div class="logo">
	<img src="./images/uploaded_e3ed6f15b385d5f0f37325b63f5b8a1b.jpg" alt="" class="img-logo">
</div>
<div class="slider">
	<img src="./images/Nuoc-hoa-Zara.jpg" alt="" class="img-slider">
</div>


<!-- <p class="tieude">Chi tiết sản phẩm</p> -->
<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham">
		<img width="100%" src="./admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	</div>
	<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
		<div class="product-meta">
			<h3 class="detail-product-name"> <?php echo $row_chitiet['tensanpham'] ?></h3>
			<p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
			<p>Giá sản phẩm: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
			<p style="color: #999;"><del class="price-old" style="color: #999;"><?php echo $row_chitiet['giakm']?></del></p>
			<p>Số lượng sản phẩm: <?php echo $row_chitiet['soluong'] ?></p>
			<p>Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc'] ?></p>
			<p class="hv-1"><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
		</div>
		<div class="box-product-related mb-30">
				<h2 class="box-heading wow fadeInUp animated text-center mb-40"><p>Thông tin sản phẩm</p></h2>
				<div class="description-detail"><p><?php echo $row_chitiet['tomtat'] ?></p></div>
			</div>
	</form>


</div>	

<?php
} 
?>

