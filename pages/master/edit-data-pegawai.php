<section class="content-header">
    <h1>Edit<small>Data Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Data Pegawai</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_number'])) {
		$id_number = $_GET['id_number'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}

	if ($_POST['edit'] == "edit") {
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
		
		$update= mysqli_query ($con, "
			UPDATE table_employee 
			SET name='$name', 
				job_title='$job_title', 
				department='$department',
				source='$source',
				join_date='$join_date',
				probation_end='$probation_end',
				last_date_resign='$last_date_resign',
				employment_status='$employment_status',
				gender='$gender',
				phone='$phone',
				emergency_contact_name='$emergency_contact_name',
				emergency_contact_number='$emergency_contact_number',
				email='$email',
				nik='$nik',
				place_of_birth='$place_of_birth',
				date_of_birth='$date_of_birth',
				name_npwp='$name_npwp',
				npwp='$npwp',
				address_npwp='$address_npwp',
				bank='$bank',
				bank_rek_number='$bank_rek_number',
				bank_acc_name='$bank_acc_name',
				bpjs_ketenagakerjaan_name='$bpjs_ketenagakerjaan_name',
				bpjs_ketenagakerjaan_number='$bpjs_ketenagakerjaan_number',
				marital_status='$marital_status',
				last_education_period_from='$last_education_period_from',
				last_education_period_to='$last_education_period_to',
				last_education_degree='$last_education_degree',
				last_education_gpa='$last_education_gpa',
				last_education_university='$last_education_university',
				last_education_degree_study='$last_education_degree_study',
				last_education2_period_from='$last_education2_period_from',
				last_education2_period_to='$last_education2_period_to',
				last_education2_degree='$last_education2_degree',
				last_education2_gpa='$last_education2_gpa',
				last_education2_university='$last_education2_university',
				last_education2_degree_study='$last_education2_degree_study',
				previous_employment_period_from='$previous_employment_period_from',
				previous_employment_period_to='$previous_employment_period_to',
				previous_employment_company='$previous_employment_company',
				previous_employment_position='$previous_employment_position',
				previous_employment2_period_from='$previous_employment2_period_from',
				previous_employment2_period_to='$previous_employment2_period_to',
				previous_employment2_company='$previous_employment2_company',
				previous_employment2_position='$previous_employment2_position',
				address='$address',
				reporting_to='$reporting_to'
			WHERE id_number='$id_number'");
		if($update){
			include "dist/koneksi.php";

			$checkAccess = mysqli_query($con, 
				"SELECT table_employee.id_number, table_employee.name, table_access.name AS access
				FROM users
				INNER JOIN table_employee
				ON users.id_number = table_employee.id_number
				INNER JOIN table_access
				ON users.access = table_access.id_access
				WHERE users.id_number = '$id_number';"
			);

			$result = mysqli_fetch_array($checkAccess);
			$accessID = $result['access'];
			
			if($accessID == 'Admin') {
				$action = "home-admin.php";
			}
			else {
				$action = "home-pegawai.php";
			}

			echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Edit Employee ".$id_number." Success</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='".$action."' class='btn btn-primary btn-block btn-flat'>Next >></button>
						</div>
					</div>
				</div>";
		}
		else {
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
		}
	}	
?>
</div>