<?php
include("koneksi.php");
?>
<h3 align="center">Data admin</h3>
<a href="?halaman=admin_tambah" class="btn btn-primary" btn-sm">Tambah admin</a><br/><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Password</th>
	</tr>
<?php
	$query=("SELECT * FROM data_admin");
	$lihat=mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
	$jumlah_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[Id]";?></td>
		<td><?php echo"$r[Username]";?></td>
		<td><?php echo"$r[Password]";?></td>
		<td align="center">
			<a href="?halaman=admin_edit&id=<?php echo"$r[Id]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman-admin_delete&id=<?php echo"$r[Username]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

	</tr>
<?php
}?>
</table>
</div>