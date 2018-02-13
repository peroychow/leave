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

	$leavenow = mysqli_query($con, "
		SELECT table_leave_request.id_leave, table_employee.name, table_leave_request.id_number, DATE_FORMAT(table_leave_request.date_request, '%e %M %Y') AS date_request, DATE_FORMAT(table_leave_request.date_from, '%e %M %Y') AS date_from, DATE_FORMAT(table_leave_request.date_to, '%e %M %Y') AS date_to, table_leave_request.days, table_leave_request.leave_type, table_leave_request.approval, table_leave_request.purpose
		FROM table_leave_request
		INNER JOIN table_employee
		ON table_leave_request.id_number = table_employee.id_number
		WHERE date(now()) 
		BETWEEN date_from AND date_to
	");

	$takeEmployee = mysqli_query($con, "SELECT * FROM table_employee WHERE id_number='$_SESSION[id_number]'");
	$result = mysqli_fetch_array($takeEmployee);
	$remaining_leave = $result['remaining_leave'];
?>
<section class="content">
    <div class="row">
		<div class="col-lg-3 col-xs-6">
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?=$remaining_leave?></h3>
					<p>Remaining Leave</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<p class="small-box-footer">Leave <i class="fa fa-arrow-circle-right"></i></p>
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
<section class="content">
    <div class="row">
    	<div class="col-lg-3 col-xs-6">
			<div class="card">
			  <div class="card-block">
			    <h4 class="card-title">Who leave now?</h4>
			    <h6 class="card-subtitle mb-2 text-muted"><?php echo date("d-m-Y");?></h6>
			    
			    <ul class="list-group list-group-flush">
			    	<?php 
			    		while($wholeavenow=mysqli_fetch_array($leavenow)) {
			    			echo "<li class='list-group-item'>".$wholeavenow['name']." - <i>".$wholeavenow['purpose']."</i></li>";
			    		}
			    	?>
			    	<!--
					<li class="list-group-item">Cras justo odio</li>
				    <li class="list-group-item">Dapibus ac facilisis in</li>
				    <li class="list-group-item">Vestibulum at eros</li>
					-->
				</ul>
			  </div>
			</div>
        </div>
    </div>
</section>