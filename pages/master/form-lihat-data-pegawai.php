<?php
	if (isset($_GET['id_number'])) {
		$id_number = $_GET['id_number'];
	}
	else {
		die ("Error. No ID Selected! ");
	}

	include "dist/koneksi.php";
	//$ambilData=mysqli_query($con, "SELECT * FROM tb_pegawai WHERE nip='$nip'");

	$takeEmployee = mysqli_query($con, "SELECT * FROM table_employee WHERE id_number='$id_number'");
	$result = mysqli_fetch_array($takeEmployee);
	$id_number = $result['id_number'];

	//$hasil=mysqli_fetch_array($ambilData);
	//$nip = $hasil['nip'];
?>
<section class="content-header">
    <h1>Form<small>Lihat Data Pegawai <b>#<?=$id_number?></b></small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Lihat Data Pegawai</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3 control-label">Name</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$result['name'];?>" disabled="disabled" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Job Title</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['job_title']; ?>" disabled="deisabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Department</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['department']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Source</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['source']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Reporting To</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['reporting_to'] ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Join Date</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['join_date']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Probation End</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['probation_end']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Last Date</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['last_date_resign']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Employment Status</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['employment_status']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Gender</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['gender']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Phone</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['phone']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Emergency Contact</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?= $result['emergency_contact_name']; ?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?= $result['emergency_contact_number']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['email']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">NIK</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['nik']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Place, Date of Birth</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?= $result['place_of_birth']; ?>" disabled="disabled">
							</div>
							<div class="input-group date form_date col-sm-3" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input type="text" value="<?= $result['date_of_birth']; ?>" class="form-control" disabled="disabled"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">NPWP Name</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['name_npwp']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">NPWP Number</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['npwp'] ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">NPWP Address</label>
							<div class="col-sm-7">
								<textarea type="text" class="form-control" disabled="disabled"><?= $result['address_npwp']; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">BANK</label>
							<div class="col-sm-7">
								<select class="form-control" disabled="disabled">
									<option selected><?= $result['bank']; ?></option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Rek Number</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['bank_rek_number']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Account Name</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?= $result['bank_acc_name']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">BPJS Ketenagakerjaan</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?= $result['bpjs_ketenagakerjaan_name']; ?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?= $result['bpjs_ketenagakerjaan_number']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Marital Status</label>
							<div class="col-sm-7">
								<select class="form-control" disabled="disabled">
									<option selected><?= $result['marital_status']; ?></option>
								</select>
							</div>
						</div>

						<hr/>

						<div class="form-group">
							<label class="col-sm-3 control-label">Last Education 1</label>
								<div class="col-sm-2">
									<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input type="text" value="<?= $result['last_education_period_from'] ?>" class="form-control" disabled="disabled">
										<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input type="text" class="form-control" value="<?= $result['last_education_period_to']; ?>" disabled="disabled">
										<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
								</div>
								<div class="col-sm-2">
									<select class="form-control" disabled="disabled">
										<option selected><?= $result['last_education_degree']; ?></option>
										<!--

										<?php
										while($degree=mysqli_fetch_array($showDegree)){
										?>
										<option value="<?php echo $degree['id_degree']; ?>"><?php echo $degree['name_degree']; ?></option>
										<?php
										}
										?>
									-->
									</select>
								</div>
								<div class="col-sm-1">
									<input type="text" class="form-control" value="<?= $result['last_education_gpa']; ?>" disabled="disabled">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?= $result['last_education_university']; ?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?= $result['last_education_degree_study']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Last Education 2</label>
								<div class="col-sm-2">
									<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input type="text" class="form-control" value="<?= $result['last_education2_period_from']; ?>" disabled="disabled">
										<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input type="text" class="form-control" value="<?= $result['last_education2_period_to']; ?>" disabled="disabled">
										<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
								</div>
								<div class="col-sm-2">
									<select class="form-control" disabled="disabled">
										<option selected><?= $result['last_education2_degree'] ?></option>
										<!--
										<?php
										while($degree2=mysqli_fetch_array($showDegree2)){
									?>
										<option value="<?php echo $degree2['id_degree']; ?>"><?php echo $degree2['name_degree']; ?></option>
									<?php
										}
									?>
										-->
									</select>
								</div>
								<div class="col-sm-1">
									<input type="text" class="form-control" value="<?= $result['last_education2_gpa']; ?>" disabled="disabled">
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?= $result['last_education2_university']; ?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?= $result['last_education2_degree_study']; ?>" disabled="disabled">
							</div>
						</div>
						<hr/>

						<div class="form-group">
							<label class="col-sm-3 control-label">Previous Employment 1</label>
							<div class="col-sm-2">
								<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input type="text" class="form-control" value="<?= $result['previous_employment_period_from']; ?>" disabled="disabled">
									<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input type="text" class="form-control" value="<?= $result['previous_employment_period_to']; ?>" disabled="disabled">
									<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?= $result['previous_employment_company']; ?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?= $result['previous_employment_position']; ?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Previous Employment 2</label>
							<div class="col-sm-2">
								<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input type="text" class="form-control" value="<?= $result['previous_employment2_period_from']; ?>" disabled="disabled">
									<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input type="text" class="form-control" value="<?= $result['previous_employment2_period_to']; ?>" disabled="disabled">
									<span class="input-group-addon"/><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?= $result['previous_employment2_company']; ?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?= $result['previous_employment2_position']; ?>" disabled="disabled">
							</div>
						</div>
						<hr/>

						<div class="form-group">
							<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-7">
								<textarea type="text" class="form-control" maxlength="512" disabled="disabled"><?= $result['address']; ?></textarea>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
