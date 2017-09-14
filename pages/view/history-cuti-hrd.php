<section class="content-header">
    <h1>Leave<small>History</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Leave History</li>
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
								<th>ID Number</th>
								<th>Date Request</th>
								<th>Days</th>
								<th>Date From</th>
								<th>Date To</th>
								<th>Leave Type</th>
								<th>Purpose</th>
								<th>Approval</th>
							</tr>
						</thead>
						<tbody>
						<?php
							include "dist/koneksi.php";
							$showLeave=mysqli_query($con, "
								SELECT table_leave_request.id_leave, table_employee.name, table_leave_request.id_number, table_leave_request.date_request, table_leave_request.date_from, table_leave_request.date_to, table_leave_request.days, table_leave_request.leave_type, table_leave_request.approval, table_leave_request.purpose
								FROM table_leave_request
								INNER JOIN table_employee
								ON table_leave_request.id_number = table_employee.id_number
							");
							while($history=mysqli_fetch_array($showLeave)){
						?>	
							<tr>
								<td><?php echo $history['name'];?></td>
								<td><?php echo $history['id_number'];?></td>
								<td><?php echo $history['date_request'];?></td>
								<td><?php echo $history['days'];?></td>
								<td><?php echo $history['date_from'];?></td>
								<td><?php echo $history['date_to'];?></td>
								<td><?php echo $history['leave_type'];?></td>
								<td><?php echo $history['purpose'];?></td>
								<td><?php echo $history['approval'];?></td>
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