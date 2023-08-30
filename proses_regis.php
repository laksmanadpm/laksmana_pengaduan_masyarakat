<?php
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];


$data = $koneksi->query("INSERT INTO masyarakat VALUES ('$nik', '$nama', '$username', '$password', '$telp')");

header("location:login.php")
?>