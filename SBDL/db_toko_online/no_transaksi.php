<?php
include("koneksi.php");
?>
<h3 align="center">data notransaksi</h3>
<a href="?halaman=tambah notransaksi" class="btn btn-primary" btn-sm">Tambah notransaksi</a><br/><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>Username</th>
		<th>Notransaksi</th>
	</tr>
<?php
	$query=("SELECT * FROM data_notransaksi");
	$lihat=mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
	$jumlah_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[Username]";?></td>
		<td><?php echo"$r[Notransaksi]";?></td>
		<td align="center">
			<a href="?halaman=notransaksi_edit&id=<?php echo"$r[Username]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman-notransaksi_delete&id=<?php echo"$r[Notransaksi]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
}?>
</table>
</div>