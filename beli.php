<?php
session_start();
//mendapatkan id produk dari url
$id_produk= $_GET['id'];

//jika produk sudah ada, maka jumlah +1 
if (isset($_SESSION['keranjang'][$id_produk]))
{
    $_SESSION['keranjang'][$id_produk] += 1;
}
//belum ada dikeranjang, maka jumlah 1
else
{
    $_SESSION['keranjang'][$id_produk] = 1;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//larikan ke halaman keranjang
    echo "<script>alert('Produk berhasil ditambahkan ke keranjang');</script>";
    echo "<script>location='keranjang.php';</script>";
?>