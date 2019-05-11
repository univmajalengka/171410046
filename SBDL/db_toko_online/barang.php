<?php
include("koneksi.php");
?>
<h3 align="center">data barang</h3>
<a href="?halaman=tambah barang" class="btn btn-primary" btn-sm">Tambah barang</a><br/><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>Id</th>
		<th>Nama</th>
		<th>Deskripsi</th>
		<th>Warna</th>
		<th>Ukuran</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th>Stock</th>
	</tr>
<?php
	$query=("SELECT * FROM data_barang");
	$lihat=mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_error());
	$jumlah_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[Id]";?></td>
		<td><?php echo"$r[Nama]";?></td>
		<td><?php echo"$r[Deskripsi]";?></td>
		<td><?php echo"$r[Warna]";?></td>
		<td><?php echo"$r[Kategori]";?></td>
		<td><?php echo"$r[Harga]";?></td>
		<td><?php echo"$r[Stock]";?></td>
		<td align="center">
			<a href="?halaman=barang_edit&id=<?php echo"$r[Id]";?>"title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman-barang_delete&id=<?php echo"$r[Nama]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
}?>
</table>
</div>