<?php
if(isset($_GET['id'])){
include('koneksi.php');
$kode_barang=$_GET['id'];
$del=mysqli_query($koneksi,"DELETE FROM tbbarang WHERE
kode_barang='$kode_barang'");
if($del){
echo'Data Barang berhasil dihapus! ';
echo'<a href="index.php">Kembali</a>';
}else{
echo'Gagal menghapus data barang! ';
echo'<a href="index.php">Kembali</a>';
}
}
?>