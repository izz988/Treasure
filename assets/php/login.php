<?php
include 'database_connection.php';
ob_start();
session_start();
$username        = mysqli_real_escape_string($koneksi, $_POST['id_user']);
$password        = mysqli_real_escape_string($koneksi, md5($_POST['password']));
$op             = $_GET['op'];

if(isset($_POST["login"]))
{
    $login1 = mysqli_query($koneksi,"select * from akun where username='$username' and password='$password' and jenis_akun = 'Supplier'");
    $login2 = mysqli_query($koneksi,"select * from akun where username='$username' and password='$password' and jenis_akun = 'Trader'");
    $cek1 = mysqli_num_rows($login1);
    $cek2 = mysqli_num_rows($login2);
    
    if($cek1 > 0){
        $qry = mysqli_fetch_array($login1);
        $_SESSION['id_user']    = $qry['id_user'];
        $_SESSION['jenis_akun']    = $qry['jenis_akun'];
        header("location:../homesupplier.php");
    }elseif($cek2 > 0){
        $qry = mysqli_fetch_array($login2);
        $_SESSION['id_user']   = $qry['id_user'];
        $_SESSION['jenis_akun']    = $qry['jenis_akun'];
        header("location:../hometrader.php");
    }else{
        $message = "<label>Username Atau Password Salah !</label>";;	
    }
}
else
 {
  $message = "<label>Silahkan Isi Username dan Password !</label>";
 }
?>