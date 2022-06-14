<?php
session_start();
require_once('../koneksi.php');

if (!isset($_SESSION['username'])) {
	echo "<script>alert('Yuk Login dulu kaka');
    location.href= 'login/index.php'
    </script>";
}


if (isset($_POST["send"])) {
	$status = $_POST["toogle"];

	$query = "UPDATE checktoogle SET
                oc = '$status'
    ";

	$up = mysqli_query($conn, $query);
	$cek = mysqli_affected_rows($conn);

	if ($cek > 0) {
		echo "<script>
        alert('Status Pendaftaran Berhasil Diubah')
        </script>";
	} else {
		echo "<script>
        alert('Status Pendaftaran Gagal diubah')
        </script>";
	}
}

if (isset($_POST["link"])) {
	$links = $_POST["linkwa"];

	$query = "UPDATE `link` SET
                oc = '$links'
    ";

	$up = mysqli_query($conn, $query);
	$cek = mysqli_affected_rows($conn);

	if ($cek > 0) {
		echo "<script>
        alert('Link Grup Berhasil Diubah')
        </script>";
	} else {
		echo "<script>
        alert('Link Grup Gagal diubah')
        </script>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin Business Talk</title>
	<link rel="icon" type="image/png" href="../assets/images/logo-bistalk.png" />

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

	<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>
	<div id="wrapper">

		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element"> <span>
								<div class="m-b-md text-center">
									<img alt="image" class="img-circle" src="../admin/login/images/logo.png" width="100px" />

									<div><a href="#" rel="nofollow">
											<strong>ADMIN BUSINESS TALK </strong></a></div>
								</div>
							</span>
							<!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold" style="color:white;">Admin Bistalk</strong>
                                    </span> <span class="text-muted text-xs block">Urut berdasarkan <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Abjad</a></li>
                                <li><a href="./id.php">No Urut Pendaftaran</a></li>
                                <li class="divider"></li>
                                <li><a href="?ak=logout">Logout</a></li>
                            </ul> -->
						</div>
						<div class="logo-element">
							BISTALK
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
						<form role="search" class="navbar-form-custom" action="">

						</form>
					</div>
					<ul class="nav navbar-top-links navbar-right">

						<li>
							<a href="config/logout.php">
								<i class="fa fa-sign-out"></i>Log Out
							</a>
						</li>
					</ul>

				</nav>
			</div>


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
							<h2> <b> Status Pendaftaran
									<?php

									$data = mysqli_query($conn, "SELECT * FROM checktoogle ");

									$row = mysqli_fetch_row($data);

									// echo $row[1];

									if ($row[1] == "disabled") {
										echo '<i class="text-danger"> Tutup </i>';
									} else {
										echo '<i class="text-warning"> Buka </i>';
									}

									?></b>
							</h2>

							<form action="" method="POST">

								<select name="toogle">
									<option disabled selected value>Buka / Tutup nih</option>
									<option value="">Buka</option>
									<option value="disabled">Tutup</option>
								</select>
								<a onclick="return confirm('yakin ?')">
									<button type="submit" name="send">Submit</button>
								</a>
								<br> <br>
							</form>

							<h3> <b> Link Group
									<?php

									$datas = mysqli_query($conn, "SELECT * FROM link ");

									$rows = mysqli_fetch_row($datas);

									// echo $row[1];

									// if ($row[1] == "disabled") {
									// 	echo '<i class="text-danger"> Tutup </i>';
									// } else {
									// 	echo '<i class="text-warning"> Buka </i>';
									// }

									?></b>
								<a href="<?= $rows[1] ?>">
									<button>cek link</button>
								</a>
							</h3>

							<form action="" method="POST">

								<input type="text" name="linkwa" value="<?= $rows[1] ?>">
								<a onclick="return confirm('ubah linknya nih ??')">
									<button type="submit" name="link">Submit</button>
								</a>
								<br> <br>
							</form>

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
												<th>No</th>
												<th>Nama</th>
												<th>Pekerjaan</th>
												<th>Asal Kota</th>
												<th>Nomor Handphone</th>
												<th>Alamat Email</th>
												<th>Alasan Mengikuti Webinar</th>
												<th>Aksi</th>
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
													<td><?= $row['pekerjaan']; ?></td>
													<td><?= $row['asal']; ?></td>
													<td><?= $row['nomorhp']; ?></td>
													<td><?= $row['email']; ?></td>
													<td><?= $row['alasan']; ?></td>
													<td>
														<a href="../delete.php?id=<?= $row['id']; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini? Data yang telah dihapus tidak dapat dikembalikan.')">
																HAPUS</button></a>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div>

							<h2> <b> Partner Logo </b></h2> <br>

							<form method="POST" action="config/function.php" enctype="multipart/form-data">
								<input type="file" name="file" required> <br>
								<input type="submit" name="submit" value="Upload"> <br> <br>
							</form>

							<table>
								<?php
								$gambar = "Select * from `partner`";
								$tampil = $conn->query($gambar);

								while ($file = $tampil->fetch_array(MYSQLI_ASSOC)) {
								?>

									<tr>
										<img style="margin:5px;" src="<?= "config/file/" . $file['file']; ?>" width="150">
										<a href="config/delete.php?id=<?= $file['id']; ?>">
											<button type="button" class="btn btn-danger" onclick="return confirm('Hapus ??')">HAPUS</button>
										</a>
									</tr>
									<!-- <tr>

		</tr> -->

								<?php } ?>

							</table>
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


			<div class="footer">
				<div>
					<p title="Farhan">
						<center><strong>Maintained by Biro PTI 2021/2022</strong></center>
					</p>
				</div>
			</div>

		</div>
	</div>



	<!-- Mainly scripts -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="js/plugins/dataTables/datatables.min.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="js/inspinia.js"></script>
	<script src="js/plugins/pace/pace.min.js"></script>

	<!-- Page-Level Scripts -->
	<script>
		$(document).ready(function() {
			$('.dataTables-example').DataTable({
				pageLength: 25,
				responsive: true,
				dom: '<"html5buttons"B>lTfgitp',
				buttons: [{
						extend: 'copy'
					},
					{
						extend: 'csv'
					},
					{
						extend: 'excel',
						title: 'Data Peserta Bistalk'
					},
					{
						extend: 'pdf',
						title: 'Data Peserta Bistalk'
					},

					{
						extend: 'print',
						customize: function(win) {
							$(win.document.body).addClass('white-bg');
							$(win.document.body).css('font-size', '10px');

							$(win.document.body).find('table')
								.addClass('compact')
								.css('font-size', 'inherit');
						}
					}
				]

			});

		});
	</script>

</body>

</html>