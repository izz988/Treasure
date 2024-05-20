<?php
include 'database_connection.php';
ob_start();
session_start();

$id= $_GET["idprd"];
$view = mysqli_query($koneksi, "DELETE FROM produk_pmk WHERE pdpmk_id='$id'");

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../homesupplier.php">';
?>