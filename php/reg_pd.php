<?php
include 'database_connection.php';
ob_start();
session_start();

if (isset($_POST['submit'])){
    $namaproduk = $_POST['name'];
    $deskripsi =@$_POST['deskripsi'];
    $harga = $_POST['price'];
    $category = $_POST['kategori'];
    $stok = $_POST['stock'];
    $unit = $_POST['unit'];
    $tampil    = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$_SESSION[username]'");
    $user    = mysqli_fetch_array($tampil);
    $Boleh	= array('png','jpg','jfif');
    $foto = $_FILES['foto']['name'];
	$x1 = explode('.', $foto);
	$ekstensi1 = strtolower(end($x1));
	$gambarproduk = addslashes(file_get_contents($_FILES['foto']['tmp_name']));// ini buat ambil gambarnya

    if ($user['jenis_akun'] == 'Supplier'){
        $tampil1    = mysqli_query($koneksi, "SELECT * FROM pemasok WHERE username='$_SESSION[username]'");
        $user1    = mysqli_fetch_array($tampil1);
        $angka = rand(0,1000);
        $pd_id = 'PDMK' . $angka;
        $id = $user1['id_pmsk'];
        if(in_array($ekstensi1, $Boleh) === false and in_array($ekstensi2, $Boleh) === false){
            echo 'Pilih foto dengan format png atau jpg';
        }
        
        $sql3 = "INSERT INTO produk_pmk(pdpmk_id , nama_pd, harga_pd, stok_pd, kategori, id_pmsk, Keterangan, foto, Satuan) 
        VALUES('$pd_id','$namaproduk', '$harga', '$stok', '$category', '$id', '$deskripsi' , '".$gambarproduk."','$unit')";
            if ($koneksi->query($sql3) === TRUE) {
                echo "New record created successfully";
                header("location:../homesupplier.php");
                } else {
                echo "Error: " . "<br>" . $koneksi->error;
                }
    }
    
    else {
        $tampil2    = mysqli_query($koneksi, "SELECT * FROM distributor WHERE username='$_SESSION[username]'");
        $user2    = mysqli_fetch_array($tampil2);
        $angka = rand(0,1000);
        $pd_id = 'PDTD' . $angka;
        $id = $user2['id_dstbr'];
        if(in_array($ekstensi1, $Boleh) === false){
            echo 'Pilih foto dengan format png atau jpg';
        }
        
        $sql4 = "INSERT INTO produk_dst(pddst_id , nama_pd,  stok_pd, kategori, Satuan, id_dstbr, foto) 
        VALUES('$pd_id','$namaproduk','$stok', '$category', '$unit', '$id' ,'".$gambarproduk."' )";

            if ($koneksi->query($sql4) === TRUE) {
                echo "New record created successfully";
                header("location:../hometrader.php");
                } else {
                echo "Error: " . "<br>" . $koneksi->error;
                }
    }

}
else {
    $message = "Tolong Isi Semuanya !!! </label>";
}