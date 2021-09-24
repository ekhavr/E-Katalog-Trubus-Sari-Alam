<?php
	$sql1=$con->query("delete from produk where
					id_produk='".$_GET['id']."'");
	$sql2=$con->query("delete from gambar where
					id_produk='".$_GET['id']."'");
?>
<meta http-equiv="refresh" content="0;URL=index.php?val=daftarproduk" />  