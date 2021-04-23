<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi database MySQL</h1>
	<?php //perintah php
	$con = mysqli_connect("localhost", "root", "", "mydb"); //mengkoneksikan ke server MySQL
//check connection
if (mysqli_connect_errno()) { //jika MySQLI connect error maka web akan menampilkan teks failed connect to MySQL dan menampilkan pesan error
	echo "Failed to connect to MySQL ". mysqli_connect_error();
};
exit();
?>
</body>
</html>