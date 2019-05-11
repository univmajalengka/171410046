<?php
include'koneksi.php';
$query=("INSERT INTO data_kategori (Kategori, Id)
			VALUES
			('$_POST[Kategori]',
			'$_POST[Id]')");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
		echo "<sript>alert('Data kategori Berhasil Disimpan.');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=kategori'>";
?>