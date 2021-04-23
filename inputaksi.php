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
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$departemen = $_POST['departemen'];
mysqli_query($conn,"insert into tb_pegawai values('$id_pegawai','$nama','$departemen')");
header("location:index.php"); //mengalihkan halaman kembali ke index.php
?>