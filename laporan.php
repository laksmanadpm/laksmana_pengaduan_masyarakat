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
    <a class="navbar-brand" href="#">Laporan Pengaduan Masyrakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <ul class="nav nav-underline">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <ul class="nav nav-underline">
        <li class="nav-item">
          <a class="nav-link active" href="laporan.php">buat laporan</a>
       
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>

</nav>
            <div class="container">
            <div class="mb-3">
             <form action="proses_pengaduan.php" method="POST" enctype="multipart/form-data">
             <label for="exampleFormControlTextarea1" class="form-label">isi Pengaduan</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"></textarea> 
           </div>
             <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
             <input class="form-control" type="file" id="formFile" name="foto">
           </div>
              <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3"> Confirm </button>
            </div>
            </form>
          </div>
        </div>
      </div>
</body>
</html>