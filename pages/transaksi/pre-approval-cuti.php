<?php 
	$id_number = $_SESSION['id_number'];
	$queryAccess = mysqli_query($con, "
		SELECT * FROM users WHERE id_number = '$id_number'
	");
	$takeAccess = mysqli_fetch_array($queryAccess);
	if($takeAccess['access']==2) {
		$redirect = "home-hrd.php";
	}
	else if($takeAccess['access']==3) {
		$redirect = "home-supervisor.php";
	}
?>

<section class="content-header">
    <h1>Pre Approval<small>Leave</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Leave Approval</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Date Request</th>
								<th>Days</th>
								<th>Date From</th>
								<th>Date To</th>
								<th>Leave Type</th>
								<th>Propose</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							include "dist/koneksi.php";
							if($takeAccess['access']==2) {
								$tampilCuti=mysqli_query($con, "

									SELECT table_leave_request.id_leave, table_leave_request.id_number, table_employee.name, DATE_FORMAT(table_leave_request.date_request, '%e %M %Y') AS date_request, DATE_FORMAT(table_leave_request.date_from, '%e %M %Y') AS date_from, DATE_FORMAT(table_leave_request.date_to, '%e %M %Y') AS date_to, table_leave_request.days, table_leave_request.leave_type, table_leave_request.approval, table_leave_request.purpose
									FROM table_leave_request
									INNER JOIN table_employee
									ON table_leave_request.id_number = table_employee.id_number
									WHERE table_leave_request.approval is NULL
								");
							}
							else if($takeAccess['access']==3) {
								$tampilCuti=mysqli_query($con, "
									SELECT table_leave_request.id_leave, table_leave_request.id_number, table_employee.name, DATE_FORMAT(table_leave_request.date_request, '%e %M %Y') AS date_request, DATE_FORMAT(table_leave_request.date_from, '%e %M %Y') AS date_from, DATE_FORMAT(table_leave_request.date_to, '%e %M %Y') AS date_to, table_leave_request.days, table_leave_request.leave_type, table_leave_request.approval, table_leave_request.purpose
										FROM table_leave_request
										INNER JOIN table_employee
										ON table_leave_request.id_number = table_employee.id_number
										WHERE table_leave_request.approval IS NULL AND table_employee.reporting_to='$id_number'
								");
							}
							while($history=mysqli_fetch_array($tampilCuti)){
						?>	
							<tr>
								<td><?php echo $history['name'];?></td>
								<td><?php echo $history['date_request'];?></td>
								<td><?php echo $history['days'];?></td>
								<td><?php echo $history['date_from'];?></td>
								<td><?php echo $history['date_to'];?></td>
								<td><?php echo $history['leave_type'];?></td>
								<td><?php echo $history['purpose'];?></td>
								<td class="tools"><a href="<?=$redirect?>?page=form-approval-cuti&id_leave=<?=$history['id_leave'];?>&id_number=<?=$history['id_number'];?>&days=<?=$history['days'];?>&leave_type=<?=$history['leave_type'];?>" title="approval"><i class="fa fa-check"></i></a></td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
        </div>
	</div>
</section>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>