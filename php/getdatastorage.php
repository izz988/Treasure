<?php
include 'database_connection.php';
ob_start();
session_start();
$tampil1    = mysqli_query($koneksi, "SELECT * FROM distributor WHERE username='$_SESSION[username]'");
$user1    = mysqli_fetch_array($tampil1);
$id = $user1['id_dstbr'];
$tampil    = mysqli_query($koneksi, "SELECT * FROM produk_dst WHERE id_dstbr = '$id' ");
$idpd = $_SESSION ['idpd'];
if (isset($_GET['update'])){
    $jumlah = $_GET ['jumlah'];
    $sql = " UPDATE produk_dst SET stok_pd = '$jumlah' WHERE pddst_id = '$idpd' AND id_dstbr = '$id' ";

    if (mysqli_query($koneksi, $sql)) {
        echo "Stok Berhasil Di Masukkan";
        #echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../traderstorage.php">';
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>