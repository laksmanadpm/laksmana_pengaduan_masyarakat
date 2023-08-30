<?php

$isi = $_POST['isi_laporan'];

// var_dump($_FILES['foto']); // array

// file foto
$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];


// koneksi database
$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat','root','');
$tanggal = date('Y-m-d');

// $query insert
$koneksi->query("insert into pengaduan values('','$tanggal', '12', '$isi', '$nama_foto', 'proses')");
header("Location : home.php");
echo 'laporan terkirim';

move_uploaded_file($asal_foto,"gambar/$nama_foto");


?>