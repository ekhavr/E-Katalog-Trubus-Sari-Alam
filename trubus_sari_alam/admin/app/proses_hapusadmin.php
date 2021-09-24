<?php
	$sql=$con->query("delete from admin where
					id_admin='".$_GET['username']."'");
?>
<meta http-equiv="refresh" content="0;URL=index.php?val=kelolaadmin" />  