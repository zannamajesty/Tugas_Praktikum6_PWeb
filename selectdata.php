<!DOCTYPE html>
<html>
<body>
	<?php //perintah php

//membuat variabel
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mydb";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname); //mengkoneksikan ke server MySQL

//check connection
if (!$conn) {
	die ("connection failed: " . mysqli_connect_error());
}
$sql = "SELECT kode, negara, champion FROM Liga"; //membuat variabel sql yang menyimpan query select
$result = mysqli_query ($conn, $sql); //membuat variabel result yang menyimpan nilai mysqli_query
if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) { //melakukan perulangan untuk mengambil record dari tabel dan mengeksekusi variable result
		echo "kode: ". $row["kode"]." negara :".$row["negara"]." ".$row["champion"]."<br>"; //menampilkan output berupa teks
	}
} else {
	echo "0 result";
}
mysqli_close($conn);
?>

</body>
</html>