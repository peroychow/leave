<section class="content-header">
    <h1>Permohonan<small>Cuti</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-pegawai.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Permohonan Cuti</li>
    </ol>
</section>
<div class="register-box">
<?php
	include "dist/koneksi.php";
	
	$id_number	= $_SESSION['id_number'];
	$tgl		= date('Y:m:d');

	/*function checkAccess() {
		include "dist/koneksi.php";
	
		$id_number	= $_SESSION['id_number'];
		$tgl		= date('Y:m:d');

		$akses = "SELECT access FROM users WHERE id_number='$id_number'";
		$queryacc = mysqli_query($con, $akses);
			$dataakses = mysqli_fetch_array($queryacc);
			$access = $dataakses['access'];
		
		if($access == 1) {
			$lempar="home-admin.php";
		}
		else if($access == 2) {
			$lempar="home-hrd.php";
		}
		else if($access == 3) {
			$lempar = "home-supervisor.php";
		}	
		else if($access == 4) {
			$lempar = "home-pegawai.php";
		}
	}*/

	$akses = "SELECT access FROM users WHERE id_number='$id_number'";
		$queryacc = mysqli_query($con, $akses);
			$dataakses = mysqli_fetch_array($queryacc);
			$access = $dataakses['access'];
		
		if($access == 1) {
			$lempar="home-admin.php";
		}
		else if($access == 2) {
			$lempar="home-hrd.php";
		}
		else if($access == 3) {
			$lempar = "home-supervisor.php";
		}	
		else if($access == 4) {
			$lempar = "home-pegawai.php";
		}

	function information($lemper, $notice) {
		echo "
			<div class='row'>
				<div class='col-xs-8'></div>
					<div class='col-xs-4'>
						<button type='button' onclick=location.href='".$lemper."?page=form-permohonan-cuti-tahunan' class='btn btn-block btn-warning'>$notice</button>
					</div>
			</div>
		";
	}
		
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

		if (empty($_POST['date_from']) || empty($_POST['date_to']) || empty($_POST['purpose']) || empty($_POST['contact']) ) {
			echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar</p>
						"; information($lempar, "Back"); echo "
					</div>
				</div>";
		}
		
		else if ($hak < $days) {
			echo "<div class='register-logo'><b>Oops!</b> Hak Cuti Deficit</div>
					<div class='box box-primary'>
						<div class='register-box-body'>
							<p>Periksa kembali tanggal cuti. Hak cuti yang tersedia <b>$hak</b>, jumlah pengajuan <b>$days</b>.</p>
							"; information($lempar, "Back"); echo "
						</div>
					</div>";
		}
			
		else{
			$insert = "INSERT INTO table_leave_request (id_number, date_request, date_from, date_to, days, leave_type, purpose, contact) VALUES ('$id_number', '$tgl', '$date_from', '$date_to', '$days', '$leave_type', '$purpose', '$contact')";
			$query = mysqli_query ($con, $insert);

			if($query){
				echo "<div class='register-logo'><b>Transaction</b> Successful!</div>	
					<div class='register-box-body'>
						<p>Cuti requested.</p>
						"; information($lempar, "Next"); echo "
					</div>";
			}
				else {
					echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
				}
			
		}
	}
?>
</div>