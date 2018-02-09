<?php
	include "dist/koneksi.php";
	
	//get record from databases;
	$showdata = mysqli_query($con, "
		SELECT * FROM table_trial;
	");

	if($showdata->num_rows > 0) {
		$delimiter = ",";
		$filename = "members_" . date('Y-m-d') . ".csv";

		//create file pointer
		$f = fopen('php://memory', 'w');

		//set column headers
		$fields = array('ID', 'Nama', 'Email', 'Alamat', 'Usia');
		fputcsv($f, $fields, $delimiter);

		//output each row of the data, format line as csv and write to file pointer
		while($sho = mysqli_fetch_array($showdata)){
			$linedata = array($sho['id'], $sho['nama'], $sho['email'], $sho['alamat'], $sho['umur']);
			fputcsv($f, $linedata, $delimiter);
		}

		//move back to beginning of file
		fseek($f, 0);

		//set header to download file rather than displayed
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename='.$filename.'.csv');
		file_put_contents($filename, "$header\n$sho");	

		//output all remaining data on a file pointer 
		fpassthru($f);
	}
	exit;	
?>
