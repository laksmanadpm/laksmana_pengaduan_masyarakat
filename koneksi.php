<?php

$host="localhost";
$username="root";
$password="";
$db="pengaduan_masyarakatt";

$kon = mysqli_connect($host,$username,$password);
if ($kon){
	echo "Database MYSQL <b>berhasil</b> dikoneksikan<br>";
}else {
	echo"Database  MYSQL <b>gagal</b> dikoneksikan<br>";
}

$hasil=mysqli_select_db($kon,$db);
if ($hasil){
	echo "Database $db berhasil dipilih";
}else {
	echo "Database $db gagal dipilih";
}


?>