<section class="content-header">
    <h1>Deactivate<small>User</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Deactivate User</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_number']) && isset($_GET['akses'])) {
		$id_number	= $_GET['id_number'];
		$akses = $_GET['akses'];
	}
	else{
		die ("Error. No ID Selected! ");	
	}
?>
<?php
	if($akses==1) {
		$lempar="home-admin.php";
	}
	else if($akses==2) {
		$lempar="home-hrd.php";
	}
	
	include "dist/koneksi.php";
	$deactivate = "UPDATE users SET active='N' WHERE id_number='$id_number'";
	$query = mysqli_query ($con, $deactivate);		
		if($query){
		echo "<div class='register-logo'><b>Deactivate</b> User!</div>	
			<div class='register-box-body'>
				<p>Status user sekarang adalah <b>TIDAK AKTIF</b></p>
				<div class='row'>
					<div class='col-xs-8'></div>
					<div class='col-xs-4'>
						<div class='box-body box-profile'>
							<a class='btn btn-primary btn-block' href='".$lempar."?page=form-master-user'>OK</a>
						</div>
					</div>
				</div>
			</div>";
		}
?>
</div>