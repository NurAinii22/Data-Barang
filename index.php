<!DOCTYPE html>
<html>
<head> <title>DATA BARANG</title>
</head>
<body>
<h2>DATA BARANG</h2>
<br/>
<a href="tambahmhs.php"> + TAMBAH BARANG</a>
<br/>
<br/>
<table border="10" cellpadding="3" width="300" backgound_color="salmon" >
<tr>
<th>No</th>
<th>kode barang</th>
<th>nama barang</th>
<th>satuan</th>
<th>katagori</th>
<th>harga modal</th>
<th>harga jual</th>
<th>photo</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from tbbarang");{
?>
<tr>
<td><php echo $no++; ?></td>
<td><php echo $d['kode_barang']; ?></td>
<td><php echo $d['nama_barang']; ?></td>
<td><php echo $d['satuan']; ?></td>
<td><php echo $d['katagori']; ?></td>
<td><php echo $d['harga_modal']; ?></td>
<td><php echo $d['harga_jual']; ?></td>
<td><php echo $d['photo']; ?>
 <img src="<?php echo "file/".$d['gambar']; ?>" width="100"
height="130" >
<td>
<a href="ubah.php?id=<?php echo $d['kode_barang']; ?>">EDIT</a> |
<a href="hapus.php?id=<?php echo $d['kode_barang']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>