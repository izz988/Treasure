<?php
include 'database_connection.php';
ob_start();
session_start();
$tampil    = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE jmlh_bli > '100'" );
$user    = mysqli_fetch_array($tampil);
$foto=$user['foto'];
?>