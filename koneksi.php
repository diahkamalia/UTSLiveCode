<?php
$host = "localhost";
$user ="root";
$password ="";
$dbname ="db_061";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "Koneksi Gagal";
}
?>