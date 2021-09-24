<?php
	include ("core/dbconfig.php");
	include ("core/rupiah.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include ("inc/head.php");
	?>
<body class="animsition">
	<?php
	include ("inc/index-header.php");
	?>
	<!-- Banner -->
	<section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature_part pt-4">
        <div class="container-fluid p-lg-0 overflow-hidden">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="gambar/banner1.jpg" alt="#">
                        <div class="hover_text">
                            <a href="katalog.php" class="btn_2">Liat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="gambar/banner2.jpg" alt="#">
                        <div class="hover_text">
                            <a href="katalog.php" class="btn_2">Liat Katalog</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="gambar/banner3.jpg" alt="#">
                        <div class="hover_text">
                            <a href="katalog.php" class="btn_2">Liat Katalog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new_arrival section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="arrival_tittle">
                        <h2>Produk Baru</h2>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container-fluid">

            <div class="row">
            	
                <div class="col-lg-12">
                </div>
                <?php
						$tampil = "select * from produk a
									left join kategori b on a.kategori_produk=b.id_kategori
									order by id_produk desc LIMIT 4";
						$hasil  = mysqli_query($con,$tampil);
						while ($r=mysqli_fetch_array($hasil)){
							$sql = mysqli_query($con,"select * from gambar where id_produk='".$r['id_produk']."' order by id_produk desc LIMIT 4");
							$row = mysqli_fetch_array($sql);
							$num_image = $sql->num_rows;
						?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                	<?php
			    				if($num_image==0){
										echo '<img src="gambar/default.png" alt="">';
									}else{
										echo '<img src="gambar/'.$row['gambar_produk'].'">';
									}
								?>  
                                    </div>
                                    <div class="category_product_text">
                                        <?php echo '<a href="detail.php?page=detailproduk&id='.$r['id_produk'].'"> '; ?><h5><?php echo $r['nama_produk']; ?></h5></a>
                                        <p>Rp. <?php echo rupiah($r['harga_produk']); ?></p>
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

        </div>

       
    </section>
	<!-- Footer -->
	<?php
		include ("inc/footer.php");
	?>

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
