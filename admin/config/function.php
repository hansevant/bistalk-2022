<?php

include_once "../../koneksi.php";

if (isset($_POST['submit'])) {

    $type = array('png', 'jpg', 'jpeg');
    $name = $_FILES['file']['name'];
    $x = explode('.', $name);
    $format = strtolower(end($x));
    $size = $_FILES['file']['size'];

    $file_tmp = $_FILES['file']['tmp_name'];

    if (in_array($format, $type) === true) {
        move_uploaded_file($file_tmp, 'file/' . $name);
        $simpan = mysqli_query($conn, "INSERT INTO `partner` VALUES
                                   ('', '$name') ");
        if ($simpan) {
            echo "<script>
                            alert('Berhasil Upload Gambar!');
                            document.location='../index.php'
                          </script>";
        } else {
            echo "<script>
                            alert('Berhasil Upload Gagal!');
                            document.location='../index.php'
                          </script>";
        }
    } else {
        echo "<script>
                    alert('Format Gambar Harus JPG or PNG');
                    document.location='../index.php'
                  </script>";
    }
}
