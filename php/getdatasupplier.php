<?php
include 'database_connection.php';
ob_start();
session_start();
$tampil1    = mysqli_query($koneksi, "SELECT * FROM pemasok WHERE username = '$_SESSION[username]' " );
$user1    = mysqli_fetch_assoc($tampil1);
$id = $user1['id_pmsk'];
$tampil    = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE id_pmsk = '$id' " );
$user    = mysqli_fetch_assoc($tampil);
$foto=$user['foto'];
?>