<section class="content-header">
    <h1>Edit<small>Password Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Password Pegawai</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_number'])) {
		$id_number = $_GET['id_number'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}

	if ($_POST['edit'] == "edit") {
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		if ($password == $repassword) {
			$genpassword = md5($password);
			include "dist/koneksi.php";
			$update = mysqli_query($con, "
				UPDATE users 
				SET password='$genpassword'
				WHERE id_number='$id_number';"
			);
			if($update){

				$checkAccess = mysqli_query($con, 
					"SELECT table_employee.id_number, table_employee.name, table_access.name AS access
					FROM users
					INNER JOIN table_employee
					ON users.id_number = table_employee.id_number
					INNER JOIN table_access
					ON users.access = table_access.id_access
					WHERE users.id_number = '$id_number'"
				);

				$result = mysqli_fetch_array($checkAccess);
				$accessID = $result['access'];
				
				if($accessID == 'Admin') {
					$action = "home-admin.php";
				}
				else {
					$action = "home-pegawai.php";
				}

				echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
					<div class='register-box-body'>
						<p>Edit Employee ".$id_number." Success</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='".$action."' class='btn btn-primary btn-block btn-flat'>Next >></button>
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