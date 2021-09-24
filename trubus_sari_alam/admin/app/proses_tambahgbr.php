		<?php
			if (isset($_POST['kirim'])) {
				$jumlah = count($_FILES['gambar']['name']);
				if ($jumlah > 0) {
					$id_produk	= $_POST['id_produk'] ;
					for ($i=0; $i < $jumlah; $i++) { 
						$file_name = $_FILES['gambar']['name'][$i];
						$tmp_name = $_FILES['gambar']['tmp_name'][$i];				
						move_uploaded_file($tmp_name, "../gambar/".$file_name);
						$con->query("INSERT INTO gambar (id_produk,gambar_produk) VALUES ('$id_produk','$file_name')");				
					}
					echo "<script>alert('Data berhasil di tambahkan!');</script>";
					echo "<meta http-equiv='refresh' content='0;URL=index.php?val=daftarproduk' />  ";
				}
				else{
					echo "Gambar tidak ada";
				}
			}
		?>
