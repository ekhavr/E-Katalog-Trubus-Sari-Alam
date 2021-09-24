<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kategori</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="page-content">
				<h2>
					Kategori
				</h2>
			<div id="my-modal" class="modal fade" tabindex="-1" >
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="smaller lighter blue no-margin">Masukan Nama Kategori</h3>
						</div>
						<div class="modal-body">
							<?php
							include ("../core/dbconfig.php"); 
								if(isset($_POST['simpan'])){
									$sql=$con->query("insert into kategori set
													nama_kategori='".$_POST['kategori']."'
													");
								}
							?>
							<form class="form-horizontal" role="form" method="POST">
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="kategori" id="form-field-1-1" placeholder="Masukan Nama Kategori" class="form-control" required="true" />
									</div>
									</div>
									<div class="modal-footer"> <!-- TOMBOL -->
										<button class="btn btn-sm btn-primary" type="" name="simpan">
											<i class="ace-icon fa fa-save"></i>
											Simpan
										</button>
										<button class="btn btn-sm btn-danger" data-dismiss="modal">
											<i class="ace-icon fa fa-times"></i>
											Tutup
										</button>
									</div>
							</form>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
<!-- TABEL -->
				<div class="row">
					<div class="col-xs-12">
					<button class="btn btn-lg btn-warning" href="#my-modal" data-toggle="modal">
						<i class="ace-icon fa fa-plus"></i>
						Tambah Kategori
					</button><br /><br />
					<table id="simple-table" class="table  table-bordered table-hover" >
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kategori</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$tampil = "SELECT * FROM kategori order by id_kategori desc ";
						$hasil  = mysqli_query($con,$tampil);
						$no=1;
						while ($r=mysqli_fetch_array($hasil)){
						?>
						<tr>
							<td width="5%" align="center"><?php echo $no; ?></td>
							<td><?php echo $r['nama_kategori']; ?></td>
							<td width="20%" align="center">
								<a href="index.php?val=kategori-edit&id=<?php echo $r['id_kategori']; ?>" title="Ubah">
									<button class="btn btn-xs btn-success" title="Edit">
										<i class="ace-icon fa fa-edit align-top bigger-135"></i>
											Edit
									</button>
								</a>
								<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"  
								href="index.php?val=kategori-delete&id=<?php echo $r['id_kategori'];?>" title="Hapus" >
									<button class="btn btn-xs btn-danger" title="delete">
										<i class="ace-icon fa fa-trash align-top bigger-135"></i>
											Hapus
									</button>
								</a>
							</td>
						</tr>
						<?php
						$no++;
						}
						?>
						</tbody>
						</table>
					</div><!-- /.span -->
				</div><!-- /.row -->
		</div><!-- /.row -->
</div><!-- /.page-content -->
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
