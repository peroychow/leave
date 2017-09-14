<section class="content-header">
    <h1>Input<small>Data Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Input Data Pegawai</li>
    </ol>
</section>
<div class="register-box">
<?php
	if ($_POST['save'] == "save") {
		$id_number							= $_POST['id_number'];
		$name								= $_POST['name'];
		$job_title							= $_POST['job_title'];
		$department							= $_POST['department'];
		$source								= $_POST['source'];
		$join_date							= $_POST['join_date'];
		$probation_end						= $_POST['probation_end'];
		$last_date_resign 					= $_POST['last_date_resign'];
		$employment_status					= $_POST['employment_status'];
		$gender								= $_POST['gender'];
		$phone								= $_POST['phone'];
		$emergency_contact_name				= $_POST['emergency_contact_name'];
		$emergency_contact_number			= $_POST['emergency_contact_number'];
		$email								= $_POST['email'];
		$nik	    						= $_POST['nik'];
		$place_of_birth						= $_POST['place_of_birth'];
		$date_of_birth						= $_POST['date_of_birth'];
		$name_npwp							= $_POST['name_npwp'];
		$npwp 								= $_POST['npwp'];
		$address_npwp						= $_POST['address_npwp'];
		$bank								= $_POST['bank'];
		$bank_rek_number					= $_POST['bank_rek_number'];
		$bank_acc_name						= $_POST['bank_acc_name'];
		$bpjs_ketenagakerjaan_name			= $_POST['bpjs_ketenagakerjaan_name'];
		$bpjs_ketenagakerjaan_number		= $_POST['bpjs_ketenagakerjaan_number'];
		$marital_status						= $_POST['marital_status'];
		$last_education_period_from			= $_POST['last_education_period_from'];
		$last_education_period_to 			= $_POST['last_education_period_to'];
		$last_education_degree				= $_POST['last_education_degree'];
		$last_education_gpa 				= $_POST['last_education_gpa'];
		$last_education_university 			= $_POST['last_education_university'];
		$last_education_degree_study 		= $_POST['last_education_degree_study'];
		$last_education2_period_from		= $_POST['last_education2_period_from'];
		$last_education2_period_to 			= $_POST['last_education2_period_to'];
		$last_education2_degree				= $_POST['last_education2_degree'];
		$last_education2_gpa 				= $_POST['last_education2_gpa'];
		$last_education2_university 		= $_POST['last_education2_university'];
		$last_education2_degree_study 		= $_POST['last_education2_degree_study'];
		$previous_employment_period_from 	= $_POST['previous_employment_period_from'];
		$previous_employment_period_to 		= $_POST['previous_employment_period_to'];
		$previous_employment_company 		= $_POST['previous_employment_company'];
		$previous_employment_position 		= $_POST['previous_employment_position'];
		$previous_employment2_period_from 	= $_POST['previous_employment2_period_from'];
		$previous_employment2_period_to 	= $_POST['previous_employment2_period_to'];
		$previous_employment2_company 		= $_POST['previous_employment2_company'];
		$previous_employment2_position 		= $_POST['previous_employment2_position'];
		$address 							= $_POST['address'];
		$reporting_to						= $_POST['reporting_to'];
		$passwd								= md5($_POST['date_of_birth']);


	include "dist/koneksi.php";

		if (empty($_POST['id_number']) || empty($_POST['name'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-pegawai' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}

		else{

		$insert = "
			INSERT INTO table_employee(id_number, name, job_title, department, source, join_date, probation_end, last_date_resign, employment_status, gender, phone, emergency_contact_name, emergency_contact_number, email, nik, place_of_birth, date_of_birth, name_npwp, npwp, address_npwp, bank, bank_rek_number, bank_acc_name, bpjs_ketenagakerjaan_name, bpjs_ketenagakerjaan_number, marital_status, last_education_period_from, last_education_period_to, last_education_degree, last_education_degree_study ,last_education_university ,last_education_gpa ,last_education2_period_from ,last_education2_period_to ,last_education2_degree ,last_education2_degree_study ,last_education2_university ,last_education2_gpa ,previous_employment_period_from ,previous_employment_period_to ,previous_employment_company ,previous_employment_position ,previous_employment2_period_from ,previous_employment2_period_to ,previous_employment2_company ,previous_employment2_position ,address, remaining_leave, reporting_to)
			VALUES ('$id_number', '$name', '$job_title', '$department', '$source', '$join_date', '$probation_end', '$last_date_resign', '$employment_status', '$gender', '$phone', '$emergency_contact_name', '$emergency_contact_number', '$email', '$nik', '$place_of_birth', '$date_of_birth', '$name_npwp', '$npwp', '$address_npwp', '$bank', '$bank_rek_number', '$bank_acc_name', '$bpjs_ketenagakerjaan_name', '$bpjs_ketenagakerjaan_number', '$marital_status', '$last_education_period_from', '$last_education_period_to', '$last_education_degree', '$last_education_degree_study', '$last_education_university', '$last_education_gpa', '$last_education2_period_from', '$last_education2_period_to', '$last_education2_degree', '$last_education2_degree_study', '$last_education2_university', '$last_education2_gpa', '$previous_employment_period_from', '$previous_employment_period_to', '$previous_employment_company', '$previous_employment_position', '$previous_employment2_period_from', '$previous_employment2_period_to', '$previous_employment2_company', '$previous_employment2_position', '$address', 0, '$reporting_to');
		";

		$query = mysqli_query ($con, $insert);

		/*$insert_user = "
			INSERT INTO users(id_number, password, access, active)
			VALUES ('$id_number', '$passwd', 4, 'N')
		";

		//$query = mysqli_query ($con, $insert_user);
		*/
		if($query){
			echo "<div class='register-logo'><b>Input Data</b> Successful!</div>
				<div class='register-box-body'>
					<p>Input Data Pegawai Berhasil</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-pegawai' class='btn btn-danger btn-block btn-flat'>Next >></button>
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
</div>
