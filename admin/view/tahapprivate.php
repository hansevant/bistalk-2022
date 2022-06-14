<?php

//$sdd = "SELECT tbl_biodata.npm, tbl_biodata.domisili,tbl_akun.nama_lengkap,tbl_berkas.foto,tbl_berkas.rangkuman,tbl_berkas.portofolio,tbl_akun.aktivitas_terakhir,tbl_akun.tahap_sekarang from ((tbl_biodata inner join tbl_berkas on tbl_biodata.npm = tbl_berkas.npm ) inner join tbl_akun on tbl_biodata.npm = tbl_akun.npm)";
$sdd = "Select * from peserta";
$hasil = $conn->query($sdd);




?>

<!-- paraf 1-->
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">

		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Data Peserta</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example">
							<thead>
								<tr>
									<th>No Urut</th>
									<th>Nama</th>
									<th>Waktu Pendaftaran</th>
									<th>Pekerjaan</th>
									<th>Asal Kota</th>
									<th>Nomor Handphone</th>
									<th>Alamat Email</th>
									<th>Alasan Mengikuti Webinar</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
								?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $row['nama']; ?></td>
										<td><?= $row['daftar']; ?></td>
										<td><?= $row['pekerjaan']; ?></td>
										<td><?= $row['asal']; ?></td>
										<td><?= $row['nomorhp']; ?></td>
										<td><?= $row['email']; ?></td>
										<td><?= $row['alasan']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>


<!-- Codes POPUP WINDOW-->
<script type="text/javascript">
	// Popup window code
	function newPopup(url) {
		popupWindow = window.open(
			url, 'popUpWindow', 'height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
	}
</script>

<!-- end paraf 1-->