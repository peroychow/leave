<section class="content-header">
    <h1>Pre Approval<small>Cuti</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-hrd.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Approval Cuti</li>
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
								<th>No. Cuti</th>
								<th>Nama</th>
								<th>Tgl Pengajuan</th>
								<th>Jumlah Hari</th>
								<th>Dari Tanggal</th>
								<th>Sampai Tanggal</th>
								<th>Jenis Cuti</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							include "dist/koneksi.php";
							$tampilCuti=mysqli_query($con, "

								SELECT tb_mohoncuti.no_cuti, tb_mohoncuti.nip, tb_pegawai.nama, tb_mohoncuti.tgl, tb_mohoncuti.dari, tb_mohoncuti.sampai, tb_mohoncuti.jml_hari, tb_mohoncuti.jenis, tb_mohoncuti.persetujuan
								FROM tb_mohoncuti
								INNER JOIN tb_pegawai
								ON tb_mohoncuti.nip = tb_pegawai.nip
								WHERE tb_mohoncuti.persetujuan = ''
							");

							while($history=mysqli_fetch_array($tampilCuti)){
						?>	
							<tr>
								<td><?php echo $history['no_cuti'];?></td>
								<td><?php echo $history['nama'];?></td>
								<td><?php echo $history['tgl'];?></td>
								<td><?php echo $history['jml_hari'];?></td>
								<td><?php echo $history['dari'];?></td>
								<td><?php echo $history['sampai'];?></td>
								<td><?php echo $history['jenis'];?></td>
								<td class="tools"><a href="home-hrd.php?page=form-approval-cuti&no_cuti=<?=$history['no_cuti'];?>&nip=<?=$history['nip'];?>&jml_hari=<?=$history['jml_hari'];?>&jenis=<?=$history['jenis'];?>" title="approval"><i class="fa fa-check"></i></a></td>
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