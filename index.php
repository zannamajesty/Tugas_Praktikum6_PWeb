<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="input.php">Tambah Pegawai</a> <!--memasukkan link input.php-->
	<br>
	<br>
	<table border="1" width="50%"> <!--membuat tabel-->
		<tr>
			<!--membuat judul kolom-->
			<th>id_pegawai</th>
			<th>Nama</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		<?php //perintah php
		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "db_pegawai";

		$conn = mysqli_connect($host, $username , $password, $database); //mengkoneksikan ke server MySQL

		//check connection
		if (mysqli_connect_errno()) { //jika MySQLI connect error maka web akan menampilkan menampilkan pesan error
			echo "Failed to connect to MySQL ". mysqli_connect_error();
		};
		$data = mysqli_query($conn,"select * from tb_pegawai"); //membuat variabel data 
		while($d = mysqli_fetch_array($data)){ //melakukan perulangan untuk menampilkan data dari database
			?>
			<tr>
				<td><?php echo $d['id_pegawai']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['departemen']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_pegawai']; ?>">Edit</a> <!--memasukkan link edit.php-->
					<a href="hapus.php?id=<?php echo $d['id_pegawai']; ?>">Hapus</a> <!--memasukkan link hapus.php-->
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>