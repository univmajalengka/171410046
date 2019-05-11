<?php
include'koneksi.php';
$query=("UPDATE data_transaksi
			SET
			Noransaksi='$_POST[Notransaksi]',
			Username='$_POST[Username]',
			Id='$_POST[Id]',
			Nama='$_POST[Nama]',
			Harga='$_POST[Harga]',
			Jumlah='$_POST[Jumlah]',
			WHERE Subtotal='$_POST[Subtotal]'");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed, ' .mysqli_error());
		echo "<script>alert(Data transaksi Berhasil Diupdate,');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=transaksi'>";
?>