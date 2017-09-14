<div class="login-box">
<?php
	include "dist/koneksi.php";
	//$id_user		= $_POST['id_user'];
	$id_number		= $_POST['id_number'];
	$password		= $_POST['password'];
	$passwdenc		= md5($password);
	$op 			= $_GET['op'];

	if($op=="in"){
		
		$newquery = "
			SELECT users.id_user, users.id_number, table_employee.name, table_employee.email, users.password, table_access.name AS access, users.active
			FROM users
			INNER JOIN table_employee
			ON users.id_number = table_employee.id_number
			INNER JOIN table_access
			ON users.access = table_access.id_access
			WHERE table_employee.email = '".$id_number."'
			AND users.password = '".$passwdenc."';
		";

		$sql = mysqli_query($con, $newquery);
		if(mysqli_num_rows($sql)==1){
			$qry = mysqli_fetch_array($sql);
			$_SESSION['id_number'] = $qry['id_number'];
			$_SESSION['hak_akses'] = $qry['access'];
			$_SESSION['nama'] = $qry['name'];

			if($qry['active']=="N"){
            echo "<div class='register-logo'><b>Oops!</b> User Tidak Aktif.</div>	
				<div class='register-box-body'>
					<p>Harap tunggu beberapa saat, atau silahkan hubungi Admin Anda.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='index.php' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>";
			}
			else if($qry['access']==Admin){
				header("location:home-admin.php");
			}
			else if($qry['access']==Employee){
				header("location:home-pegawai.php");
			}
			else if($qry['access']==HR){
				header("location:home-hrd.php");
			}
		}
		else{
			echo "<div class='register-logo'><b>Oops!</b> Login Failed.</div>	
				<div class='register-box-body'>
					<p>Email atau Password tidak sesuai. Silahkan diulang kembali.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='index.php' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>";
		}
	}else if($op=="out"){
		unset($_SESSION['id_number']);
		unset($_SESSION['access']);
		unset($_SESSION['nama']);
		header("location:index.php");
	}
?>
</div>