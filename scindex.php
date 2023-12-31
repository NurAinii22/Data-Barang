<!DOCTYPE html>
<html>
<head>
<title>Tambah Data Barang</title>
</head>
<body>
<h1>Tambah Data Barang</h1>
<?php
include 'koneksi.php';
?>
<br/>
<a href="tambahdata.php">Tambah Data Barang</a>
<br/><br/>
<table border="1" cellpadding="10">
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
$no = 1;
$data = mysqli_query($koneksi,"select * from tbbarang");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td>kode barang</td>
<td><input type="text" name="kode_barang" ></td>
</tr>
<tr>
<td>nama barang</td>
<td><input type="text" name="nama_barang"></td>

</tr> <tr>
<td> satuan </td>
<td>
<Select name=satuan>
<option value=DUS kardus >DUS</option>
<option value=PCS pieces>PCS</option>
<option value=LUSIN lusin>LUSIN </option>
</select>
</td>
</tr>

<tr>
<td>katagori</td>
<td>
<input type="radio" value=B name="katagori">Besar
<input type="radio" value=K name="katagori"> Kecil
</td> </tr>

<tr>
<td>harga modal</td>
<td><input type="text" name="harga_modal" ></td></td>

<tr>
<td>harga jual</td>
<td><input type="text" name="harga_jual" ></td></tr>

<tr>
<td>photo</td>
<td>
</tr>
<td><input type="file" name="file"> <img src="file/ echo
$d['photo']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
<br><i style="float: left;font-size: 11px;color:
blue">Abaikan jika tidak merubah photo<br></i>
</td>
<td>
<a href="edit_datamahasiswa.php?id=<?php echo $d['kode_barang'];
?>">Edit</a> |
<a href="hapus.php?id=<?php echo $d['id']; ?>"
onclick="return confirm('Anda yakin akan menghapus data ini? <?php echo
$d['kode_barang']; ?>')">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
<br/>
<?php
echo "Total data : ". mysqli_num_rows($data)." Barang";
?>
</body>
</html>