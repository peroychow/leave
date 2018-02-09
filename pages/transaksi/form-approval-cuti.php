<section class="content-header">
    <h1>Approval Leave<small>Form</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Leave Approval</li>
    </ol>
</section>
<?php
	$id_number = $_SESSION['id_number'];
	$queryAccess = mysqli_query($con, "
		SELECT * FROM users WHERE id_number = '$id_number'
	");
	$takeAccess = mysqli_fetch_array($queryAccess);
	if($takeAccess['access']==2) {
		$redirect = "home-hrd.php";
	}
	else if($takeAccess['access']==3) {
		$redirect = "home-supervisor.php";
	}
?>
<div class="register-box">
<?php
	if (isset($_GET['id_leave']) AND isset($_GET['id_number']) AND isset($_GET['days']) AND isset($_GET['leave_type'])) {
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
						<a class='btn btn-primary btn-block' href='".$redirect."?page=approved-cuti&id_leave=".$id_leave."&id_number=".$id_number."&days=".$days."&leave_type=".$leave_type."'>Approve</a>
					</div>
				</div>
				<div class='col-xs-5'>
					<div class='box-body box-profile'>
						<a class='btn btn-warning btn-block' href='".$redirect."?page=not-approved-cuti&id_leave=".$id_leave."'>Not Approve</a>
					</div>
				</div>
				<div class='col-xs-1'></div>
			</div>
		</div>";
?>
</div>