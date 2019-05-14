<?php 
include 'koneksi.php';
session_start();
$conn = mysqli_connect("sql312.ezyro.com","ezyro_23897073","hvfoz436wz08ic","ezyro_23897073_afsri");

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn,"INSERT INTO user VALUES (null,'$username','$password')");

if($result) {
	echo "Register Berhasil!";
	echo "<a href='login.php'>login</a>";
}
	else{
		echo "Gagal dong";

	}
?>