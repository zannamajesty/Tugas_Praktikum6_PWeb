<?php //perintah php

//membuat variabel
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mydb";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);//mengkoneksikan ke server MySQL

//check connection
if (!$conn) {
	die ("connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Eng', 'English', '3')"; //membuat variabel sql yang menyimpan query insert data ke tabel liga

if (mysqli_query ($conn, $sql)) {
	echo "New Record created successfully"; //jika mysqli_query berhasil mengeksekusi variabel conn dan sql maka web akan menampilkan pesan new record created successfully
}
else {
	echo"Error: " . $sql. "<br>". mysqli_error($conn); //jika tidak web akan menampilkan pesan error yang berupa teks
}
mysqli_close($conn);
?>