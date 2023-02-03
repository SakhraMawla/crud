<?php
 include 'koneksi.php';
 echo $id= $_GET['id_buku'];
 echo$judul_buku = $_GET['judul_buku'];
 echo$nama_penerbit = $_GET['nama_penerbit'];
 echo$tahun_buku = $_GET['tahun_buku'];

 $data = mysqli_query($koneksi,"UPDATE `buku` SET `id_buku`='$id',`judul_buku`='$judul_buku',`nama_penerbit`='$nama_penerbit',`tahun_buku`='$tahun_buku' WHERE `id_buku` =$id");
  header("location: tampil_barang.php");