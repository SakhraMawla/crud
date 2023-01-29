<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM `tb_buku`");
?>
<a href="tambah_data.php">tambah data</a><br>
<?php
foreach($data as $data){
    echo $data['judul_buku'];
    echo $data['nama_penerbit'];
    echo $data['tahun_buku'];
?>
<a href="delate_buku.php?id=<?php $data['id_buku']?>">hapus</a><br>
<?php
}