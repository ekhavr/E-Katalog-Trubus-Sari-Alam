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
                          <p>Home / Produk / Detail Produk</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


	<!-- Product Detail -->
	<div class="product_image_area section_padding">
		<?php
					$sqldefault=$con->query(" select * from produk a
							left join kategori b on a.kode_produk=b.id_kategori
							left join gambar USING(id_produk)
							where id_produk='".$_GET['id']."'");

					$default = $sqldefault->fetch_assoc();
				?>
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-5">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb="img/product_details/prodect_details_1.png">
                <img src="gambar/<?php echo $default['gambar_produk']; ?>" alt="IMG-PRODUCT">
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">

            <h3><?php echo $default['nama_produk']?></h3>
            <h2>Rp. <?php echo rupiah($default['harga_produk']); ?></h2>
            <ul class="list">
              <li>
                <a href="#"> <span>Stok</span> : <?php echo $default['stok_produk']?></a>
              </li>
            </ul>
            <p>
               <?php
								 $sql=$con->query("select * from cara_order where id_cara='2'");
								 while($row=$sql->fetch_assoc()){
									 echo ''.$row['deskripsi'].'';
									 }
							 ?>
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Deskripsi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Spesifikasi</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
          <p>
            <?php echo $default['deskripsi']?>
          </p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>Kode Produk</h5>
                  </td>
                  <td>
                    <?php echo $default['kode_produk']?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Merk</h5>
                  </td>
                  <td>
                    <?php echo $default['merk_produk']?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Netto</h5>
                  </td>
                  <td>
                    <?php echo $default['netto_produk']?>
                  </td>
                </tr>
              </tbody>
            </table>
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
