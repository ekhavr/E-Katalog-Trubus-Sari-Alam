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
                          <p>Home / Kontak</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
	

	<!-- content page -->
	<section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                    <div class="d-none d-sm-block mb-5 pb-4">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0186421732915!2d110.1408993142841!3d-7.893117994313693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7afcab0985a96b%3A0x49843c6642461528!2sTrubus%20Sari%20Alam!5e0!3m2!1sen!2sid!4v1567691949821!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

				</div>

                  </div>
                  <div class="blog_details">
                     <h2>Alamat</h2>
                     <p class="excert">
                       <?php
							$sql=$con->query("select * from kontak order by id_kontak limit 1");
							while($row=$sql->fetch_assoc()){
								echo ''.$row['alamat'].'';
						?>
                     </p><?php } ?>
					<h2>No Telpon</h2>
					<p>
						<?php
							$sql=$con->query("select * from kontak order by id_kontak limit 1");
							while($row=$sql->fetch_assoc()){
								echo ''.$row['no_telp'].'';
						?>
					</p>
					<?php } ?>
					<h2>Whatsapp</h2>
					<p><?php
							$sql=$con->query("select * from kontak order by id_kontak limit 1");
							while($row=$sql->fetch_assoc()){
								echo ''.$row['no_wa'].'';
						?>
					</p>
					<?php } ?>
                  </div>
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
