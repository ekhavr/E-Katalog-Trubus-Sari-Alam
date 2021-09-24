<?php
			$username	= $_POST['username'] ;
			$password	= $_POST['password'] ;
			$nama		= $_POST['nama'] ;
			$email		= $_POST['email'] ;
			$kontak		= $_POST['kontak'] ;

if(isset($_POST['simpan'])){
		//Menyimpan data ke dalam database Mysql
			$query_insert = "INSERT INTO admin (username,
													password,
													nama,
													email,
													kontak) 
											VALUES ('".$username."',
													MD5('".$password."'),
													'".$nama."',
													'".$email."',
													'".$kontak."')";
			$insert = $con->query($query_insert);
	if($insert){
		echo "<script>alert('Data berhasil di tambahkan!');</script>";
		echo '
		<meta http-equiv="refresh" content="0;URL=index.php?val=kelolaadmin" />';
		}
	}
?>