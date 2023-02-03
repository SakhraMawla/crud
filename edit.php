<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM `buku` WHERE `id_buku` = $id");

$tampil = mysqli_fetch_array($data);

?>
<form action="update_buku.php" method="GET">
    <input type="text" name="id_buku" value="<?php echo $id; ?>" hidden ><br>
    <input type="text" name="judul_buku" value="<?php echo $tampil['judul_buku']?>"><br>
    <input type="text" name="nama_penerbit" value="<?php echo $tampil['nama_penerbit']?>"><br> 
    <input type="date" name="tahun_buku" value="<?php echo $tampil['tahun_buku']?>"><br>
    <input type="submit"  value="kirim">
</form>