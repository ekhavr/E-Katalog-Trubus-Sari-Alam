<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profil</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="page-content">
				<h2>
					Profil
				</h2>
				<div class="row">
					<div class="col-xs-12">
						<table id="simple-table" class="table  table-bordered table-hover">
							<thead>
								<tr>
									<th>Detail Profil</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$sql=$con->query("select * from profil order by id_profil desc");
								while($row=$sql->fetch_assoc()){
								echo '
									<tr>
										<td>'.$row['profil'].'</td>
										<td class="center">
										<a href="index.php?val=profil-edit&id='.$row['id_profil'].'">
											<button class="btn btn-xs btn-success" title="Edit Cara Pesan">
												<i class="ace-icon fa fa-edit bigger-150"></i>
													Edit
											</button>
										</a>
										</td>
									</tr>
								';
								}
							?>
							</tbody>
						</table>
					</div><!-- /.span -->
				</div><!-- /.row -->
		</div>
	</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
