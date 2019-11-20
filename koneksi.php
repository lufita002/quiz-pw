<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz-pw";
$conn = mysqli_connect($servername,$username,$password,$dbname);
 
// Check connection
$data = mysqli_query($conn,"select * from login where username='$username' and password='$password'");
$result = mysqli_query($conn, $sql);
$cek = mysqli_num_rows($data);
if(mysqli_num_rows($result) >0){
	while($row = mysqli_fetch_assoc($result)){
		echo "mahasiswa".$row["nim"];
		echo "mahasiswa".$row["nama"];	}
	header("location:login/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
mysqli_close($conn);
?>