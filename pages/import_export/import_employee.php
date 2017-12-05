<?php
	include "dist/koneksi.php";

	$showdata = mysqli_query($con, "
		SELECT * FROM table_trial;
	");
?>

<html>
	<head>
		<title>Import Data From CSV</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<body>
		<table id="showtime" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Usia</th>
			</thead>
			<tbody>
				<?php
					while($peg=mysqli_fetch_array($showdata)){
				?>
				<tr>
					<td><?php echo $peg['id']; ?></td>
					<td><?php echo $peg['nama']; ?></td>
					<td><?php echo $peg['email']; ?></td>
					<td><?php echo $peg['alamat']; ?></td>
					<td><?php echo $peg['umur']; ?></td>
				</tr>
				<?php 
					} 
				?>
			</tbody>
		</table>

		<div>
			<p>Import Data :</p>
			<form enctype="multipart/form-data" method="post" action="home-hrd.php?page=import-save">
				<input type="file" id="fileupload" name="fileupload" /><br>
				<button type="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
			</form>
			<div>
			<hr />
		<div>
			<p>Export Data :</p>
			<a href="home-hrd.php?page=export-csv" class="btn btn-success">Export</a>
		</div>
	</body>
</html>