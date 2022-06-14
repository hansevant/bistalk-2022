<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "bemfikti_bistalk";

$conn = mysqli_connect($host, $user, $pass, $db) or die("koneksi gagal");

//untuk HTTPS
// if ($_SERVER["HTTPS"] != "on") {
//     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
//     exit();
// }
