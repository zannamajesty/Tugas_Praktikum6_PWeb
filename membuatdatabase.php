<?php //perintah php

//membuat variabel
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect ($servername, $username, $password); //mengkoneksikan ke server MySQL

//check connection
if (!$conn) {
	die ("connection failed: " . mysqli_connect_error());
}
//create database
$sql = "CREATE DATABASE myDB"; //membuat database myBD
if (mysqli_query($conn, $sql)) { //jika mysqli_query berhasil mengeksekusi variabel conn dan sql maka web akan menampilkan pesan database created successfully
	echo "Database created successfully";
}
else { //jika tidak web akan menampilkan pesan error creating database dan tampilkan pesan error
	echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>