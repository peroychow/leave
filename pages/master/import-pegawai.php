<section class="content-header">
    <h1>Update<small>Import Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Import Data Pegawai</li>
    </ol>
</section>

<?php
	include "dist/koneksi.php";
	$file = $_FILES['fileupload']['tmp_name'];
	$handle = fopen($file, "r");

	while (($data = fgetcsv($handle, 1000, ",")) !== false) {
		$import = "INSERT INTO table_employee(id_number, name, job_title, department, source, join_date, probation_end, last_date_resign, employment_status, gender, phone, phone2, emergency_contact_name, emergency_contact_number, email, nik, place_of_birth, date_of_birth, name_npwp, npwp, address_npwp, bank, bank_rek_number, bank_acc_name, bpjs_ketenagakerjaan_name, bpjs_ketenagakerjaan_number, marital_status, marriage_children, last_education_period_from, last_education_period_to, last_education_degree, last_education_degree_study, last_education_university, last_education_gpa, last_education2_period_from, last_education2_period_to, last_education2_degree, last_education2_degree_study, last_education2_university, last_education2_gpa, previous_employment_period_from, previous_employment_period_to, previous_employment_company, previous_employment_position, previous_employment2_period_from, previous_employment2_period_to, previous_employment2_company, previous_employment2_position, address, remaining_leave, reporting_to) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[11]','$data[12]','$data[13]','$data[14]','$data[15]','$data[16]','$data[17]','$data[18]','$data[19]','$data[20]','$data[21]','$data[22]','$data[23]','$data[24]','$data[25]','$data[26]','$data[27]','$data[28]','$data[29]','$data[30]','$data[31]','$data[32]','$data[33]','$data[34]','$data[35]','$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]','$data[45]','$data[46]','$data[47]','$data[48]','$data[49]','$data[50]')";
		$query = mysqli_query ($con, $import);
	}
	fclose($handle);
	echo "<br><strong>Import data selesai.</strong>";
?>
