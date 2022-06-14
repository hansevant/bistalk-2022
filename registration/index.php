<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Bistalk | Registration</title>
	<link rel="shortcut icon" type="image/icon" href="../assets/images/logo-bistalk.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINEARICONS -->
	<link rel="stylesheet" href="fonts/linearicons/style.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">

	<style>
		a.disabled {
			pointer-events: none;
			cursor: default;
		}

		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		/* Firefox */
		input[type=number] {
			-moz-appearance: textfield;
		}
	</style>
</head>

<body>

	<div class="wrapper">
		<div class="inner">
			<img src="images/logocopy.png" alt="" class="image-1">
			<form method="post" action="simpan.php">
				<h3>Business Talk</h3><br>
				<div style="display: none;">
					<!-- hitwebcounter Code START -->
					<a href="https://www.hitwebcounter.com" target="_blank">
						<img src="https://hitwebcounter.com/counter/counter.php?page=7945536&style=0001&nbdigits=5&type=ip&initCount=0" title="Free Counter" Alt="web counter" border="0" /></a>

				</div>
				<h5>"Scale Up Your Business with Digital Marketing"</h5><br>
				<h6>Isi data diri Anda untuk mengikuti webinar.</h6>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required autofocus>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-briefcase"></span>
					<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-home"></span>
					<input type="text" class="form-control" name="asal" placeholder="Asal Kota" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-phone-handset"></span>
					<input type="tel" class="form-control" name="nomorhp" placeholder="Nomor HP" onkeypress="return hanyaAngka(event)" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-envelope"></span>
					<input type="email" class="form-control" name="email" placeholder="Alamat Email" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-checkmark-circle"></span>
					<input type="text" class="form-control" name="alasan" placeholder="Alasan Mengikuti Webinar" required>
				</div>

				<?php
				include "../koneksi.php";

				$data = mysqli_query($conn, "SELECT * FROM checktoogle ");

				$row = mysqli_fetch_row($data);

				// echo $row[1];
				?>

				<button <?= $row[1] ?>>
					<span id="<?= $row[1] ?>">Daftar</span>
				</button>
				<!-- <center><h4>Maaf, pendaftaran belum dibuka.</h4></center> -->
				<div class="back">
					<a href="../">Kembali</a>
				</div>
			</form>
			<img src="images/logo-bemfikti.png" alt="" class="image-2">
		</div>

	</div>

	<script>
		var element = document.getElementById("disabled");
		element.innerHTML = "Pendaftaran ditutup :(";

		function hanyaAngka(event) {
			var angka = (event.which) ? event.which : event.keyCode
			if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
				return false;
			return true;
		}
	</script>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>