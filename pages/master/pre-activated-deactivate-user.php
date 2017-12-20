<?php
	if (isset($_GET['id_number']) AND ($_GET['aktif'])) {
	
	$id_number	= $_GET['id_number'];
	$aktif 		= $_GET['aktif'];
	}
	
	else{
		die ("Error. No ID Selected! ");	
	}
?>
<?php
	include "dist/koneksi.php";
	
	$id_akses = $_SESSION['id_number'];
	$queryAccess = mysqli_query($con, "
		SELECT * FROM users WHERE id_number = '$id_akses'
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
    <h1>Activated or Deactivate<small>User</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?=$lempar?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Activated or Deactivate User</li>
    </ol>
</section>
<div class="register-box">
	<?php 
	echo "<div class='register-logo'><b>Activated or Deactivate</b> User!</div>	
		<div class='register-box-body'>
			<p>Silahkan tentukan status untuk user <b>$id_number</b></p>
			<p>Status sekarang aktif = <b>".$aktif."</b></p>
			<div class='row'>
				<div class='col-xs-1'></div>
				<div class='col-xs-5'>
					<div class='box-body box-profile'>
						<a class='btn btn-primary btn-block' href='".$lempar."?page=activated-user&id_number=".$id_number."&akses=".$takeAccess['access']."'>Activated</a>
					</div>
				</div>
				<div class='col-xs-5'>
					<div class='box-body box-profile'>
						<a class='btn btn-warning btn-block' href='".$lempar."?page=deactivate-user&id_number=".$id_number."&akses=".$takeAccess['access']."'>Deactivate</a>
					</div>
				</div>
				<div class='col-xs-1'></div>
			</div>
		</div>";
?>
</div>