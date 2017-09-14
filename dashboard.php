<section class="content-header">
   <h1>Leave Request<small>Dashboard</small></h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$leave = mysqli_query($con, "SELECT * FROM table_leave_request");
	$jmlcuti = mysqli_num_rows($leave);
	
	$approve = mysqli_query($con, "SELECT * FROM table_leave_request WHERE approval='Y'");
	$jmlapprove = mysqli_num_rows($approve);
	
	$wait = mysqli_query($con, "SELECT * FROM table_leave_request WHERE approval is NULL");
	$jmlwait = mysqli_num_rows($wait);
	
	$employee = mysqli_query($con, "SELECT * FROM table_employee");
	$jmlpegawai = mysqli_num_rows($employee);
?>
<section class="content">
    <div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?=$jmlcuti?></h3>
					<p>Leave Total</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<p class="small-box-footer">leave <i class="fa fa-arrow-circle-right"></i></p>
			</div>
        </div>
        <div class="col-lg-3 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
					<h3><?=$jmlapprove?></h3>
					<p>Approved</p>
				</div>
				<div class="icon">
					<i class="ion ion-person"></i>
				</div>
				<p class="small-box-footer">Approval <i class="fa fa-arrow-circle-right"></i></p>
			</div>
        </div>
        <div class="col-lg-3 col-xs-6">
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3><?=$jmlwait?></h3>
					<p>Waiting Approval</p>
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
					<h3><?=$jmlpegawai?></h3>
					<p>Employee Total</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<p class="small-box-footer">Employee <i class="fa fa-arrow-circle-right"></i></p>
			</div>
        </div>
    </div>
</section>