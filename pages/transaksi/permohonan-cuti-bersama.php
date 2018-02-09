<section class="content-header">
    <h1>Permohonan<small>Cuti</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Permohonan Cuti</li>
    </ol>
</section>
<div class="register-box">
<?php
	include "dist/koneksi.php";
	
	$id_number	= $_SESSION['id_number'];
	$tgl		= date('Y:m:d');
	
		
	if ($_POST['save'] == "save") {
		$date_from	= $_POST['date_from'];
		$date_to	= $_POST['date_to'];
		$contact = $_POST['contact'];
		$purpose = $_POST['purpose'];
		$leave_type = $_POST['leave_type'];
		//menghitung jumlah hari
		$selisih = strtotime($date_to) - strtotime($date_from);
		$selisih = $selisih/86400;
		$days = 1 + $selisih;
		
		$cekhak = "SELECT remaining_leave FROM table_employee WHERE id_number='$id_number'";
		$query = mysqli_query($con, $cekhak);
			$data = mysqli_fetch_array($query);
			$hak = $data['remaining_leave'];

		$akses = "SELECT access FROM users WHERE id_number='$id_number'";
		$queryacc = mysqli_query($con, $akses);
			$dataakses = mysqli_fetch_array($queryacc);
			$access = $dataakses['access'];
	
		if (empty($_POST['date_from']) || empty($_POST['date_to']) || empty($_POST['purpose'])) {
			echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar</p>
						<div class='row'>	
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-hrd.php?page=form-permohonan-cuti-bersama' class='btn btn-block btn-warning'>Back</button>
							</div>
						</div>
					</div>
				</div>";
		}

		else{
			$querygetID = "SELECT id_number FROM table_employee";
			$showID = mysqli_query ($con, $querygetID);
			while ($takeID=mysqli_fetch_array($showID)) {
				$geting = $takeID['id_number'];
				$multiple = "
				INSERT INTO table_leave_request(id_number, date_request, date_from, date_to, days, leave_type, approval, purpose, contact)
				VALUES ('$geting', '$tgl', '$date_from', '$date_to', '$days', '$leave_type', 'Y', '$purpose', '$contact')
				";
				$query2 = mysqli_query ($con, $multiple);
				$remainUpdate = "
					UPDATE table_employee SET remaining_leave = remaining_leave - '$days' WHERE id_number='$geting'
				";
				$potong = mysqli_query($con, $remainUpdate);
			}

			if($query2){
				echo "<div class='register-logo'><b>Transaction</b> Successful!</div>	
					<div class='register-box-body'>
						<p>Cuti requested.</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-hrd.php' class='btn btn-danger btn-block btn-flat'>Next >></button>
							</div>
						</div>
					</div>";
			}		
		}
	}
?>
</div>