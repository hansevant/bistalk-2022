<?php
session_start();
session_destroy();
echo "<script>alert('Jumpa lagii~');
location.href='../login/index.php'</script>";
echo "<script> window.location = '../login/index.php' </script>";

?>