<?php
include"koneksi.php";
$query=("SELECT * FROM data_barang WHERE Id='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_query());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit barang</h3>
<form class="form-harizontal" method="pos" action="?halaman=barang_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Id]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id : </label>
		<div class="col-sm-4">
		<input type="text" name="Id" class="form-control" placeholder="Masukan Id" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama : </label>
		<div class="col-sm-4">
		<input type="text" name="Nama" class="form-control" placeholder="Masukan Nama" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Deskripsi : </label>
		<div class="col-sm-4">
		<input type="text" name="Deskripsi" class="form-control" placeholder="Masukan Deskripsi" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Warna : </label>
		<div class="col-sm-4">
		<input type="text" name="Warna" class="form-control" placeholder="Masukan Warna" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Ukuran : </label>
		<div class="col-sm-4">
		<input type="text" name="Ukuran" class="form-control" placeholder="Masukan Ukuran" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kategori : </label>
		<div class="col-sm-4">
		<input type="text" name="Kategori" class="form-control" placeholder="Masukan Kategori" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Harga : </label>
		<div class="col-sm-4">
		<input type="text" name="Harga" class="form-control" placeholder="Masukan Harga" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Stock : </label>
		<div class="col-sm-4">
		<input type="text" name="Stock" class="form-control" placeholder="Masukan Stock" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_barang" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=barang" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form> 

