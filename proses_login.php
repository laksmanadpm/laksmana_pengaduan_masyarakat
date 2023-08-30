<?php

include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = $koneksi->query("SELECT * FROM `masyarakat` WHERE username='$username' AND password ='$password'");
$jumlahbaris = $query->rowCount();

if($jumlahbaris > 0){
    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['level'] = 'masyarakat';

    header("location:home.php");

}else{

    $query = $koneksi->query("SELECT * FROM `petugas` WHERE username='$username' AND password ='$password'");
$data = $query->rowCount();
if($data > 0){
    $result = $query->fetch();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['id_petugas'] = $result=['id_petugas'];
    $_SESSION['level'] = $result['level'];

    header("location:admin.php");
    
}else{
    header("location:login.php?pesan=username atau password salah");
}
}
    
