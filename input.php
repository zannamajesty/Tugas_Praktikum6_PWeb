<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">Kembali</a> <!--memasukkan link index.php-->
	<br>
	<br>
	<h3>Tambah Data Pegawai</h3>
	<form method="post" action="inputaksi.php"> <!--membuat form-->
		<table> <!--membuat tabel-->
			<tr> <!--membuat baris-->			
				<td>ID_Pegawai</td>
				<td><input type="text" name="id_pegawai"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Departemen</td>
				<td><input type="text" name="departemen"></td>
			</tr>
			<tr>
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> <!--membuat input type submit -->
			</tr>		
		</table>
	</form>
</body>
</html>