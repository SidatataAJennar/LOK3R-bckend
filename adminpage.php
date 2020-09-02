<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>
	<link rel="stylesheet" type="text/css" href="adminpage.css">
	<link rel="shortcut icon" href="logo.jpeg>">
</head>
<body>
	<div class="back-color"></div>
	<div class="navbar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="Profil.php">Profil</a></li>
            <li><a href="#">Data Kategori</a></li>
            <li><a href="#">Data Produk</a></li>
       </ul>
	</div>
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?></h4>
			</div>
		</div>
	</div>
</body>
</html>