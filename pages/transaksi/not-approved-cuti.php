	<section class="content-header">
    <h1>Not Approved<small>Cuti</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Not Approved Cuti</li>
    </ol>
</section>
<div class="register-box">
	<div class='register-logo'><b>Approved</b> Cuti!</div>	
	<div class='register-box-body'>
		<?php

		if (isset($_GET['no_cuti'])) {
			$no_cuti	= $_GET['no_cuti'];
		}
		else{
			die ("Error. No ID Selected! ");	
		}
		
		include "dist/koneksi.php";
		$taksetuju = "UPDATE tb_mohoncuti SET persetujuan='TIDAK DISETUJUI' WHERE no_cuti='$no_cuti'";
		$query = mysqli_query ($con, $taksetuju);		

		?>
		<div class='row'>
			<div class='col-xs-8'></div>
			<div class='col-xs-4'>
				<div class='box-body box-profile'>
					<p>Cuti tidak di terima</p>
					<a class='btn btn-primary btn-block' href='home-hrd.php?page=pre-approval-cuti'>OK</a>
				</div>
			</div>
		</div>
	</div>
</div>