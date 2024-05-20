<?php
include 'database_connection.php';
ob_start();
session_start();
$idpd = $_SESSION['idprd'];
if (isset($_GET['tambah'])){
	$tampil = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE pdpmk_id='$idpd'");
	$user   = mysqli_fetch_array($tampil);
	$nama = $user['nama_pd'];
	$category = $user['kategori'];
	$stok = $_GET["jml"];
	$unit = $user['Satuan'];
	$total = $_GET ["total"];
	$method = $_GET["metode"];
	$stid = 'S' . rand(0,1000);
	$tgl = date("Y/m/d");
	$jam = date("h:i:sa");
	$psid = 'P' . rand(0,1000);
	$foto= '<img class="fototoko" src="data:image/jpeg;base64,'.base64_encode( $user['foto'] ).'"/>';

	$tampil2    = mysqli_query($koneksi, "SELECT * FROM distributor WHERE username='$_SESSION[username]'");
 	$user2    = mysqli_fetch_array($tampil2);
 	$angka = rand(0,1000);
 	$pd_id = 'PDTD' . $angka;
 	$id = $user2['id_dstbr'];

	$sql4 = "INSERT INTO produk_dst(pddst_id , nama_pd,  stok_pd, kategori, Satuan, id_dstbr, foto) 
	VALUES('$pd_id','$nama','$stok', '$category', '$unit', '$id' , '".$foto."')";
	
	$sql5 = "INSERT INTO struk(struk_id , id_dstbr,  pesan_id, pdpmk_id, total_harga, metode_pembayaran) 
	VALUES('$stid','$id','$psid', '$idpd', '$total', '$method' )";
	
	$sql6 = "INSERT INTO pemesanan (pesan_id , struk_id,  tanggal, jam, pdpmk_id, jumlah) 
	VALUES('$psid','$stid','$tgl', '$jam', '$idpd', '$stok' )";

	$sql7 = "UPDATE produk_pmk SET stock_pd -= '$stok'  WHERE pdpmk_id = '$idpd'";
	

            if ($koneksi->query($sql4) === TRUE AND $koneksi->query($sql5) === TRUE AND $koneksi->query($sql6) === TRUE AND $koneksi->query($sql7) === TRUE) {
                echo "New record created successfully";
                header("location:../hometrader.php");
                } else {
                echo "Error: " . "<br>" . $koneksi->error;
                }
    }

?>