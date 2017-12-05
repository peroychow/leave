<?php
	include "dist/koneksi.php";
	$file = $_FILES['fileupload']['tmp_name'];
	$handle = fopen($file, "r");

	while (($data = fgetcsv($handle, 1000, ",")) !== false) {
		$import = "INSERT INTO table_trial(nama, email, alamat, umur) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
		$query = mysqli_query ($con, $import);
	}
	fclose($handle);
	echo "<br><strong>Import data selesai.</strong>";
?>
