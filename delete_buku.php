<?php 
// koneksi database
include 'koneksi.php';
 
$id = $_GET['id'];
 
 

$data = mysqli_query($koneksi,"DELETE FROM `buku` WHERE  `id_buku` = $id");
 

if($data== TRUE){
header("location:tampil_barang.php");
}else{
    echo "gagal hapus";
}
?>