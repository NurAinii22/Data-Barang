<!DOCTYPE html>
<html>
<head>
<title>DATA BARANG</title>
</head>
<body><CENTER>
<table width="300" border="1" bgcolor="silver">
<tr>
	<td colspan="2">INPUT DATA BARANG </td>
</tr>
<form method="post" action="prosesinput.php">
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
<tr><CENTER>
<td colspan="2">
<input name="BtnSave" type="submit" id="BtnSave" value="Save" />
<input name="BtnBatal" type="reset" id="BtnBatal" value="Cancel" />
</td></CENTER>
</tr>
</table></CENTER>
</form></body>
</html>