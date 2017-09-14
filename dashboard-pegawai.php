<section class="content-header">
   <h1>Leave Request<small>Dashboard</small></h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$cuti=mysqli_query($con, "SELECT * FROM table_leave_request WHERE id_number='$_SESSION[id_number]'");
	$jmlcuti = mysqli_num_rows($cuti);
	
	$approve=mysqli_query($con, "SELECT * FROM table_leave_request WHERE id_number='$_SESSION[id_number]' AND approval='Y'");
	$jmlapprove = mysqli_num_rows($approve);
	
	$wait=mysqli_query($con, "SELECT * FROM table_leave_request WHERE id_number='$_SESSION[id_number]' AND approval is NULL");
	$jmlwait = mysqli_num_rows($wait);

	$takeEmployee = mysqli_query($con, "SELECT * FROM table_employee WHERE id_number='$_SESSION[id_number]'");
	$result = mysqli_fetch_array($takeEmployee);
	$remaining_leave = $result['remaining_leave'];
?>
<section class="content">
    <div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?=$jmlcuti?></h3>
					<p>Total Cuti</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<p class="small-box-footer">Cuti <i class="fa fa-arrow-circle-right"></i></p>
			</div>
        </div>
        <div class="col-lg-3 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
					<h3><?=$jmlapprove?></h3>
					<p>Total Approve</p>
				</div>
				<a href="home-pegawai.php?page=history-cuti-pegawai">
				<div class="icon">
					<i class="ion ion-person"></i>
				</div>
				</a>
				<p class="small-box-footer">Approval <i class="fa fa-arrow-circle-right"></i></p>
			</div>
        </div>
        <div class="col-lg-3 col-xs-6">
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3><?=$jmlwait?></h3>
					<p>Total Waiting</p>
				</div>
				<div class="icon">
					<i class="ion ion-person"></i>
				</div>
				<p class="small-box-footer">Approval <i class="fa fa-arrow-circle-right"></i></p>
			</div>
        </div>
        <div class="col-lg-3 col-xs-6">
			<div class="small-box bg-red">
				<div class="inner">
					<h3><?=$remaining_leave?></h3>
					<p>Remaining Leave</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<p class="small-box-footer">Remaining Leave <i class="fa fa-arrow-circle-right"></i></p>
			</div>
        </div>
    </div>
</section>