<?php
include 'database_connection.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST["login"]))
{
    $login1 = mysqli_query($koneksi,"select * from akun where username='$username' and password='$password' and jenis_akun = 'Supplier'");
    $login2 = mysqli_query($koneksi,"select * from akun where username='$username' and password='$password' and jenis_akun = 'Trader'");
    $cek1 = mysqli_num_rows($login1);
    $cek2 = mysqli_num_rows($login2);
    
    if($cek1 > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['id_pmsk'] = $id;
        $_SESSION['status'] = "login";
        header("location:../homesupplier.php");
    }elseif($cek2 > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['id_dstbr'] = $id;
        $_SESSION['status'] = "login";
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