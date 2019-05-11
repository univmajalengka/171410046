<?php
include'koneksi.php';
$query=("UPDATE data_notransaksi
			SET
			Username='$_POST[Username]',
			WHERE Notransaksi='$_POST[Notransaksi]'");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed, ' .mysqli_error());
		echo "<script>alert(Data notransaksi Berhasil Diupdate,');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=notransaksi'>";
?>