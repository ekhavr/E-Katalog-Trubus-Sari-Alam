<?php include ("../core/dbconfig.php");
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets_login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets_login/css/main.css">

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets_login/images/profil.jpg);">
					<span class="login100-form-title-1">
						LOGIN
					</span>
				</div>
				<?php
					if(isset($_POST['submit'])){
					$sql = $con->query("select * from admin
										where username='".$_POST['username']."' and
										password='".($_POST['password'])."'
										limit 1
										");
										$num = $sql->num_rows; //1
					if($num>0){ //jika ditemukan ada user yang cocok
								$_SESSION['auth']="ok"; //menyimpan session
								header('location:index.php');
								}else{
								echo '<script language="javascript">';
								echo 'alert("Maaf Login Gagal, Pastikan Username dan Password Benar!")';
								echo '</script>';
								}
							    }
								?>
				<form action="" method="POST" id="login_form" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets_login/vendor/animsition/js/animsition.min.js"></script>
	<script src="assets_login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets_login/vendor/select2/select2.min.js"></script>
	<script src="assets_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets_login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="assets_login/vendor/countdowntime/countdowntime.js"></script>
	<script src="assets_login/js/main.js"></script>
		<!-- basic scripts -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script type="assets/text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<!-- inline scripts related to this page -->
		<script type="assets/text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
		</script>
		<script type="assets/text/javascript">
			$(document).ready(function(){
				$('.form-checkbox').click(function(){
					if($(this).is(':checked')){
						$('.form-password').attr('type','text');
					}else{
						$('.form-password').attr('type','password');
					}
				});
			});
		</script>
	</body>
</html>
