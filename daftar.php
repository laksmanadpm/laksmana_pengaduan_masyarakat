<?php 
 include 'koneksi.php';
 ?>

 <!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style0.css">
    </head>

    <body>
        <div class="container">
          <h1>Daftar</h1>
            <form action="proses_regis.php" method="POST" class="login-email">
                <label>nik</label>
                <br>
                <input type="text" placeholder="nik" name="nik" required class="form-control" id="flaotinginput">
                <br>
                <label>nama</label>
                <br>
                <input type="text" placeholder="nama" name="nama" required class="form-control" id="flaotinginput">
                <br>
                <label>Username</label>
                <br>
                <input type="text" placeholder="username" name="username" required class="form-control" id="flaotinginput">
                <br>
                <label>password</label>
                <br>
                <input type="password" placeholder="password" name="password" required class="form-control" id="flaotinginput">
                <br>
                <label>telp</label>
                <br>
                <input type="text" placeholder="telp" name="telp" required class="form-control" id="flaotinginput">
                <br>
                <button name="sumbit" class="btn">Register</button>
                <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>