<html>
<head>
	<title>Membuat Login</title>
</head>
<body>
	<h2>Halaman login</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login/index.php?pesan=belum_login");
	}
	?>
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>
 
 
</body>
</html>