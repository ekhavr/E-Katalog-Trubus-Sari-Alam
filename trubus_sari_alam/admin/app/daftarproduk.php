<?php
include ("../core/rupiah.php");
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Produk</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="page-content">
			<h2>
				Produk
			</h2>
			<div class="row">
				<div class="col-xs-12">
					<a href="index.php?val=tambahproduk">
						<button class="btn btn-lg btn-success" href="#" role="button">
							<i class="ace-icon fa fa-plus"></i>
							Tambah Produk
						</button>
					</a>
					<br/><br/>
					<table id="simple-table" class="table  table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Kategori</th>
								<th>Kode</th>
								<th>Nama Produk</th>
								<th>Deskripsi</th>
								<th>Merk</th>
								<th>Netto</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Gambar</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php

						$tampil = "select * from produk a
									left join kategori b on a.kategori_produk=b.id_kategori
									order by id_produk desc ";

						$hasil  = mysqli_query($con,$tampil);
						$no=1;

						while ($r=mysqli_fetch_array($hasil)){
							$sql = mysqli_query($con,"select * from gambar where id_produk='".$r['id_produk']."' order by rand()");
							$row = mysqli_fetch_array($sql);
							$num_image = $sql->num_rows;
						?>
						<tr>
							<td width="5%" align="center"><?php echo $no; ?></td>
							<td><?php echo $r['nama_kategori']; ?></td>
							<td><?php echo $r['kode_produk']; ?></td>
							<td><?php echo $r['nama_produk']; ?></td>
							<td><?php echo $r['deskripsi']; ?></td>
							<td><?php echo $r['merk_produk']; ?></td>
							<td><?php echo $r['netto_produk']; ?></td>
							<td align="right">Rp. <?php echo rupiah($r['harga_produk']); ?></td>
							<td><?php echo $r['stok_produk']; ?></td>
							
							<td align="center">
							<?php
								if($num_image==0){
									echo '<img src="../gambar/small_default.png" class="img-thumbnail" width="50px">';
								}else{
									echo '<img src="../gambar/'.$row['gambar_produk'].'" class="img-thumbnail" width="50px">';
								}
							?>

							</td>
							<td align="left">
								<a href="index.php?val=produk-edit&id=<?php echo $r['id_produk']; ?>" title="Ubah">
									<span class="btn btn-xs btn-success"> <i class="fa fa-edit"></i></span>
								</a>
								<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"  href="index.php?val=produk-delete&id=<?php echo $r['id_produk'];?>" title="Hapus Data" >
									<span class="btn btn-xs btn-danger"> <i class="fa fa-trash-o"></i></span>
								</a>
							</td>
						</tr>
						<?php
						$no++;
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
