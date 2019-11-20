<?php
session_start();
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$data = mysqli_query($conn,"select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['nama'] = $nim;
	$_SESSION['status'] = "login";
	header("location:login/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>