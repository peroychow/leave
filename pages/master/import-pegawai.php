<section class="content-header">
    <h1>Update<small>Import Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Import Data Pegawai</li>
    </ol>
</section>

<?php 
	include "dist/koneksi.php";
			if (isset($_POST['import'])) {
			$ok = true;
			$file = $_FILES['csv_file']['tmp_name'];
			$handle = fopen($file, "r");
			if ($file == NULL) {
				error(_('Please select a file to import'));
				redirect(page_link_to('home-hrd?page=import-pegawai'));
			}
			else {
				while (($fileop = fgetcsv($handle, 1000, ",")) !== false) {
					$id_number							= $fileop[0];
					$name								= $fileop[1];
					$job_title							= $fileop[2];
					$department							= $fileop[3];
					$source								= $fileop[4];
					$join_date							= $fileop[5];
					$probation_end						= $fileop[6];
					$last_date_resign 					= $fileop[7];
					$employment_status					= $fileop[8];
					$gender								= $fileop[9];
					$phone								= $fileop[10];
					$emergency_contact_name				= $fileop[11];
					$emergency_contact_number			= $fileop[12];
					$email								= $fileop[13];
					$nik	    						= $fileop[14];
					$place_of_birth						= $fileop[15];
					$date_of_birth						= $fileop[16];
					$name_npwp							= $fileop[17];
					$npwp 								= $fileop[18];
					$address_npwp						= $fileop[19];
					$bank								= $fileop[20];
					$bank_rek_number					= $fileop[21];
					$bank_acc_name						= $fileop[22];
					$bpjs_ketenagakerjaan_name			= $fileop[23];
					$bpjs_ketenagakerjaan_number		= $fileop[24];
					$marital_status						= $fileop[25];
					$last_education_period_from			= $fileop[26];
					$last_education_period_to 			= $fileop[27];
					$last_education_degree				= $fileop[28];
					$last_education_gpa 				= $fileop[29];
					$last_education_university 			= $fileop[30];
					$last_education_degree_study 		= $fileop[31];
					$last_education2_period_from		= $fileop[32];
					$last_education2_period_to 			= $fileop[33];
					$last_education2_degree				= $fileop[34];
					$last_education2_gpa 				= $fileop[35];
					$last_education2_university 		= $fileop[36];
					$last_education2_degree_study 		= $fileop[37];
					$previous_employment_period_from 	= $fileop[38];
					$previous_employment_period_to 		= $fileop[39];
					$previous_employment_company 		= $fileop[40];
					$previous_employment_position 		= $fileop[41];
					$previous_employment2_period_from 	= $fileop[42];
					$previous_employment2_period_to 	= $fileop[43];
					$previous_employment2_company 		= $fileop[44];
					$previous_employment2_position 		= $fileop[45];
					$address 							= $fileop[46];
					$reporting_to						= $fileop[47];
					$remaining_leave					= $fileop[48];
					$passwd								= md5($fileop[16]);
				
					if ($ok) {
						$insert = "
							INSERT INTO table_employee(id_number, name, job_title, department, source, join_date, probation_end, last_date_resign, employment_status, gender, phone, emergency_contact_name, emergency_contact_number, email, nik, place_of_birth, date_of_birth, name_npwp, npwp, address_npwp, bank, bank_rek_number, bank_acc_name, bpjs_ketenagakerjaan_name, bpjs_ketenagakerjaan_number, marital_status, last_education_period_from, last_education_period_to, last_education_degree, last_education_degree_study ,last_education_university ,last_education_gpa ,last_education2_period_from ,last_education2_period_to ,last_education2_degree ,last_education2_degree_study ,last_education2_university ,last_education2_gpa ,previous_employment_period_from ,previous_employment_period_to ,previous_employment_company ,previous_employment_position ,previous_employment2_period_from ,previous_employment2_period_to ,previous_employment2_company ,previous_employment2_position ,address, remaining_leave, reporting_to)
							VALUES ('$id_number', '$name', '$job_title', '$department', '$source', '$join_date', '$probation_end', '$last_date_resign', '$employment_status', '$gender', '$phone', '$emergency_contact_name', '$emergency_contact_number', '$email', '$nik', '$place_of_birth', '$date_of_birth', '$name_npwp', '$npwp', '$address_npwp', '$bank', '$bank_rek_number', '$bank_acc_name', '$bpjs_ketenagakerjaan_name', '$bpjs_ketenagakerjaan_number', '$marital_status', '$last_education_period_from', '$last_education_period_to', '$last_education_degree', '$last_education_degree_study', '$last_education_university', '$last_education_gpa', '$last_education2_period_from', '$last_education2_period_to', '$last_education2_degree', '$last_education2_degree_study', '$last_education2_university', '$last_education2_gpa', '$previous_employment_period_from', '$previous_employment_period_to', '$previous_employment_company', '$previous_employment_position', '$previous_employment2_period_from', '$previous_employment2_period_to', '$previous_employment2_company', '$previous_employment2_position', '$address', $remaining_leave, '$reporting_to');
						";
						$query = mysqli_query ($con, $insert);
					}
				}
				if($query){
					echo "<div class='register-logo'><b>Import Data</b> Successful!</div>
						<div class='register-box-body'>
							<p>Import Data Pegawai Berhasil</p>
							<div class='row'>
								<div class='col-xs-8'></div>
								<div class='col-xs-4'>
									<button type='button' onclick=location.href='home-hrd.php?page=form-master-pegawai' class='btn btn-danger btn-block btn-flat'>Next >></button>
								</div>
							</div>
						</div>";
				}
				else {
					echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
				}
			}
		}
?>