<?php
include("koneksi.php");
?>
<h3 align="center">data kategori</h3>
<a href="?halaman=tambah kategori" class="btn btn-primary" btn-sm">Tambah kategori</a><br/><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>Kategori</th>
		<th>Id</th>
	</tr>
<?php
	$query=("SELECT * FROM data_kategori");
	$lihat=mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
	$jumlah_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[Kategori]";?></td>
		<td><?php echo"$r[Id]";?></td>
		<td align="center">
			<a href="?halaman=kategori_edit&id=<?php echo"$r[Kategori]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman-kategori_delete&id=<?php echo"$r[Id]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
}?>
</table>
</div>