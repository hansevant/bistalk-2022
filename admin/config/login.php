<?php
    session_start();
    include "../../koneksi.php";

    if (isset($_POST['siap'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = mysqli_query($conn, "SELECT * FROM `akun` WHERE username = '$username' AND password = md5('$password') ");
        $data = mysqli_fetch_array($sql);
        $cek = mysqli_num_rows($sql);
        
        if ($cek === 1) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Selamat datang nax bismit'); 
                location.href='../';</script>";
        }else {
            echo "<script>alert('Salah akun cuyy'); 
            location.href='../login';</script>";
        }
    
    }
