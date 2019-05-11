<?php
include'koneksi.php';
$query=("INSERT INTO data_transaksi (Notransaksi, Username, Id, Nama, Harga, Jumlah, Subtotal)
			VALUES
			('$_POST[Notransaksi]',
			'$_POST[Username]',
			'$_POST[Id]',
			'$_POST[Nama]',
			'$_POST[Harga]',
			'$_POST[Jumlah]',
			'$_POST[Subtotal]')");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
		echo "<sript>alert('Data transaksi Berhasil Disimpan.');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=transaksi'>";
?>