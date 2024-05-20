<?php
include 'database_connection.php';
ob_start();
session_start();

$search_value=@$_cari["cari"];
$tampil    = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE nama_pd LIKE '%$search_value%'");
$user    = mysqli_fetch_array($tampil);
$foto = $user['foto'];
header("location:../searchtrader.php");
?>