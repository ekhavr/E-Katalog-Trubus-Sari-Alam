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

	<!-- Title Page -->
	<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Profil</p>
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
                     <img class="img-fluid" src="gambar/header2.jpg" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Trubus Sari Alam
                     </h2>
                     <p class="excert">
                       <?php
							$sql=$con->query("select * from profil order by id_profil limit 1");
								while($row=$sql->fetch_assoc()){
									echo ''.$row['profil'].'';
									}
							?>
                     </p>
                     
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
