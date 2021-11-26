<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$nama_db = "db_barang";

	$konek = mysqli_connect($server,$user,$pass,$nama_db);
 	if(mysqli_connect_errno()){
  		echo "Tidak dapat terhubung ke database".mysqli_connect_error();
	 }

?>