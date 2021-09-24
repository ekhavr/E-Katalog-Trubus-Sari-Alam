<?php
	if(isset($_POST['simpan'])){
		$sql=$con->query("update kontak set
						no_telp ='".$_POST['no_telp']."',
						no_wa ='".$_POST['no_wa']."',
						alamat ='".$_POST['alamat']."'
						where id_kontak ='".$_POST['id']."'
						");
		if($sql){
			echo '
			<meta http-equiv="refresh" content="0;URL=index.php?val=kontak" />';
		}
	}
	$sqldefault=$con->query("select * from kontak where id_kontak='".$_GET['id']."'");
	$default = $sqldefault->fetch_assoc();
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kontak</li>
			</ol>
		</div><!--/.row-->
		<div class="page-content">
				<h2>
					Edit Kontak
				</h2>
			<div class="row">
				<div class="col-xs-12">
				<form action="" method="POST">
					<input type="hidden" name="id" value="<?php echo $default['id_kontak']?>">
						<div class="form-group">
							<input type="text" name="no_telp" class="form-control" value="<?php echo $default['no_telp']?>"/>
						</div>
						<div class="form-group">
							<input type="text" name="no_wa" class="form-control" value="<?php echo $default['no_wa']?>"/>
						</div>
						<div class="form-group">
							<input type="text" name="alamat" class="form-control" value="<?php echo $default['alamat']?>"/>
						</div>
				</div>
				<br><br><br><br><br><br><br>
					
						<div class="col-sm-12">
							<div class="clearfix form-actions">
								<button class="btn btn-info" type="submit" name="simpan">
								<i class="ace-icon fa fa-check bigger-150"></i>Update
								</button>
							</div>
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