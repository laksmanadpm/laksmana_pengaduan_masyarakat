<?php

// koneksi
include "koneksi.php";
$isi = $_POST['isi_laporan'];
$id = $_POST['id'];


$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
// query update
$query = $koneksi->query("UPDATE pengaduan SET isi_laporan='$isi' WHERE id_pengaduan='$id'");

header("location:home.php");

?>