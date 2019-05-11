<?php
include'koneksi.php';
$query=("DELETE FROM data_pelanggan
			WHERE Id='$_GET[id]'");
			$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
			echo "<script>alert('Data pelanggan Berhasil Dihapus , ');</script>";
			echo "<meta http-equive='refresh' connect='1; url=?halaman=pelanggan'>";
?>