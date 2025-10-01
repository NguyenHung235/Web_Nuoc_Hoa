
<div class="logo">
	<img src="./images/uploaded_e3ed6f15b385d5f0f37325b63f5b8a1b.jpg" alt="" class="img-logo">
</div>

<!-- Swiper -->
<div class="swiper mySwiper">
      <div class="swiper-wrapper">
		  
	    <div class="swiper-slide"><img src="https://nuochoa95.com/Data/images/Banner/banner-moi.jpg" alt=""></div>
        <div class="swiper-slide"><img src="https://nuochoa95.com/Data/images/Banner/banner-8-3.jpg" alt=""></div>
		<div class="swiper-slide"><img src="https://nuochoa95.com/Data/images/Banner/banner-moi.jpg" alt=""></div>
        <div class="swiper-slide"><img src="https://nuochoa95.com/Data/images/Banner/banner-8-3.jpg" alt=""></div>
        
      </div>
	  <div class="swiper-pagination"></div>
</div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
 var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>
<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*3)-3;
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,8";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<h3 class="tieude">DÒNG SẢN PHẨM NƯỚC HOA AUTHENTIC</h3>
				<ul class="product_list">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="hv">
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img src="./admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="title_product"><?php echo $row['tensanpham'] ?></p>
							<p class="price_product"><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
							<p style="text-align: center;color:#7e1117;font-weight: 700"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;"><del class="price-old" style="color: #999;"><?php echo $row['giakm']?></del></p>
						</a>
					</li>
				</div>
					<?php
					} 
					?>
				</ul>
				<div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
					    padding: 0;
					    /* padding-top: 100px; */
					    list-style: none;
					}
					ul.list_trang li {
					    float: left;
					    padding: 5px 13px;
					    margin: 5px;
					    background: #7e1117;
					    display: block;
						border-radius: 10%;
					}
					ul.list_trang li a {
					    color: #fff;
					    text-align: center;
					    text-decoration: none;
					 
					}
				</style>
				<!-- <?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/3);
				?>
				<p style="margin-top: 300px; font-weight:600">Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
				
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background: #111; "';}else{ echo ''; }  ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?> -->
					
				</ul>
				<div class="click-2">
                    <a href="index.php?quanly=danhmucsanpham&id=2">XEM THÊM</a>
                </div>
			<div class="content-1">
                <div class="text-1">
                    <p class="content-text-1">SỰ KIỆN NỔI BẬT</p>
                </div>
            <div class="ds-list">
                <div class="ds-list-1"><img src="./admincp/modules/quanlysp/uploads/cac_thuong_hieu-11_1e3b38a347eb49dea50c3b4673a8ce1e_grande.jpg" alt="" class="sk-img"></div>
                <div class="ds-list-1"><img src="./admincp/modules/quanlysp/uploads/cac_thuong_hieu-12_d002915da3814daf96ac3264463ffcab_grande.jpg" alt="" class="sk-img"></div>
                <div class="ds-list-1"><img src="./admincp/modules/quanlysp/uploads/cac_thuong_hieu-14_43c06650d8a84cefb95f44bd1b306ff8_grande.jpg" alt="" class="sk-img"></div>
            </div>
            </div>
			<div class="content-2">
                <div class="text-1">
                    <p class="content-text-1">COLLECTIONS</p>
                </div>
                <div class="list-3">
                    <div class="colections non-paddingleft"><img src="./admincp/modules/quanlysp/uploads/uploaded_c46eeae3a5d197876810dc42391e2dbf.jpg" alt="" class="colections-img"></div>
                    <div class="colections"><img src="./admincp/modules/quanlysp/uploads/n_____c_hoa_zara_2.jpg" alt="" class="colections-img"></div>
                    <div class="colections"><img src="./admincp/modules/quanlysp/uploads/n_____c_hoa_zara.jpg" alt="" class="colections-img"></div>
                </div>
            </div>
			<div class="content-3">
            <div class="left">
                <div class="tieude-left">
                    ABOUT US
                </div>
                <p class="content-left">Nhắc đến thương hiệu Zara, người ta thường nghĩ đến các sản phẩm quần áo thời trang sành điệu. Tuy nhiên, không mấy người biết rằng hãng còn cho ra mắt thị trường các sản phẩm khác như nước hoa, kính mắt và túi xách. Nếu bạn chưa từng thử nước hoa từ thương hiệu Zara, đây thực sự là một điều đáng tiếc..
                    Nước hoa Zara thuộc thương hiệu Zara - là thương hiệu thời trang vô cùng nổi tiếng của Tây Ban Nha. Công ty được thành lập chính thức vào năm 1975 tại Arteixo, Galicia bởi Amanico Ortega và Rosalía Mera. Zara là sản phẩm chính của Inditex, một trong những tập đoàn bán lẻ thời trang lớn nhất trên Thế giới. Hiên nay, Zara đã trở nên vô cùng quen thuộc với hầu hết các tín đồ thời trang bởi mẫu mã đa dạng, giá thành phải chăng và phong cách cá tính.
                    Nước hoa Zara chính hãng có giá thành khá rẻ so với các dòng nước hoa từ các thương hiệu khác. Tùy vào mùi hương mà mỗi chai nước hoa sẽ có giá khác nhau. Tuy nhiên nhìn chung giá nước hoa Zara không quá đắt đỏ so với giới trẻ Việt Nam. Nước hoa Zara có mùi hương khá đa dạng, thời thượng, có thể đáp ứng nhiều phong cách khác nhau. Cộng với việc giá thành của nó không quá đắt đỏ, bạn có thể mua nhiều lọ nước hoa cùng một lúc để thay đổi phong cách. " </p>
            </div>
            <div class="right">
                <img src="./images/9-32316334-f0ce-4fe1-a87e-c67e6b065d01.jpg" alt="" class="img-right">
            </div>
        </div>