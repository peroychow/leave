<?php
	include "dist/koneksi.php";
	//$tampilPeg=mysqli_query($con, "SELECT * FROM tb_pegawai ORDER BY nip");
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

	$nip = $_SESSION['id_number'];
	$queryAccess = mysqli_query($con, "
		SELECT * FROM users WHERE id_number = '$nip'
	");
	$takeAccess = mysqli_fetch_array($queryAccess);
	if($takeAccess['access']==1) {
		$lempar="home-admin.php";
	}
	else if($takeAccess['access']==2) {
		$lempar="home-hrd.php";
	}
?>
<section class="content-header">
    <h1>Master<small>Data Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?=$lempar?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data Pegawai</li>
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
								<h4 class="panel-title"><i class="fa fa-plus"></i> Add an Employee<a data-toggle="collapse" data-target="#formpegawai" href="#formpegawai" class="collapsed"></a></h4>
							</div>
							<div id="formpegawai" class="panel-collapse collapse">
								<div class="panel-body">
									<form action="<?=$lempar?>?page=master-pegawai" class="form-horizontal" method="POST" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-3 control-label">ID Number</label>
											<div class="col-sm-7">
												<input type="text" name="id_number" class="form-control" placeholder="ID Number" maxlength="15">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Name</label>
											<div class="col-sm-7">
												<input type="text" name="name" class="form-control" placeholder="Name" maxlength="40">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Job Title</label>
											<div class="col-sm-7">
												<input type="text" name="job_title" class="form-control" placeholder="Job Title" maxlength="40">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Department</label>
											<div class="col-sm-7">
												<select name="department" class="form-control">
													<?php
														while($dept=mysqli_fetch_array($showDepartment)){
													?>
														<option value="<?php echo $dept['id_dep']; ?>"><?php echo $dept['name_dept']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Source</label>
											<div class="col-sm-7">
												<input type="text" name="source" class="form-control" placeholder="Source" maxlength="40">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Reporting To</label>
											<div class="col-sm-7">
												<select name="reporting_to" class="form-control">
													<option value="" selected="selected">Select Manager</option>
													<?php
														while($manager=mysqli_fetch_array($showManager)){
													?>
														<option value="<?php echo $manager['id_employee']; ?>"><?php echo $manager['name']; ?></option>
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
													<input type="text" name="join_date" class="form-control" placeholder="Join Date"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Probation End</label>
											<div class="col-sm-7">
												<div class="input-group date form_date col-sm-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="probation_end" class="form-control" placeholder="Probation End"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Last Date</label>
											<div class="col-sm-7">
												<div class="input-group date form_date col-sm-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="last_date_resign" class="form-control" placeholder="Last Date"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
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
														<option value="<?php echo $emp_Status['id_emp_status']; ?>"><?php echo $emp_Status['name_emp_status']; ?></option>
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
													<label><input type="radio" name="gender" value="M" checked="checked">Male</label>
												</div>
											</div>
											<div class="col-sm-1">
												<div class="radio">
													<label><input type="radio" name="gender" value="F">Female</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Phone</label>
											<div class="col-sm-7">
												<input type="text" name="phone" class="form-control" placeholder="Phone Number" maxlength="15"/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Emergency Contact</label>
											<div class="col-sm-4">
												<input type="text" name="emergency_contact_name" class="form-control" maxlength="32" placeholder="Emergency Name">
											</div>
											<div class="col-sm-3">
												<input type="text" name="emergency_contact_number" class="form-control" placeholder="Phone Number" maxlength="16"/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Email</label>
											<div class="col-sm-7">
												<input type="text" name="email" class="form-control" maxlength="60" placeholder="Email">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">NIK</label>
											<div class="col-sm-7">
												<input type="text" name="nik" class="form-control" maxlength="60" placeholder="NIK">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Place, Date of Birth</label>
											<div class="col-sm-3">
												<input type="text" name="place_of_birth" class="form-control" maxlength="32" placeholder="Place">
											</div>
											<div class="input-group date form_date col-sm-3" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
												<input type="text" name="date_of_birth" class="form-control" placeholder="Date of Birth"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">NPWP Name</label>
											<div class="col-sm-7">
												<input type="text" name="name_npwp" class="form-control" maxlength="60" placeholder="NPWP Name">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">NPWP Number</label>
											<div class="col-sm-7">
												<input type="text" name="npwp" class="form-control" maxlength="60" placeholder="NPWP Number">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">NPWP Address</label>
											<div class="col-sm-7">
												<textarea type="text" name="address_npwp" class="form-control" maxlength="512"></textarea>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">BANK</label>
											<div class="col-sm-7">
												<select name="bank" class="form-control">
													<?php
														while($bank=mysqli_fetch_array($showBank)){
													?>
														<option value="<?php echo $bank['id_bank']; ?>"><?php echo $bank['name_bank']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Rek Number</label>
											<div class="col-sm-7">
												<input type="text" name="bank_rek_number" class="form-control" maxlength="60" placeholder="Rek Number">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Account Name</label>
											<div class="col-sm-7">
												<input type="text" name="bank_acc_name" class="form-control" maxlength="60" placeholder="Account Name">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">BPJS Ketenagakerjaan</label>
											<div class="col-sm-4">
												<input type="text" name="bpjs_ketenagakerjaan_name" class="form-control" maxlength="32" placeholder="BPJS Name">
											</div>
											<div class="col-sm-3">
												<input type="text" name="bpjs_ketenagakerjaan_number" class="form-control" maxlength="15" placeholder="BPJS Number">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Marital Status</label>
											<div class="col-sm-7">
												<select name="marital_status" class="form-control">
													<?php
														while($mar_Status=mysqli_fetch_array($showMarriageStatus)){
													?>
														<option value="<?php echo $mar_Status['id_mar_status']; ?>"><?php echo $mar_Status['name_mar_status']; ?></option>
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
														<input type="text" name="last_education_period_from" class="form-control" placeholder="From">
														<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
														<input type="text" name="last_education_period_to" class="form-control" placeholder="To">
														<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<div class="col-sm-2">
													<select name="last_education_degree" class="form-control">
														<?php
														while($degree=mysqli_fetch_array($showDegree)){
													?>
														<option value="<?php echo $degree['id_degree']; ?>"><?php echo $degree['name_degree']; ?></option>
													<?php
														}
													?>
													</select>
												</div>
												<div class="col-sm-1">
													<input type="text" name="last_education_gpa" class="form-control" maxlength="3" placeholder="GPA">
												</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-4">
												<input type="text" name="last_education_university" class="form-control" maxlength="60" placeholder="University">
											</div>
											<div class="col-sm-3">
												<input type="text" name="last_education_degree_study" class="form-control" maxlength="60" placeholder="Study">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Last Education 2</label>
												<div class="col-sm-2">
													<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
														<input type="text" name="last_education2_period_from" class="form-control" placeholder="From">
														<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
														<input type="text" name="last_education2_period_to" class="form-control" placeholder="To">
														<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
													</div>
												</div>
												<div class="col-sm-2">
													<select name="last_education2_degree" class="form-control">
														<?php
														while($degree2=mysqli_fetch_array($showDegree2)){
													?>
														<option value="<?php echo $degree2['id_degree']; ?>"><?php echo $degree2['name_degree']; ?></option>
													<?php
														}
													?>
													</select>
												</div>
												<div class="col-sm-1">
													<input type="text" name="last_education2_gpa" class="form-control" maxlength="3" placeholder="GPA">
												</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-4">
												<input type="text" name="last_education2_university" class="form-control" maxlength="60" placeholder="University">
											</div>
											<div class="col-sm-3">
												<input type="text" name="last_education2_degree_study" class="form-control" maxlength="60" placeholder="Study">
											</div>
										</div>
										<hr/>

										<div class="form-group">
											<label class="col-sm-3 control-label">Previous Employment 1</label>
											<div class="col-sm-2">
												<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="previous_employment_period_from" class="form-control" placeholder="From">
													<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="previous_employment_period_to" class="form-control" placeholder="To">
													<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-4">
												<input type="text" name="previous_employment_company" class="form-control" maxlength="60" placeholder="Company Name">
											</div>
											<div class="col-sm-3">
												<input type="text" name="previous_employment_position" class="form-control" maxlength="60" placeholder="Position">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Previous Employment 2</label>
											<div class="col-sm-2">
												<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="previous_employment2_period_from" class="form-control" placeholder="From">
													<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
													<input type="text" name="previous_employment2_period_to" class="form-control" placeholder="To">
													<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-4">
												<input type="text" name="previous_employment2_company" class="form-control" maxlength="60" placeholder="Company Name">
											</div>
											<div class="col-sm-3">
												<input type="text" name="previous_employment2_position" class="form-control" maxlength="60" placeholder="Position">
											</div>
										</div>
										<hr/>

										<div class="form-group">
											<label class="col-sm-3 control-label">Address</label>
											<div class="col-sm-7">
												<textarea type="text" name="address" class="form-control" maxlength="512"></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-7">
												<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>NIP</th>
								<th>Nama</th>
								<th>Job Title</th>
								<th>Join Date</th>
								<th>Status</th>
								<th>No. Telp</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($peg=mysqli_fetch_array($showEmployee)){
						?>
							<tr>
								<td><?php echo $peg['id_number'];?></td>
								<td><?php echo $peg['name'];?></td>
								<td><?php echo $peg['job_title'];?></td>
								<td><?php echo $peg['join_date'];?></td>
								<td><?php echo $peg['employment_status'];?></td>
								<td><?php echo $peg['phone'];?></td>
								<td class="tools"><a href="<?=$lempar?>?page=form-lihat-data-pegawai&id_number=<?=$peg['id_number'];?>" title="view"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=$lempar?>?page=form-edit-data-pegawai&id_number=<?=$peg['id_number'];?>&akses=<?=$lempar?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=$lempar?>?page=delete-data-pegawai&id_number=<?php echo $peg['id_number'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
					<div>
						<hr>
						<form action="<?=$lempar?>?page=import-pegawai" method="POST" enctype="multipart/form-data" name="import" id="import">
							Import from Excel: <br><br> 
							<input id="input-b1" name="input-b1" type="file" class="file">
							<br>
							<input type="submit" name="Save" value="Save">
						</form>
						<hr>
					</div>
				</div>
			</div>
        </div>
	</div>
</section>

<script>
  $(function () {
    $("#example1").DataTable();
	    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false
	    });
  });
</script>

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
