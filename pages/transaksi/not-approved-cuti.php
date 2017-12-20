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
<section class="content-header">
    <h1>Not Approved<small>Leave</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Not Approved Leave</li>
    </ol>
</section>
<div class="register-box">
	<div class='register-logo'><b>Not Approve</b> Leave?</div>	
	<div class='register-box-body'>
		<?php

		if (isset($_GET['id_leave'])) {
			$id_leave	= $_GET['id_leave'];
		}
		else{
			die ("Error. No ID Selected! ");	
		}
		
		include "dist/koneksi.php";
		$taksetuju = "UPDATE table_leave_request SET approval='N' WHERE id_leave='$id_leave'";
		$query = mysqli_query ($con, $taksetuju);		

		?>
		<div class='row'>
			<div class='col-xs-8'></div>
			<!--<div class='col-xs-4'>-->
				<div class='box-body box-profile'>
					<p>Leave Not Approved</p>
					<a class='btn btn-primary btn-block' href='<?=$redirect?>?page=pre-approval-cuti'>OK</a>
				</div>
			<!--</div>-->
		</div>
	</div>
</div>