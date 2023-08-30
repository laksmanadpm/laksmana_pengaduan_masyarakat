<?php
// koneksi
$id = $_GET['id'];
include 'koneksi.php';

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");

$query = $koneksi->query("DELETE FROM pengaduan WHERE id_pengaduan='$id'");

header("location:home.php");

?>