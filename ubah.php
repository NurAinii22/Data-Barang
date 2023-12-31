<!DOCTYPE html>
<html>
<head>
<title>DATA BARANG</title>
</head>
<body> <CENTER>
<table width="600" border="3" backgound_color="salmon"> </table>
<h2>DATA BARANG</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA BARANG</h3>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tbbarang where kode_barang='$id'");
while ($d = mysqli_fetch_array($data)){
?>

<form method="post" action="update.php">
<table>
<tr>
<td>kode barang</td>
<td><input type="text" name="kode_barang" value="<?php echo $d ['kode_barang']; ?>"> </td>
</tr>
<td>nama barang</td>
<td><input type="text" name="nama_barang" value="<?php echo $d ['nama_barang']; ?>"> </td>
</tr>
<tr>
<td> satuan </td>
<td>
<Select name=satuan>
<option value="DUS" <?php if($d['satuan']=="DUS") echo

'selected="selected"'; ?> >DUS</option>

<option value="DUS" <?php if($d['satuan']=="DUS") echo

'selected="selected"'; ?> >TI</option>

<option value="LUSIN" <?php if($d['satuan']=="LUSIN") echo

'selected="selected"'; ?> >LUSIN</option>

</select>
</td>
</tr>

<tr>
<td>katagori</td>
<td>
<input type="radio" name="katagori" value="B" <?php if($d['katagori']=='B') echo 'checked'?>>Besar

<input type="radio" name="katagori" value="K" <?php if($d['katagori']=='K') echo 'checked'?>>Kecil
</td></tr>

<td>harga modal</td>
<td><input type="text" name="harga_modal" value="<?php echo $d ['harga_modal']; ?>"> </td>
</tr>

<td>harga jual</td>
<td><input type="text" name="harga_jual" value="<?php echo $d ['harga_jual']; ?>"> </td>
</tr>

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
<tr>
<td></td>

	
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