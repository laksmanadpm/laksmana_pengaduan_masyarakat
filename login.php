<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENT</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="proses_login.php" method="POST">
                <h1>Login</h1>
                <hr>
                <p>pengaduan masyarakat</p>
                <label for="">username</label>
                <input type="text" clplaceholder="Pointblankindonesia@gmail.com" name="username">
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password">
                <button>Login</button>
                <p>
                    <a href="daftar.php">Forgot Daftar?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="https://a-static.besthdwallpaper.com/venti-genshin-impact-anime-video-game-wallpaper-2048x1536-72856_26.jpg" alt="">
        </div>
    </div>
</body>
</html>