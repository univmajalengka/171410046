<?php
include("koneksi.php");
?>
<h3 align="center">data pelanggan</h3>
<a href="?halaman=tambah" class="btn btn-primary" btn-sm">Tambah pelanggan</a><br/><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>Nama</th>
		<th>Id</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Telepone</th>
		<th>Username</th>
		<th>Password</th>
	</tr>
<?php
	$query=("SELECT * FROM data_pelanggan");
	$lihat=mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
	$jumlah_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[Nama]";?></td>
		<td><?php echo"$r[Id]";?></td>
		<td><?php echo"$r[Alamat]";?></td>
		<td><?php echo"$r[Email]";?></td>
		<td><?php echo"$r[Telepone]";?></td>
		<td><?php echo"$r[Username]";?></td>
		<td><?php echo"$r[Password]";?></td>
		<td align="center">
			<a href="?halaman=pelanggan_edit&id=<?php echo"$r[Nama]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman-pelanggan_delete&id=<?php echo"$r[Id]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
}?>
</table>
</div>