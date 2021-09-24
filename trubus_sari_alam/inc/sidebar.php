<div class="w_sidebar">
	<div class="w_nav1">
		<h4>Kategori</h4>
		<ul>
		<?php
		$tampil = "select * from kategori ";
		$hasil  = mysqli_query($con,$tampil);
		while ($r=mysqli_fetch_array($hasil)){
		echo '<li><a href="index.php?page=kategori&cat='.$r['id_kategori'].'">'.$r['nama_kategori'].'</a></li>';
		}
		?>
		</ul>
	</div>
</div>
<br>
