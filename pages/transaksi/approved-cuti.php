<section class="content-header">
    <h1>Approved<small>Leave</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Approved Leave</li>
    </ol>
</section>
<div class="register-box">

	<?php
		
		if (isset($_GET['id_leave']) AND ($_GET['id_number']) AND ($_GET['days']) AND ($_GET['leave_type'])) {
		$id_leave	= $_GET['id_leave'];
		$id_number 	= $_GET['id_number'];
		$days		= $_GET['days'];
		$leave_type	= $_GET['leave_type'];
		}
		else{
			die ("Error. No ID Selected! ");	
		}
	
		include "dist/koneksi.php";
		
		if ($leave_type == 1) {
			$approved = "
				UPDATE table_leave_request SET approval='Y' WHERE id_leave='$id_leave'
			";
			$query=mysqli_query($con, $approved);
			$remainUpdate = "
				UPDATE table_employee SET remaining_leave = remaining_leave - '$days' WHERE id_number='$id_number'
			";
			$query2 = mysqli_query($con, $remainUpdate);
		}
		else {
			/* Belum mau di taruh query, spece untuk mengambil pilihan diluar dari annual leave */
			/*$setuju = "UPDATE tb_mohoncuti SET persetujuan='DISETUJUI' WHERE no_cuti='$no_cuti'";
			$query = mysqli_query ($con, $setuju);		
			*/
		}
	?>

	<div class='register-logo'><b>Approved</b> Cuti!</div>	
	<div class='register-box-body'>
		<p>Confirmation leave <b>Approved</b></p>
		<div class='row'>
			<div class='col-xs-8'></div>
			<div class='col-xs-4'>
				<div class='box-body box-profile'>
					<a class='btn btn-primary btn-block' href='home-hrd.php?page=pre-approval-cuti'>OK</a>
				</div>
			</div>
		</div>
	</div>
</div>