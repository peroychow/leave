<?php
	/*$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("db_cuti");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
	}*/
	$con = mysqli_connect("localhost","root","","db_cuti");

	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

?>