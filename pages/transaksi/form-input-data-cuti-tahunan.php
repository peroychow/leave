<section class="content-header">
    <h1>Annual Leave<small>Data</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data Cuti Tahunan</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$showEmployee = mysqli_query($con, "SELECT id_number, name, remaining_leave FROM table_employee");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								 <h4 class="panel-title"><i class="fa fa-plus"></i> Add Annual Leave to Employee<a data-toggle="collapse" data-target="#formaddcuti" href="#formaddcuti" class="collapsed"></a></h4>
							</div>
							<div id="formaddcuti" class="panel-collapse collapse">
								<div class="panel-body">
									<form action="home-hrd.php?page=input-data-cuti-tahunan" class="form-horizontal" method="POST" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-3 control-label">Employee Name</label>
											<div class="col-sm-3">
												<?php 
													$data = mysqli_query($con, "SELECT * FROM table_employee");
												?>
													<select name="id_number" onchange="changeValue(this.value)" class="form-control">
														<option value="">Select NIP</option>
														<?php
															while ($row = mysqli_fetch_array($data)) {   
													echo '<option value="'.$row['id_number'].'">'. $row['id_number'].' - '.$row['name'].'</option>';    
															}    
														?>
													</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Input Leave</label>
											<div class="col-sm-3">
												<input type="text" name="hak_cuti_tahunan" class="form-control" placeholder="Jumlah" maxlength="3">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Note</label>
											<div class="col-sm-6">
												<textarea type="text" name="note" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-3">
												<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
											</div>	
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>NIP</th>
								<th>Name</th>
								<th>Remaining Leave</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($peg=mysqli_fetch_array($showEmployee)){
						?>	
							<tr>
								<td><?php echo $peg['id_number'];?></td>
								<td><?php echo $peg['name'];?></td>
								<td><?php echo $peg['remaining_leave'];?> Hari</td>
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
<!-- datepicker -->
<script type="text/javascript" src="plugins/datepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
	 $('.form_date').datetimepicker({
			language:  'id',
			weekStart: 1,
			todayBtn:  1,
	  autoclose: 1,
	  todayHighlight: 1,
	  startView: 2,
	  minView: 2,
	  forceParse: 0
		});
</script>