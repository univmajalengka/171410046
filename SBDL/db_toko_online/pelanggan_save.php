<?php
include'koneksi.php';
$query=("INSERT INTO data_pelanggan (Nama, Id, Alamat, Email, Telepone, Username, Password)
			VALUES
			('$_POST[Nama]',
			'$_POST[Id]',
			'$_POST[Alamat]',
			'$_POST[Email]',
			'$_POST[Telepone]',
			'$_POST[Username]',
			'$_POST[Password]')");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
		echo "<sript>alert('Data pelanggan Berhasil Disimpan.');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=pelanggan'>";
?>