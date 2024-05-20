<?php

include 'database_connection.php';

if (isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jenis_akun = $_POST['tipe'];
    $nama_lengkap = $_POST['name'];
    $jenis_kelamin = $_POST['jeniskelamin'];
    $nama_toko = $_POST['storename'];
    $alamat_toko = $_POST['Alamat'];
    $nomor_telepon = $_POST['nomor'];
    $email = $_POST['email'];
    $Boleh	= array('png','jpg','jfif');
    $fotouser = $_FILES['fotouser']['name'];
    $fototoko = $_FILES['fototoko']['name'];
	$x1 = explode('.', $fotouser);
	$x2 = explode('.', $fototoko);
	$ekstensi1 = strtolower(end($x1));
	$ekstensi2 = strtolower(end($x2));	
	$gambaruser = addslashes(file_get_contents($_FILES['fotouser']['tmp_name']));// ini buat ambil gambarnya
 	$gambartoko = addslashes(file_get_contents($_FILES['fototoko']['tmp_name']));// ini buat ambil gambarnya


    if ($jenis_akun == 'Trader'){
        $angka = rand(0,1000);
        $id = 'TD' . $angka;
	    if(in_array($ekstensi1, $Boleh) === false and in_array($ekstensi2, $Boleh) === false){
			echo 'Pilih foto dengan format png atau jpg';
	    }
        

        $sql = "INSERT INTO akun(username ,password, jenis_akun)
        VALUES ('$username','$password','$jenis_akun')";
        $sql3 = "INSERT INTO distributor(id_dstbr, nama, kelamin, alamat, email, no_hp, foto, toko, nama_toko, username) 
        VALUES('$id','$nama_lengkap', '$jenis_kelamin', '$alamat_toko', '$email', '$nomor_telepon', '".$gambaruser."', '".$gambartoko."','$nama_toko', '$username')";


        if ($koneksi->query($sql) === TRUE and $koneksi->query($sql3) === TRUE) {
            echo "New record created successfully";
            header("location:../login.html");
          } else {
            echo "Error: " . "<br>" . $koneksi->error;
          }

    }
    else{
        $angka = rand(0,1000);
        $id = 'SP' . $angka;
         if(in_array($ekstensi1, $Boleh) === false and in_array($ekstensi2, $Boleh) === false){
			echo 'Pilih foto dengan format png atau jpg';
	    }

        $sql1 = "INSERT INTO akun(username ,password, jenis_akun)
        VALUES ('$username','$password','$jenis_akun')";
        $sql2 = "INSERT INTO pemasok(id_pmsk, nama, kelamin, alamat, email , no_hp, foto,  toko, username) 
        VALUES('$id', '$nama_lengkap', '$jenis_kelamin', '$alamat_toko', '$email', '$nomor_telepon', '".$gambaruser."', '".$gambartoko."', '$username')";
        if ($koneksi->query($sql1) === TRUE and $koneksi->query($sql2) === TRUE ) {
            echo "New record created successfully";
            header("location:../login.html");
          } else {
            echo "Error: " . "<br>" . $koneksi->error;
          }
    }
}
else {
    $message = "Tolong Isi Semuanya !!! </label>";
}