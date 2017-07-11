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
	
	$nip		=$_SESSION['id_user'];
	$tgl		=date('Y:m:d');
	
		
	if ($_POST['save'] == "save") {
		$dari	=$_POST['dari'];
		$sampai	=$_POST['sampai'];
		//menghitung jumlah hari
		$selisih = strtotime($sampai) - strtotime($dari);
		$selisih = $selisih/86400;
		$jml_hari = 1 + $selisih;
		
		$cekhak= "SELECT hak_cuti_tahunan FROM tb_pegawai WHERE nip='$nip'";
		$query=mysqli_query($con, $cekhak);
			$data=mysqli_fetch_array($query);
			$hak=$data['hak_cuti_tahunan'];
	
		if (empty($_POST['dari']) || empty($_POST['sampai'])) {
			echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-pegawai.php?page=form-permohonan-cuti-tahunan' class='btn btn-block btn-warning'>Back</button>
							</div>
						</div>
					</div>
				</div>";
		}
		
	else if ($hak < $jml_hari) {
		echo "<div class='register-logo'><b>Oops!</b> Hak Cuti Deficit</div>
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Periksa kembali tanggal cuti. Hak cuti yang tersedia <b>$hak</b>, jumlah pengajuan <b>$jml_hari</b>.</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-pegawai.php?page=form-permohonan-cuti-tahunan' class='btn btn-block btn-warning'>Back</button>
							</div>
						</div>
					</div>
				</div>";
	}
		
	else{

		$insert = "INSERT INTO tb_mohoncuti (nip, tgl, dari, sampai, jml_hari, jenis) VALUES ('$nip', '$tgl', '$dari', '$sampai', '$jml_hari', 'Cuti Tahunan')";
		$query = mysqli_query ($con, $insert);

		if($query){
			echo "<div class='register-logo'><b>Transaction</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Cuti requested.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-pegawai.php' class='btn btn-danger btn-block btn-flat'>Next >></button>
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