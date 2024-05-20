<?php
include 'database_connection.php';
ob_start();
$tampilbuah    = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE kategori='buah' ORDER BY RAND() LIMIT 5" );
$userbuah    = mysqli_fetch_array($tampilbuah);

$tampilsayur   = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE kategori='sayur' ORDER BY RAND() LIMIT 5");
$usersayur    = mysqli_fetch_array($tampilsayur);

$tampilsembako  = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE kategori='sembako' ORDER BY RAND() LIMIT 5");
$usersembako   = mysqli_fetch_array($tampilsembako);

?>