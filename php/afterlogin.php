<?php
include 'database_connection.php';
ob_start();
session_start();
$tampil    = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$_SESSION[username]'");
$user    = mysqli_fetch_array($tampil);
if ($user['jenis_akun'] == 'Trader') {
    $tampil    = mysqli_query($koneksi, "SELECT * FROM distributor WHERE username='$_SESSION[username]'");
    $user    = mysqli_fetch_array($tampil);
    $msg1 = "";
    $foto_user=$user['foto'];
    $foto_toko =$user['toko'];      
}
else {
    $tampil    =mysqli_query($koneksi, "SELECT * FROM pemasok WHERE username='$_SESSION[username]'");
    $user    = mysqli_fetch_array($tampil);
    $foto_user = $user['foto'];
    $foto_toko = $user['toko'];   
    }
?>