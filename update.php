<?php
include "koneksi.php";
$id = $_POST['id_mel'];
$nama = $_POST['nama_mel'];
$email = $_POST['email_mel'];
$alamat = $_POST['alamat_mel'];


$sql = "UPDATE tbl_mel set  nama_mel='$nama', email_mel='$email', alamat_mel='$alamat' where id_mel=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Update gagal.";
}else{
    header("location:Profile.php");
}

?>