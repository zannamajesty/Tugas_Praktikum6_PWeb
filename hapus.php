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
mysqli_query($conn,"delete from tb_pegawai where id_pegawai='$id'");
header("location:index.php"); //mengalihkan halaman kembali ke index.php
?>