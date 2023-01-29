<?php
include 'koneksi.php';
echo $judul_buku = $_POST['judul_buku'];
echo $nama_penerbit = $_POST['nama_penerbit'];

$data = mysqli_query($koneksi,"INSERT INTO `tb_buku`(`judul_buku`,`nama_penerbit`,`tahun_buku`) VALUES ('$judul_buku','$nama_penerbit','$tahun_buku')");

header("location: tampil_barang.php");