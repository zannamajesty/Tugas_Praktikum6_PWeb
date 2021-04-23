<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">Kembali</a> <!--memasukkan link index.php-->
	<br>
	<br>
	<h3>Edit Data Pegawai</h3>
 
	<?php //perintah php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "db_pegawai";

	$conn = mysqli_connect($host, $username , $password, $database); //mengkoneksikan ke server MySQL

	//check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL ". mysqli_connect_error(); //jika MySQLI connect error maka web akan menampilkan teks failed connect to MySQL
	};
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from tb_pegawai where id_pegawai='$id'"); //membuat variable data
	while($d = mysqli_fetch_array($data)){ //melakukan perulangan berisi perintah untuk menampilkan data dari database
		?>
		<form method="post" action="update.php"> <!--membuat form-->
			<table> <!--membuat tabel-->
				<tr> <!--membuat baris-->			
					<td>Nama</td> 
					<td> 
						<input type="hidden" name="id" value="<?php echo $d['id_pegawai']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Departemen</td>
					<td><input type="text" name="departemen" value="<?php echo $d['departemen']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td> <!--membuat input type submit-->
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>
</html>