<?php
	if (isset($_GET['id_number'])) {
	$id_number = $_GET['id_number'];
	}
	else {
		die ("Error. No Kode Selected! ");
	}

	include "dist/koneksi.php";

	$showEmployee = mysqli_query($con, "
		SELECT * FROM table_employee ORDER BY id_number;
	");

	$showDepartment = mysqli_query($con, "
		SELECT * FROM table_department;
	");

	$showEmployeeStatus = mysqli_query($con, "
		SELECT * FROM table_employment_status;
	");

	$showBank = mysqli_query($con, "
		SELECT * FROM table_bank;
	");

	$showMarriageStatus = mysqli_query($con, "
		SELECT * FROM table_marital_status;
	");

	$showDegree = mysqli_query($con, "
		SELECT * FROM table_degree;
	");

	$showDegree2 = mysqli_query($con, "
		SELECT * FROM table_degree;
	");

	$showManager = mysqli_query($con, "
		SELECT table_employee.id_number AS id_employee, table_employee.name, users.password, table_access.name AS access, users.active
		FROM users
		INNER JOIN table_employee
		ON users.id_number = table_employee.id_number
		INNER JOIN table_access
		ON users.access = table_access.id_access
		WHERE table_access.id_access='3';
	");

	$takeEmployee = mysqli_query($con, "SELECT * FROM table_employee WHERE id_number='$id_number'");
	$result = mysqli_fetch_array($takeEmployee);
		$id_number = $result['id_number'];

	$checkAccess = mysqli_query($con, 
			"SELECT table_employee.id_number, table_employee.name, table_access.name AS access
			FROM users
			INNER JOIN table_employee
			ON users.id_number = table_employee.id_number
			INNER JOIN table_access
			ON users.access = table_access.id_access
			WHERE users.id_number = '$id_number';"
		);

	$accessCheck = mysqli_fetch_array($checkAccess);
	$accessID = $accessCheck['access'];
?>

<section class="content-header">
	<h1>Settings <small>Employee</small></h1>
	<ol class="breadcrumb">
		<li><a href="home-pegawai.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
		<li class="active">Edit User</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><i class="fa fa-plus"></i> Update Personal Data<a data-toggle="collapse" data-target="#editdata" href="#editdata" class="collapsed"></a></h4>
							</div>
							<div id="editdata" class="panel-collapse collapse">
								<div class="panel-body">

									<?php 
										if($accessID=='Admin') {
											echo '
												<form action="home-admin.php?page=edit-data-pegawai&id_number= '.$id_number.'" class="form-horizontal" method="POST" enctype="multipart/form-data">
											';
										}
										else if($accessID=='HR') {
											echo '
												<form action="home-hrd.php?page=edit-data-pegawai&id_number= '.$id_number.'" class="form-horizontal" method="POST" enctype="multipart/form-data">
											';	
										}
										else {
											echo '
												<form action="home-pegawai.php?page=edit-data-pegawai&id_number= '.$id_number.'" class="form-horizontal" method="POST" enctype="multipart/form-data">
											';
										}
									?>

									<!--<form action="home-pegawai.php?page=edit-data-pegawai&id_number=<?=$id_number?>" class="form-horizontal" method="POST" enctype="multipart/form-data">-->
										<div class="form-group">
											<label class="col-sm-3 control-label">ID Number</label>
											<div class="col-sm-7">
												<input type="text" name="id_number" class="form-control" maxlength="15" value="<?= $result['id_number']; ?>" disabled="disabled">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label">Name</label>
											<div class="col-sm-7">
												<input type="text" name="name" class="form-control" value="<?= $result['name']; ?>" maxlength="40">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Job Title</label>
											<div class="col-sm-7">
												<input type="text" name="job_title" class="form-control" value="<?= $result['job_title']; ?>" maxlength="40">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Department</label>
											<div class="col-sm-7">
												<select name="department" class="form-control">
													<?php
														while($dept=mysqli_fetch_array($showDepartment)){
													?>
														<option value="<?php echo $dept['id_dep']; ?>" <?php if($result['department']==$dept['id_dep']) echo 'selected="selected"'; ?> ><?php echo $dept['name_dept']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Source</label>
											<div class="col-sm-7">
												<input type="text" name="source" class="form-control" maxlength="40" value="<?= $result['source']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Reporting To</label>
											<div class="col-sm-7">
												<select name="reporting_to" class="form-control">
													<option value="">Select Manager</option>
													<?php
														while($manager=mysqli_fetch_array($showManager)){
													?>
														<option value="<?php echo $manager['id_employee']; ?>" <?php if($result['reporting_to']==$manager['id_employee']) echo 'selected="selected"'; ?> ><?php echo $manager['name']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Join Date</label>
											<div class="col-sm-7">
												<div class="input-group date form_date col-sm-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="join_date" class="form-control" value=<?= $result['join_date']; ?>><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Probation End</label>
											<div class="col-sm-7">
												<div class="input-group date form_date col-sm-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="probation_end" class="form-control" value=<?= $result['probation_end']; ?>><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Last Date</label>
											<div class="col-sm-7">
												<div class="input-group date form_date col-sm-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="last_date_resign" class="form-control" value="<?= $result['last_date_resign']; ?>"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Employment Status</label>
											<div class="col-sm-7">
												<select name="employment_status" class="form-control">
													<?php
														while($emp_Status=mysqli_fetch_array($showEmployeeStatus)){
													?>
														<option value="<?php echo $emp_Status['id_emp_status']; ?>" <?php if($result['employment_status']==$emp_Status['id_emp_status']) echo 'selected="selected"'; ?> ><?php echo $emp_Status['name_emp_status']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>

										<div class="form-group has-feedback">
											<label class="col-sm-3 control-label">Gender</label>
											<div class="col-sm-1">
												<div class="radio">
													<label><input type="radio" name="gender" value="M" <?php if($result['gender']=='M') echo 'checked="checked"'; ?>>Male</label>
												</div>
											</div>
											<div class="col-sm-1">
												<div class="radio">
													<label><input type="radio" name="gender" value="F" <?php if($result['gender']=='F') echo 'checked="checked"'; ?> >Female</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Phone</label>
											<div class="col-sm-7">
												<input type="text" name="phone" class="form-control" maxlength="15" value="<?= $result['phone']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Emergency Contact</label>
											<div class="col-sm-4">
												<input type="text" name="emergency_contact_name" class="form-control" maxlength="32" value="<?= $result['emergency_contact_name']; ?>">
											</div>
											<div class="col-sm-3">
												<input type="text" name="emergency_contact_number" class="form-control" maxlength="16" value="<?= $result['emergency_contact_number']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Email</label>
											<div class="col-sm-7">
												<input type="text" name="email" class="form-control" maxlength="60" value="<?= $result['email']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">NIK</label>
											<div class="col-sm-7">
												<input type="text" name="nik" class="form-control" maxlength="60" value="<?= $result['nik']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Place, Date of Birth</label>
											<div class="col-sm-3">
												<input type="text" name="place_of_birth" class="form-control" maxlength="32" value="<?= $result['place_of_birth']; ?>">
											</div>
											<div class="input-group date form_date col-sm-3" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
												<input type="text" name="date_of_birth" class="form-control" value="<?= $result['date_of_birth']; ?>"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">NPWP Name</label>
											<div class="col-sm-7">
												<input type="text" name="name_npwp" class="form-control" maxlength="60" value="<?= $result['name_npwp']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">NPWP Number</label>
											<div class="col-sm-7">
												<input type="text" name="npwp" class="form-control" maxlength="60" value="<?= $result['npwp']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">NPWP Address</label>
											<div class="col-sm-7">
												<textarea type="text" name="address_npwp" class="form-control" maxlength="512"><?= $result['address_npwp']; ?></textarea>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">BANK</label>
											<div class="col-sm-7">
												<select name="bank" class="form-control">
													<?php
														while($bank=mysqli_fetch_array($showBank)){
													?>
														<option value="<?php echo $bank['id_bank']; ?>" <?php if($result['bank']==$bank['id_bank']) echo 'selected="selected"'; ?> ><?php echo $bank['name_bank']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Rek Number</label>
											<div class="col-sm-7">
												<input type="text" name="bank_rek_number" class="form-control" maxlength="60" value="<?= $result['bank_rek_number']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Account Name</label>
											<div class="col-sm-7">
												<input type="text" name="bank_acc_name" class="form-control" maxlength="60" value="<?= $result['bank_acc_name']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">BPJS Ketenagakerjaan</label>
											<div class="col-sm-4">
												<input type="text" name="bpjs_ketenagakerjaan_name" class="form-control" maxlength="32" value="<?= $result['bpjs_ketenagakerjaan_name']; ?>">
											</div>
											<div class="col-sm-3">
												<input type="text" name="bpjs_ketenagakerjaan_number" class="form-control" maxlength="15" value="<?= $result['bpjs_ketenagakerjaan_number']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Marital Status</label>
											<div class="col-sm-7">
												<select name="marital_status" class="form-control">
													<?php
														while($mar_Status=mysqli_fetch_array($showMarriageStatus)){
													?>
														<option value="<?php echo $mar_Status['id_mar_status']; ?>" <?php if($result['marital_status']==$mar_Status['id_mar_status']) echo 'selected="selected"'; ?> ><?php echo $mar_Status['name_mar_status']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>

										<hr/>

										<div class="form-group">
											<label class="col-sm-3 control-label">Last Education 1</label>
												<div class="col-sm-2">
													<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
														<input type="text" name="last_education_period_from" class="form-control" value="<?= $result['last_education_period_from']; ?>">
														<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
														<input type="text" name="last_education_period_to" class="form-control" value="<?= $result['last_education_period_to']; ?>">
														<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<div class="col-sm-2">
													<select name="last_education_degree" class="form-control">
														<?php
														while($degree=mysqli_fetch_array($showDegree)){
													?>
														<option value="<?php echo $degree['id_degree']; ?>" <?php if($result['last_education_degree']==$degree['id_degree']) echo 'selected="selected"'; ?> ><?php echo $degree['name_degree']; ?></option>
													<?php
														}
													?>
													</select>
												</div>
												<div class="col-sm-1">
													<input type="text" name="last_education_gpa" class="form-control" maxlength="3" value="<?= $result['last_education_gpa']; ?>">
												</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-4">
												<input type="text" name="last_education_university" class="form-control" maxlength="60" value="<?= $result['last_education_university']; ?>">
											</div>
											<div class="col-sm-3">
												<input type="text" name="last_education_degree_study" class="form-control" maxlength="60" value="<?= $result['last_education_degree_study']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Last Education 2</label>
												<div class="col-sm-2">
													<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
														<input type="text" name="last_education2_period_from" class="form-control" value="<?= $result['last_education2_period_from']; ?>">
														<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
														<input type="text" name="last_education2_period_to" class="form-control" value="<?= $result['last_education2_period_to']; ?>">
														<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<div class="col-sm-2">
													<select name="last_education2_degree" class="form-control">
														<?php
														while($degree2=mysqli_fetch_array($showDegree2)){
													?>
														<option value="<?php echo $degree2['id_degree']; ?>" <?php if($result['last_education2_degree']==$degree2['id_degree']) echo 'selected="selected"'; ?> ><?php echo $degree2['name_degree']; ?></option>
													<?php
														}
													?>
													</select>
												</div>
												<div class="col-sm-1">
													<input type="text" name="last_education2_gpa" class="form-control" maxlength="3" value="<?= $result['last_education2_gpa']; ?>">
												</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-4">
												<input type="text" name="last_education2_university" class="form-control" maxlength="60" value="<?= $result['last_education2_university']; ?>">
											</div>
											<div class="col-sm-3">
												<input type="text" name="last_education2_degree_study" class="form-control" maxlength="60" value="<?= $result['last_education2_degree_study']; ?>">
											</div>
										</div>
										<hr/>

										<div class="form-group">
											<label class="col-sm-3 control-label">Previous Employment 1</label>
											<div class="col-sm-2">
												<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="previous_employment_period_from" class="form-control" value="<?= $result['previous_employment_period_from']; ?>">
													<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="previous_employment_period_to" class="form-control" value="<?= $result['previous_employment_period_to']; ?>">
													<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-4">
												<input type="text" name="previous_employment_company" class="form-control" maxlength="60" value="<?= $result['previous_employment_company']; ?>">
											</div>
											<div class="col-sm-3">
												<input type="text" name="previous_employment_position" class="form-control" maxlength="60" value="<?= $result['previous_employment_position']; ?>">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Previous Employment 2</label>
											<div class="col-sm-2">
												<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="previous_employment2_period_from" class="form-control" value="<?= $result['previous_employment2_period_from']; ?>">
													<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="previous_employment2_period_to" class="form-control" value="<?= $result['previous_employment2_period_to']; ?>">
													<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-4">
												<input type="text" name="previous_employment2_company" class="form-control" maxlength="60" value="<?= $result['previous_employment2_company']; ?>">
											</div>
											<div class="col-sm-3">
												<input type="text" name="previous_employment2_position" class="form-control" maxlength="60" value="<?= $result['previous_employment2_position']; ?>">
											</div>
										</div>
										<hr/>

										<div class="form-group">
											<label class="col-sm-3 control-label">Address</label>
											<div class="col-sm-7">
												<textarea type="text" name="address" class="form-control" maxlength="512"><?= $result['address']; ?></textarea>
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-7">
												<center><button type="submit" name="edit" value="edit" class="btn btn-danger">Update</button></center>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><i class="fa fa-plus"></i> Update Password<a data-toggle="collapse" data-target="#editpasswd" href="#editpasswd" class="collapsed"></a></h4>
							</div>
							<div id="editpasswd" class="panel-collapse collapse">
								<div class="panel-body">
									<?php 
										if($accessID=='Admin') {
											echo '
												<form action="home-admin.php?page=edit-password&id_number= '.$id_number.'" class="form-horizontal" method="POST" enctype="multipart/form-data">
											';
										}
										else if($accessID=='HR') {
											echo '
												<form action="home-hrd.php?page=edit-password&id_number= '.$id_number.'" class="form-horizontal" method="POST" enctype="multipart/form-data">
											';
										}
										else {
											echo '
												<form action="home-pegawai.php?page=edit-password&id_number= '.$id_number.'" class="form-horizontal" method="POST" enctype="multipart/form-data">
											';
										}
									?>
									<!--
									<form action="#" class="form-horizontal" method="POST" enctype="multipart/form-data">
										<div class="form-group">
											<!--<label class="col-sm-3 control-label">ID User</label>
											<div class="col-sm-7">
												<input type="text" name="id_user" class="form-control" maxlength="15" disabled>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">NIP</label>
											<div class="col-sm-7">
												<input type="text" name="nip" class="form-control" maxlength="15" disabled>
											</div>
										</div>-->
										<div class="form-group">
											<label class="col-sm-3 control-label">Password</label>
											<div class="col-sm-7">
												<input type="password" name="password" class="form-control" maxlength="40">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Re-type Password</label>
											<div class="col-sm-7">
												<input type="password" name="repassword" class="form-control" maxlength="40">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-7">
												<center><button type="submit" name="edit" value="edit" class="btn btn-danger">Update</button></center>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- datepicker -->
<script type="text/javascript" src="plugins/datepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
	 $('.form_date').datetimepicker({
			language:  'id',
			weekStart: 1,
			todayBtn:  1,
	  autoclose: 1,
	  todayHighlight: 1,
	  startView: 2,
	  minView: 2,
	  forceParse: 0
		});
</script>