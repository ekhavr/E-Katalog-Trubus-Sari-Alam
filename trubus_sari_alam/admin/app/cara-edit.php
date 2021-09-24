<?php
	if(isset($_POST['simpan'])){
		$sql=$con->query("update cara_order set
						judul ='".$_POST['judul']."',
						deskripsi ='".$_POST['deskripsi']."'
						where id_cara ='".$_POST['id']."'
						");
		if($sql){
			echo '
			<meta http-equiv="refresh" content="0;URL=index.php?val=carapesan" />';
		}
	}
	$sqldefault=$con->query("select * from cara_order where id_cara='".$_GET['id']."'");
	$default = $sqldefault->fetch_assoc();
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Cara Edit</li>
			</ol>
		</div><!--/.row-->
		<div class="page-content">
				<h2>
					Edit Cara Pesan
				</h2>
			<div class="row">
				<form action="" method="POST">
				<div class="col-xs-12">
					<input type="hidden" name="id" value="<?php echo $default['id_cara']?>">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Judul Cara Pesan</label>
						<div class="col-sm-9">
							<input type="text" name="judul" id="form-field-1" value="<?php echo $default['judul']?>" class="col-xs-10 col-sm-5" />
						</div><br><br>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi Cara Pesan</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="deskripsi"><?php echo $default['deskripsi']?></textarea>
						</div>
					</div><br><br><br>
					<div class="clearfix form-actions">
						<button class="btn btn-info" type="submit" name="simpan">
						<i class="ace-icon fa fa-check bigger-110"></i>Update
						</button>
					</div>
					</div>
				</form>
			</div>
				</div>
			</div>
		</div>
	</div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>