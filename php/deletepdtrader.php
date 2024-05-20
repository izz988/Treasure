<?php
include 'database_connection.php';
ob_start();
session_start();

$id= $_SESSION["idpd"];
$view = mysqli_query($koneksi, "DELETE FROM produk_dst WHERE pddst_id='$id'");

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../traderstorage.php">';
?>