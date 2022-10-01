<?php
 
session_start();

//menghancurkn sesion(pelanggan)
session_destroy();

echo "<script>alert('anda telah logout');</script>";
echo "<script>location='index.php';</script>";

?>