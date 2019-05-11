<?php
include'koneksi.php';
$query=("UPDATE data_barang
			SET
			Id='$_POST[Id]',
			Nama='$_POST[Nama]',
			Deskripsi='$_POST[Deskripsi]',
			Warna='$_POST[Warna]',
			Ukuran='$_POST[Ukuran]',
			Kategori='$_POST[Kategori]',
			Harga='$_POST[Harga]',
			WHERE Stock='$_POST[Stock]'");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed, ' .mysqli_error());
		echo "<script>alert(Data barang Berhasil Diupdate,');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=barang'>";
?>