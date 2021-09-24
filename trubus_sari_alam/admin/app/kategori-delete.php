<?php
	$sql=$con->query("delete from kategori where
					id_kategori='".$_GET['id']."'");
?>
<script type="text/javascript">
	header('location:index.php?val=kategori');
</script>
<meta http-equiv="refresh" content="0;URL=index.php?val=kategori" />  