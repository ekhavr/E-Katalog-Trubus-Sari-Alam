<?php
	if(isset($_POST['simpan'])){
		$sql=$con->query("update profil set
						profil ='".$_POST['deskripsi']."'
						where id_profil ='".$_POST['id']."'
						");
		if($sql){
			echo '
			<meta http-equiv="refresh" content="0;URL=index.php?val=profil" />';
		}
	}
	$sqldefault=$con->query("select * from profil where id_profil='".$_GET['id']."'");
	$default = $sqldefault->fetch_assoc();
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profil</li>
			</ol>
		</div><!--/.row-->
		<div class="page-content">
				<h2>
					Edit Profil
				</h2>
			<div class="row">
				<div class="col-xs-12">
				<form action="" method="POST">
					<input type="hidden" name="id" value="<?php echo $default['id_profil']?>">
					<textarea class="form-control" rows="10" name="deskripsi">
						<?php echo $default['profil']?>
						
					</textarea>
					<br>
					<div class="clearfix form-actions">
						<button class="btn btn-info" type="submit" name="simpan">
						<i class="ace-icon fa fa-check bigger-110"></i>Update
						</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>