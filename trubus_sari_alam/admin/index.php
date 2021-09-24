<?php
session_start();
/*
 File induk yang akan dipanggil ketika web diakses
*/
define('BASEPATH','true');
define ('SITE_ROOT', realpath(dirname(__FILE__)));
include("../core/dbconfig.php");
if(isset($_SESSION['auth']) && $_SESSION['auth']=="ok"){
  //jika sudah berhasil login
  include "app/index.php";
}else{
  //jika belum login
  include "login.php";
}
?>