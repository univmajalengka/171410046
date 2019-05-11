<?php
include'koneksi.php';
$query=("UPDATE data_pelanggan
			SET
			Nama='$_POST[Nama]',
			Id='$_POST[Id]'
			Alamat='$_POST[Alamat]'
			Email='$_POST[Email]'
			Telepone='$_POST[Telepone]'
			Username='$_POST[Username]'
			WHERE Password='$_POST[id]'");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed, ' .mysqli_error());
		echo "<script>alert(Data pelanggan Berhasil Diupdate,');</script>";
		echo "<meta http-equive'refresh' content='1; url=?halaman=pelanggan'>";
?>