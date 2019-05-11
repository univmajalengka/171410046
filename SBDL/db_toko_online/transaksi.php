<?php
include("koneksi.php");
?>
<h3 align="center">data transaksi</h3>
<a href="?halaman=tambah transaksi" class="btn btn-primary" btn-sm">Tambah transaksi</a><br/><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>Noransaksi</th>
		<th>Username</th>
		<th>Id</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Subtotal</th>
	</tr>
<?php
	$query=("SELECT * FROM data_transaksi");
	$lihat=mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
	$jumlah_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[Notransaksi]";?></td>
		<td><?php echo"$r[Username]";?></td>
		<td><?php echo"$r[Id]";?></td>
		<td><?php echo"$r[Nama]";?></td>
		<td><?php echo"$r[Harga]";?></td>
		<td><?php echo"$r[Jumlah]";?></td>
		<td><?php echo"$r[Subtotal]";?></td>
		<td align="center">
			<a href="?halaman=transaksi_edit&id=<?php echo"$r[Notransaksi]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman-transaksi_delete&id=<?php echo"$r[Username]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
}?>
</table>
</div>