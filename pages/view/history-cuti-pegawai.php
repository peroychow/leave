<section class="content-header">
    <h1>Leave<small>History</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-pegawai.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Leave History</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<table id="example2" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Leave No</th>
								<th>Date Requested</th>
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
							$id_number = $_SESSION['id_number'];

							include "dist/koneksi.php";
							$showLeave=mysqli_query($con, "SELECT * FROM table_leave_request WHERE id_number='$id_number'");
							while($history=mysqli_fetch_array($showLeave)){
						?>	
							<tr>
								<td><?php echo $history['id_leave'];?></td>
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