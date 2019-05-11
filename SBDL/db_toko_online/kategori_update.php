<?php
include'koneksi.php';
$query=("UPDATE data_kategori
			SET
			Kategori='$_POST[Kategori]',
			WHERE Id='$_POST[id]'");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed, ' .mysqli_error());
		echo "<script>alert(Data kategori Berhasil Diupdate,');</script>";
		echo "<meta http-equive'refresh' content='1; url=?halaman=kategori'>";
?>