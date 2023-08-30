<?php
$id = $_GET['id'];

include 'koneksi.php';

$query = $koneksi->query("SELECT * FROM pengaduan WHERE id_pengaduan='$id'");

$data = $query->fetch();

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
     <div class="container">
        <div class="mb-3">
          <form action="proses_update.php?id=<?= $data['id_pengaduan']?> " method="POST">
             <label for="exampleFormControlTextarea1" class="form-label">Edit laporan</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"><?php echo $data['isi_laporan']?></textarea> 
             <div class="container">
           <div class="col-auto">
           <button type="submit" class="btn btn-primary mb-3"> UPDATE </button>
    </div>
   </form>
  </body>
</html>