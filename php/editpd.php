<?php
include 'database_connection.php';
ob_start();
session_start();
$id= $_SESSION["idprd"];
$view = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE pdpmk_id='$id'");
$lihat = mysqli_fetch_assoc($view);

$desc = $_GET ['Description'];
$stok = $_GET ['stock'];
$harga = $_GET ['price'];
$unit = $_GET ['unit'];

    $sql = " UPDATE produk_pmk SET harga_pd = '$harga' WHERE pdpmk_id = '$id'";
    $sql2  = " UPDATE produk_pmk SET Keterangan = '$desc' WHERE pdpmk_id = '$id'";
    $sql3 = " UPDATE produk_pmk SET stok_pd = '$stok' WHERE pdpmk_id = '$id'";
    $sql4  = " UPDATE produk_pmk SET Satuan = '$unit' WHERE pdpmk_id = '$id'";
   	mysqli_query($koneksi, $sql);
   	mysqli_query($koneksi, $sql2);
   	mysqli_query($koneksi, $sql3);
   	mysqli_query($koneksi, $sql4);


    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../homesupplier.php">';
?>