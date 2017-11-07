<?php
	include "dist/koneksi.php";

	if (isset($_GET['id_number'])) {
		$id_number = $_GET['id_number'];
		$query = "SELECT * FROM table_employee WHERE id_number='$id_number'";
		$result = mysqli_query($con, $query);
		$data = mysqli_fetch_array($result);
		$nip = $_SESSION['id_number'];
		$queryAccess = mysqli_query($con, "
				SELECT * FROM users WHERE id_number = '$nip'
			");
			$takeAccess = mysqli_fetch_array($queryAccess);
			if($takeAccess['access']==1) {
				$lempar="home-admin.php";
			}
			else if($takeAccess['access']==2) {
				$lempar="home-hrd.php";
			}
			else if($takeAccess['access']==4) {
				$lempar="home-pegawai.php";
			}
	}

	else {
		die ("Error. No Kode Selected! ");	
	}
?>
<section class="content-header">
    <h1>Delete<small>Employee Data</small></h1>
    <ol class="breadcrumb">
        <li><a href="<?=$lempar?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Delete Employee Data</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if (!empty($id_number) && $id_number != "") {

		$delete = "DELETE FROM table_employee WHERE id_number='$id_number'";
		$sqldel = mysqli_query ($con, $delete);
		
		$deluser = "DELETE FROM users WHERE id_number='$id_number'";
		$sql = mysqli_query ($con, $deluser);

		if ($sqldel) {	
				
			echo "<div class='register-logo'><b>Delete</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Data Pegawai ".$id_number." Berhasil di Hapus</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='".$lempar."?page=form-master-pegawai' class='btn btn-primary btn-block btn-flat'>Next >></button>
						</div>
					</div>
				</div>";		
		}
	
		else{
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";	
		}
	}
?>
</div>