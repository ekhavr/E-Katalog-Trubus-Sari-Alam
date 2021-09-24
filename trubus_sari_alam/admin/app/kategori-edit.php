<?php
	if(isset($_POST['simpan'])){
		$sql=$con->query("update kategori set
						nama_kategori ='".$_POST['kategori']."'
						where id_kategori ='".$_POST['id']."'
						");
		if($sql){
			echo '<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
						<strong>Selamat!</strong>
							Data berhasil diupdate
					<br />
		  		  </div> ';
			echo '
			<meta http-equiv="refresh" content="0;URL=index.php?val=kategori" />';
		}
	}
	$sqldefault=$con->query("select * from kategori where id_kategori='".$_GET['id']."'");
	$default = $sqldefault->fetch_assoc();
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kategori</li>
			</ol>
		</div><!--/.row-->
		<div class="page-content">
				<h2>
					Edit Kategori
				</h2>
			<div class="row">
				<div class="col-xs-12">
				<form action="" method="POST">
					<input type="hidden" name="id" value="<?php echo $default['id_kategori']?>">
					<div class="form-group">
					<input type="text" name="kategori" class="form-control" value="<?php echo $default['nama_kategori']?>"/>
					</div>
					<div class="clearfix form-actions">
						<button class="btn btn-warning" type="submit" name="simpan">
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