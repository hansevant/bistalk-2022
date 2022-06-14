<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "bemfikti_bistalk";

// $host ="localhost"; //host server
// $user ="bemfikti_ehek"; //user login phpMydmin
// $pass ="ehek123"; //pass login phpMyAdmin
// $db ="bemfikti_font"; //name database

// $host ="localhost"; 
// $user ="bemfikti_basket"; 
// $pass ="QwertyAlif4321"; 
// $db ="bemfikti_bball"; 
$conn = mysqli_connect($host, $user, $pass, $db) or die("koneksi gagal");

//untuk HTTPS
// if ($_SERVER["HTTPS"] != "on") {
//     header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
//     exit();
// }
