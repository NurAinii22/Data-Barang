<!DOCTYPE html>
<html>
<head>
<title>DATA MAHASISWA</title>
</head>
<body>
<h2>DATA MAHASISWA</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA BARANG</h3>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tbbarang where
kode_barang='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="prosestambah.php">
<table>
<tr>
<td>kode barang</td>
<td>
<input type="text" name="kode_barang" value="<?php echo

$id['kode_barang']; ?>"> </td>
</tr>
<tr>
<td>nama barang</td>
<td><input type="text" name="nama_barang" value="<?php echo
$d['nama_barang']; ?>"></td>
</tr>

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
<td><input type="text" name="harga_modal" value="<?php echo
$d['harga_modal']; ?>"></td>
</tr>

<tr>
<td>harga jual</td>
<td><input type="text" name="harga_jual" value="<?php echo
$d['harga_jual']; ?>"></td>
</tr>

<tr>
<td>photo</td>
<td>
<input type="text" name="photo" value="<?php echo
$d['photo']; ?>"> </td>
</tr>
<td><input type="file" name="file"> <img src="file/<?php echo
$d['photo']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
<br><i style="float: left;font-size: 11px;color:
red">Abaikan jika tidak merubah photo<br></i>
</td>
</tr>
<tr>
<td></td>
<td>
<br/><br/>
<input name="BtnSimpan" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
