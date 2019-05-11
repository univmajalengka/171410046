<?php
include'koneksi.php';
$query=("INSERT INTO data_barang (Id, Nama, Deskripsi, Warna, Ukuran, Kategori, Harga, Stock)
			VALUES
			('$_POST[Id]',
			'$_POST[Nama]',
			'$_POST[Deskripsi]',
			'$_POST[Warna]',
			'$_POST[Ukuran]',
			'$_POST[Kategori]',
			'$_POST[Harga]',
			'$_POST[Stock]')");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
		echo "<sript>alert('Data barang Berhasil Disimpan.');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=barang'>";
?>