<?php
include'koneksi.php';
$query=("INSERT INTO data_admin (Id, Username, Password)
			VALUES
			('$_POST[Id]',
			'$_POST[Username]',
			'$_POST[Password]')");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
		echo "<script>alert('Data admin Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=admin'>";
?>