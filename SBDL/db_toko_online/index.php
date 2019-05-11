<!DOCTYPE html>
<html>
<head>
	<title>My web | Teknik Informatika Universitas Majalengka</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Informatika</a>
		</div>
		<div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="?halaman=default">Home</a></li>
				<li><a href="?halaman=admin">data admin</a></li>
				<li><a href="?halaman=pelanggan">data pelanggan</a></li>
				<li><a href="?halaman=kategori">data kategori</a></li>
				<li><a href="?halaman=barang">data barang</a></li>
				<li><a href="?halaman=transaksi">data transaksi</a></li>
				<li><a href="?halaman=notransaksi">data notransaksi</a></li>
			</ul>
		</div>
	</nav>
		<div class="container">

	<div>
		<div class="jumbotron">
		<?php
		include("halaman.php");
		?>
		</div>
		<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Copyright &copy; Neng Siska Intantria - Informatika B </h3>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
