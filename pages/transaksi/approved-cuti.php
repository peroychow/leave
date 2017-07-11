<section` class="content-header">
    <h1>Approved<small>Cuti</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Approved Cuti</li>
    </ol>
</section>
<div class="register-box">

	<?php
		
		if (isset($_GET['no_cuti']) AND ($_GET['nip']) AND ($_GET['jml_hari']) AND ($_GET['jenis'])) {
		$no_cuti	= $_GET['no_cuti'];
		$nip 		= $_GET['nip'];
		$jml_hari	= $_GET['jml_hari'];
		$jenis		= $_GET['jenis'];
		}
		else{
			die ("Error. No ID Selected! ");	
		}
	
		include "dist/koneksi.php";
		
		if ($jenis == 'Cuti Tahun') {
			$setuju = "
				UPDATE tb_mohoncuti SET persetujuan='DISETUJUI' WHERE no_cuti='$no_cuti'
			";
			$query=mysqli_query($con, $setuju);
			$hakUpdate = "
				UPDATE tb_pegawai SET hak_cuti_tahunan = hak_cuti_tahunan - '$jml_hari' WHERE nip='$nip'
			";
			$query2 = mysqli_query($con, $hakUpdate);
		}
		else {
			$setuju = "UPDATE tb_mohoncuti SET persetujuan='DISETUJUI' WHERE no_cuti='$no_cuti'";
			$query = mysqli_query ($con, $setuju);		
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