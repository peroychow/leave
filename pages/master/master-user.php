<section class="content-header">
    <h1>Input<small>Data User</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Input Data User</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
		$id_number = $_POST['id_employee'];
		$hak_akses = $_POST['hak_akses'];
		
		include "dist/koneksi.php";
		
		$cekuser = mysqli_num_rows (mysqli_query($con, "SELECT id_user FROM users WHERE id_number='$id_number';"));
		$pullPasswd = mysqli_query($con, "
			SELECT id_number, date_of_birth FROM table_employee WHERE id_number='$id_number';"
		);
		
		$result = mysqli_fetch_array($pullPasswd);
		$passwd = md5($result['date_of_birth']);	
		
		/*if (empty($_POST['id_number'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-user' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}*/

		if($cekuser > 1) {
		echo "<div class='register-logo'><b>Oops!</b> ID User Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan ID User yang Anda masukan benar.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-user' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}

		else{
		
			$insert = "INSERT INTO users (id_number, password, access, active) VALUES ('$id_number', '$passwd', '$hak_akses', 'N')";
			$query = mysqli_query ($con, $insert);
		
			if($query){
				echo "<div class='register-logo'><b>Input Data</b> Successful!</div>	
					<div class='register-box-body'>
						<p>Input Data User Berhasil.</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-master-user' class='btn btn-danger btn-block btn-flat'>Next >></button>
							</div>
						</div>
					</div>";
			}
			else {
				echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
			}
		}
	}
?>
</div>