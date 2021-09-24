<?php
include ("core/dbconfig.php");
include ("core/rupiah.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <?php include "inc/head.php";?>
</head>
<body class="bg-white">

	<!-- Header -->
	<?php include "inc/index-header.php";?>

	<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Produk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	 <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding border_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                            <div class="l_w_title">
                                <h3>Kategori</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <?php
			                    $tampil = "select * from kategori ";
			                    $hasil  = mysqli_query($con,$tampil);
			                    while ($r=mysqli_fetch_array($hasil)){
			                    echo '<li><a href="kategori.php?page=kategori&cat='.$r['id_kategori'].'">'.$r['nama_kategori'].'</a></li>';
			                    }
			                  ?>
                            </ul>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item">
                                    <h2>Trubus Sari Alam</h2>
                                </div>
                            </div>
                        </div>
                        <?php
						$tampil = "select * from produk a
									left join kategori b on a.kategori_produk=b.id_kategori
									order by id_produk desc";
						$hasil  = mysqli_query($con,$tampil);
						while ($r=mysqli_fetch_array($hasil)){
							$sql = mysqli_query($con,"select * from gambar where id_produk='".$r['id_produk']."' order by id_produk desc");
							$row = mysqli_fetch_array($sql);
							$num_image = $sql->num_rows;
						?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                	<?php
			    				if($num_image==0){
										echo '<img src="gambar/default.png" alt="IMG-PRODUCT">';
									}else{
										echo '<img src="gambar/'.$row['gambar_produk'].'">';
									}
								?>
                                    <div class="category_product_text">
                                        <?php echo '<a href="detail.php?page=detailproduk&id='.$r['id_produk'].'"> '; ?><h5><?php echo $r['nama_produk']; ?></h5></a>
                                        <p>Rp. <?php echo rupiah($r['harga_produk']); ?></p>
                                    </div>
                                </div>
                               
                            </div>

                        </div>
 						<?php
								}
							?>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Footer -->
		<?php include "inc/footer.php";?>

		<script src="assets_home/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="assets_home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets_home/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="assets_home/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="assets_home/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="assets_home/js/mixitup.min.js"></script>
    <script src="assets_home/js/price_rangs.js"></script>
    <!-- particles js -->
    <script src="assets_home/js/owl.carousel.min.js"></script>
    <script src="assets_home/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="assets_home/js/slick.min.js"></script>
    <script src="assets_home/js/jquery.counterup.min.js"></script>
    <script src="assets_home/js/waypoints.min.js"></script>
    <script src="assets_home/js/contact.js"></script>
    <script src="assets_home/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets_home/js/jquery.form.js"></script>
    <script src="assets_home/js/jquery.validate.min.js"></script>
    <script src="assets_home/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="assets_home/js/custom.js"></script>
</body>
</html>
