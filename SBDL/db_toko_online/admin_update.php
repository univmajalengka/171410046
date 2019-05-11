<?php
include'koneksi.php';
$query=("UPDATE data_admin
			SET
			Password='$_POST[Password]',
			Username='$_POST[Username]'
			WHERE Id='$_POST[id]'");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed, ' .mysqli_error());
		echo "<script>alert(Data admin Berhasil Diupdate,');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=admin_up'>";
?>