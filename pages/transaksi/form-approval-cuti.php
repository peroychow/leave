<section class="content-header">
    <h1>Approval Leave<small>Form</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Leave Approval</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_leave']) AND ($_GET['id_number']) AND ($_GET['days']) AND ($_GET['leave_type'])) {
	$id_leave	= $_GET['id_leave'];
	$id_number 		= $_GET['id_number'];
	$days 	= $_GET['days'];
	$leave_type	 	= $_GET['leave_type'];
	}
	else{
		die ("Error. No ID Selected! ");	
	}
	echo "<div class='register-logo'><b>Approval</b> Cuti!</div>	
		<div class='register-box-body'>
			<p>Silahkan tentukan status persetujuan untuk permohonan cuti No. <b>$id_leave</b></p>
			<div class='row'>
				<div class='col-xs-1'></div>
				<div class='col-xs-5'>
					<div class='box-body box-profile'>
						<a class='btn btn-primary btn-block' href='home-hrd.php?page=approved-cuti&id_leave=".$id_leave."&id_number=".$id_number."&days=".$days."&leave_type=".$leave_type."'>Approve</a>
					</div>
				</div>
				<div class='col-xs-5'>
					<div class='box-body box-profile'>
						<a class='btn btn-warning btn-block' href='home-hrd.php?page=not-approved-cuti&id_leave=".$id_leave."'>Not Approve</a>
					</div>
				</div>
				<div class='col-xs-1'></div>
			</div>
		</div>";
?>
</div>