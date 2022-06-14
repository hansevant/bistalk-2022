<?php
include_once "../koneksi.php";
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$pekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']);
$asal = mysqli_real_escape_string($conn, $_POST['asal']);
$nomorhp = mysqli_real_escape_string($conn, $_POST['nomorhp']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$alasan = mysqli_real_escape_string($conn, $_POST['alasan']);

//script validasi data

$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM peserta WHERE email='$email'"));
if ($cek > 0) {
    echo "<script>window.alert('Email yang Anda masukkan sudah didaftarkan sebelumnya.')
    window.location='failed.php'</script>";
} else {
    mysqli_query($conn, "insert into peserta (nama, pekerjaan, asal, nomorhp, email, alasan) values ('$nama','$pekerjaan','$asal','$nomorhp','$email','$alasan')");

    echo "<script>window.alert('Data yang Anda masukkan telah tersimpan.')
    window.location='success.php'</script>";
}
