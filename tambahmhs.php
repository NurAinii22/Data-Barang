<!DOCTYPE html>
<html>
<head>
<title>DATA BARANG</title>
</head>
<body>
<h2>DATA BARANG</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA BARANG</h3>
<form method="post" action="simpan.php" enctype="multipart/form-data">
<br/>
<br/>
<table border="10" cellpadding="3" width="300" >
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
</tr>
<tr>
<td></td>
<td> 
	
<input name="BtnSimpan" type="submit" value="SIMPAN">

<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
</body>
</html>