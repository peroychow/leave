<?php
	$id_number = $_SESSION['id_number'];
	include "dist/koneksi.php";

	$query = mysqli_query($con, "
		SELECT * FROM users WHERE id_number = '$id_number'
	");
	$takeAccess = mysqli_fetch_array($query);
?>

<section class="content-header">
    <h1>Form<small>Annual Leave</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-pegawai.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Leave Request Form</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<hr/>
				<?php
					if($takeAccess['access']==1) { 
					echo "
						<form action='home-admin.php?page=permohonan-cuti-tahunan' class='form-horizontal' method='POST' enctype='multipart/form-data'> 
					";
					}
					else if($takeAccess['access']==2) {
					echo "
						<form action='home-hrd.php?page=permohonan-cuti-tahunan' class='form-horizontal' method='POST' enctype='multipart/form-data'> 
					";
					}
					else if($takeAccess['access']==3) {
						echo "
							<form action='home-supervisor.php?page=permohonan-cuti-tahunan' class='form-horizontal' method='POST' enctype='multipart/form-data'>
						";
					}
					else if($takeAccess['access']==4) {
					echo "
						<form action='home-pegawai.php?page=permohonan-cuti-tahunan' class='form-horizontal' method='POST' enctype='multipart/form-data'> 
					";
					}
				?>
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">Leave Date</label>
							<div class="col-sm-4">
								<div class="input-group date form_date col-sm-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input type="text" name="date_from" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">To </label>
							<div class="col-sm-4">
								<div class="input-group date form_date col-sm-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input type="text" name="date_to" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Phone </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="contact" id="contact"/>
							</div>
						</div>

						<div class="form-group has-feedback">
							<label class="col-sm-3 control-label">Type of Leave </label>
							<div class="col-sm-2">
								<div class="radio">
									<label><input type="radio" name="leave_type" value="1" checked="checked">Annual Leave</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="leave_type" value="2" disabled="disabled">Unpaid Leave</label>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="radio">
									<label><input type="radio" name="leave_type" value="3" disabled="disabled">Special Leave</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="leave_type" value="4" disabled="disabled">Advance Leave</label>
								</div>
							</div>
						</div>

						<div class="form-group has-feedback">
							<label class="col-sm-3 control-label">Purpose of Leave </label>
							<div class="col-sm-4">
								<textarea class="form-control" rows="5" name="purpose" id="purpose"></textarea>
							</div>
						</div>

						<br />
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-7">
								<button type="submit" name="save" value="save" class="btn btn-danger">Send</button>
							</div>
						</div>
					</div>
				</form>
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