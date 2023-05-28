<?php
session_start();
//hancurkan session pelanggan
session_destroy();

echo "<script>alert('Anda telah logout');</script>";
echo "<script>location='index.php';</script>";
?>