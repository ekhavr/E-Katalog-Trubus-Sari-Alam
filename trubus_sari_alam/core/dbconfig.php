<?php
$DBServer	= "localhost";
$DBUser		= "root";
$DBPass		= "ekni0920";
$DBName		= "trubus_sari_alam";

//create koneksi
$con = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);

// check connection
if (!$con) {
	die("Koneksi Gagal: ".mysqli_connect_error());
}

?>
