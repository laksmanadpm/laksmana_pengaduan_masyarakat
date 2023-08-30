<?php //koneksi php
session_start();

if(!isset($_SESSION['nik'])){
  header('localtion:proses_login.php');
}

// PDO
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");


// echo $nik;
$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();

// echo $_SESSION['nik'];
// echo $_SESSION['level'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
 </head>
<body>
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laporan Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
    <ul class="navbar-nav">
        <ul class="nav nav-underline">
        <li class="nav-item dropdown">
        <a class="nav-link" href="home.php">Home</a>
        </li>
        <ul class="nav nav-underline">
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="laporan.php">buat laporan</a>  
        </li>
        </ul>
    </div>
    <form class="d-flex" role="Login">
      <a class="btn btn-danger " aria-current="page" href="login.php">Logout</a> 
       <div class="container">
       <a class="btn btn-primary " aria-current="page" href="daftar.php">Daftar</a> 
      </form>
  </div>
</nav>
  <div class="container">
  <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">tanggal</th>
      <th scope="col">nik</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">status</th>
      <th scope="col">foto</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $pengaduan){ ?>
  <tr>
    <td><?= $pengaduan['id_pengaduan'] ?></td>
    <td><?= $pengaduan['tgl_pengaduan'] ?></td>
    <td><?= $pengaduan['nik'] ?></td>
    <td><?= $pengaduan['isi_laporan'] ?></td>
    <td><?= $pengaduan['status'] ?></td>
    <td><img src="gambar/<?= $pengaduan['foto']?>"  height="160vh"></td>
    <td> <a href="halaman_edit.php?id=<?= $pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-success">update</button>
         <a href="proses_hapus.php?id=<?= $pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-danger">Disabled</button></td>
  </tr>
<?php } ?>
  </tbody>
</table>
</body>
</html>