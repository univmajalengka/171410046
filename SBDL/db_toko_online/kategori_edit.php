<?php
include"koneksi.php";
$query=("SELECT * FROM data_kategori WHERE Kategori='$_GET[Kategori]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_query());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit admin</h3>
<form class="form-harizontal" method="pos" action="?halaman=admin_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Kategori]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kategori : </label>
		<div class="col-sm-4">
		<input type="text" name="Kategori" class="form-control" placeholder="Masukan Kategori" value="<?php echo"$m[Kategori]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id : </label>
		<div class="col-sm-4">
		<input type="text" name="Id" class="form-control" placeholder="Masukan Id" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_kategori" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=kategori" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form> 

