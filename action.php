<?php
include "koneksi.php";

$nama = $_POST['nama_mel'];
$email = $_POST['email_mel'];
$alamat = $_POST['alamat_mel'];

$sql = "INSERT INTO tbl_mel VALUES(null,'$nama','$email','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Gagal tambah data.";
}else{
    header("location:Profile.php");
}

?>