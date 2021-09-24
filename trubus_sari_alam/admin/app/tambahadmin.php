<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Kelola Admin</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="page-content">
				<h2>
					Tambah Admin
				</h2>
			<div class="row">
				<div class="col-sm-6">
					<form class="form-horizontal" role="form" method="POST" action="index.php?val=prosestambahadmin">
						<div class="col-sm-6 bg" >
							<div class="form-group">
								<input type="text" name="username" placeholder="Username" class="col-sm-11" required="true" />
							</div>
							<div class="form-group">
								<input type="password" name="password" placeholder="Password" class="col-sm-11" required="true" />
							</div>
							<div class="form-group">
								<input type="text" name="nama" placeholder="Nama" class="col-sm-11" required="true" />
							</div>
							<div class="form-group">
								<input type="text" name="email" placeholder="Email" class="col-sm-11" required="true" />
							</div>
							<div class="form-group">
								<input type="number" name="kontak" placeholder="Kontak" class="col-sm-11" required="true"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 bg">
								<div class="clearfix form-actions">
									<button class="btn btn-info" type="submit" name="simpan">
									<i class="ace-icon fa fa-check bigger-110"></i>Simpan
									</button>
									&nbsp; &nbsp; &nbsp;
									<button class="btn btn-info" type="reset">
										<i class="ace-icon fa fa-undo bigger-110"></i>Reset
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div><!-- /.row -->


			</div>
		</div><!-- /.row -->
	</div><!-- /.page-content -->
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
