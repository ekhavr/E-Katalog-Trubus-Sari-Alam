
<?php
include ("../core/dbconfig.php");

if (isset($_GET['username'])){
	$username = $_GET['username'];
}
else{
	die("Error. Username Tidak Terdeteksi");
}

//proses ganti password
if(isset($_POST['ganti'])){
	$username 		= $_POST['username'];
	$password_lama	= $_POST['password_lama'];
	$password_baru	= $_POST['password_baru'];
	$konf_password	= $_POST['konf_password'];

	//cek password lama
	$query = "SELECT * FROM admin where username='$username' AND password='$password_lama'";
	$sql = mysql_query($query);
	$hasil = mysql_num_rows($sql);
	if (! $hasil >= 1 ){
		?>
		<script type="text/javascript" language="javascript">
			alert('Password lama tidak sesuai, silahkan ulangi kembali!');
			document.location='index.php?val=adminubah';
		</script>

		<?php
		unset($_SESSION['username']);
		session_destroy();
	}
	//validasi data kosong
	else if (empty($_POST['password_baru']) || empty($_POST['konf_password'])){
		echo "Ganti password gagal ! Data tidak boleh kosong";
	}
	//validasi input konfirm password
	else if (($_POST['password_baru']) != ($_POST['konf_password'])){
		echo "Ganti password gagal ! Password & Konfirmasi Password Harus Sama";
	}
	else {
		//Update Data
		$query = "UPDATE admin set password='$password_baru' where username='$username'";
		$sql = mysql_query($query);
		//setelah berhasil update
		if ($sql) {
			echo "PASSWORD berhasil diganti";
		}
		else {
		echo "Ganti Passowrd Gagal !";
	}
}
}

?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kelola Admin</li>
			</ol>
		</div><!--/.row-->
		<div class="page-content">
				<h2>
					Ganti Password
				</h2>
			</div>
			<div class="row">
				<div class="col-xs-12">
						<form class="form-horizontal" role="form" method="POST">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username</label>

										<div class="col-sm-9">
											<input type="text" name="username" disabled="disabled" id="form-field-1" value="<?php echo $username ?>" placeholder="<?php echo $username ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Lama </label>

										<div class="col-sm-9">
											<input type="password" name="password_lama" id="form-field-2" maxlength="20" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Baru </label>

										<div class="col-sm-9">
											<input type="password" name="password_baru" id="form-field-2" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Konfirmasi Password Baru</label>

										<div class="col-sm-9">
											<input type="password" name="konf_password" id="form-field-2" maxlength="20" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="ganti">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Update
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
						</form>
