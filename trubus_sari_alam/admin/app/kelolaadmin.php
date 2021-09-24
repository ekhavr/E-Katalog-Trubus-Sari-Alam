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
				Kelola Admin
			</h2>
			<div class="page-content">
			<!-- TABEL -->
				<div class="row">
					<div class="col-xs-12">
						<a href="index.php?val=tambahadmin">
						<button class="btn btn-lg btn-primary" href="#" role="button">
							<i class="ace-icon fa fa-plus"></i>
							Tambah Administrator
						</button>
					</a>
					<br/><br/>
						<table id="simple-table" class="table  table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Kontak</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$tampil = "SELECT * FROM admin order by id_admin desc ";
							$hasil  = mysqli_query($con,$tampil);
							$no=1;
							while ($r=mysqli_fetch_array($hasil)){
							?>
							<tr>
								<td width="5%" align="center"><?php echo $no; ?></td>
								<td><?php echo $r['username']; ?></td>
								<td><?php echo $r['nama']; ?></td>
								<td><?php echo $r['email']; ?></td>
								<td><?php echo $r['kontak']; ?></td>
								<td width="20%" align="center">
									<a href="index.php?val=adminubah&username&username=<?php echo $r['username']; ?>" title="Ubah">
										<!-- <button class="btn btn-xs btn-success" title="Edit Cara Pesan">
											<i class="ace-icon fa fa-edit bigger-150"></i>
												Edit
										</button> -->
									</a>
									<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
									href="index.php?val=adminhapus&username=<?php echo $r['id_admin'];?>" title="Hapus">
										<button class="btn btn-xs btn-danger" title="delete">
											<i class="ace-icon fa fa-trash-o align-top bigger-135"></i>
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
			</div>
		</div><!-- /.row -->
	</div><!-- /.page-content -->
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
