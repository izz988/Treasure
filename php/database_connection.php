<?php
$koneksi = mysqli_connect('localhost','root','',"belanjaonline");
date_default_timezone_set('Asia/Jakarta');

if (mysqli_connect_errno()){
    echo "koneksi database gagal: " . mysqli_connect_error();
}
?>


