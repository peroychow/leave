<section class="content-header">
    <h1>Master<small>Data User</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data User</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";

	$showUsers = mysqli_query($con, "
		SELECT table_employee.`id_number` AS id_employee, table_employee.name, users.password, table_access.name AS access, users.active
		FROM users
		INNER JOIN table_employee
		ON users.id_number = table_employee.id_number
		INNER JOIN table_access
		ON users.access = table_access.id_access;
	");

	$selectEmployee = mysqli_query($con, "
		SELECT id_number, name FROM table_employee;
	");

	$getAccess = mysqli_query($con, "
		SELECT * FROM table_access;
	");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<div class="panel-group">
						<div class="panel panel-default">
							<div class="panel-heading">
								 <h4 class="panel-title"><i class="fa fa-plus"></i> Add Data User<a data-toggle="collapse" data-target="#formuser" href="#formuser" class="collapsed"></a></h4>
							</div>
							<div id="formuser" class="panel-collapse collapse">
								<div class="panel-body">
									<form action="home-admin.php?page=master-user" class="form-horizontal" method="POST" enctype="multipart/form-data">
										<div class="form-group">
											<label class="col-sm-3 control-label">Employee Name</label>
											<div class="col-sm-7">
												<select name="id_employee" class="form-control">
													<?php
														while($selectName=mysqli_fetch_array($selectEmployee)){
													?>
														<option value="<?php echo $selectName['id_number']; ?>"><?php echo $selectName['name']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label">Access</label>
											<div class="col-sm-7">
												<select name="hak_akses" class="form-control">
													<?php
														while($selectAccess=mysqli_fetch_array($getAccess)){
													?>
														<option value="<?php echo $selectAccess['id_access']; ?>"><?php echo $selectAccess['name']; ?></option>
													<?php
														}
													?>
												</select>
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-offset-3 col-sm-7">
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
								<th>ID Employee</th>
								<th>Nama</th>
								<th>Password</th>
								<th>Hak Akses</th>
								<th>Aktif</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($user=mysqli_fetch_array($showUsers)){
						?>
							<tr>
								<td><?php echo $user['id_employee'];?></td>
								<td><?php echo $user['name'];?></td>
								<td><?php echo $user['password'];?></td>
								<td><?php echo $user['access'];?></td>
								<td><?php echo $user['active'];?></td>
								<td align="center"><a href="home-admin.php?page=pre-activated-deactivate-user&id_number=<?=$user['id_employee'];?>&aktif=<?=$user['active'];?>" title="Activated OR Deactivate"><i class="fa  fa-refresh"></i></a></td>
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
