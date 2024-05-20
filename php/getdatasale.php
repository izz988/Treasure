<?php
include 'database_connection.php';
ob_start();
session_start();
$tampil    = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE stok_pd > '100' LIMIT 8");
$user    = mysqli_fetch_array($tampil);

$tampilrecom    = mysqli_query($koneksi, "SELECT * FROM produk_pmk ORDER BY jmlh_bli desc LIMIT 8");
$userrecom    = mysqli_fetch_array($tampilrecom);
