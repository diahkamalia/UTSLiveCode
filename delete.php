<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_mel WHERE id_mel=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Data gagal dihapus.";
}else{
    header("location:profile.php");
}

?>