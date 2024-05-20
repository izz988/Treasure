<?php
include 'database_connection.php';
ob_start();
session_start();

$search=@$_POST["cari"];
$tampil  = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE nama_pd LIKE '%$search%'");
$user    = mysqli_fetch_array($tampil);
//foreach($tampil as $tmp){
	//echo $tmp['nama_pd'];
//}
//die();
if(isset($_POST["search"]))
{
	$search=@$_POST["cari"];
	header("location:../search.php");
}
?>