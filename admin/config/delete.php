<?php
include_once("../../koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM `partner` WHERE id=$id");

$cek = mysqli_affected_rows($conn);

// if ($cek > 0) {
//     echo "<script>
//         confirm('Hapus Gambar?');
//         document.location='../index.php'
//       </script>";

//     }
header("Location: ../index.php");
exit;
