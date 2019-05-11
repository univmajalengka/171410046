<?php
include"koneksi.php";
$query=("SELECT * FROM data_transaksi WHERE Notransaksi='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_query());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit transaksi</h3>
<form class="form-harizontal" method="pos" action="?halaman=transaksi_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Id]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Notransaksi : </label>
		<div class="col-sm-4">
		<input type="text" name="Notransaksi" class="form-control" placeholder="Masukan Notransaksi" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Username : </label>
		<div class="col-sm-4">
		<input type="text" name="Username" class="form-control" placeholder="Masukan Username" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
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
		<label class="col-sm-3 control-label">Harga : </label>
		<div class="col-sm-4">
		<input type="text" name="Harga" class="form-control" placeholder="Masukan Harga" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jumlah : </label>
		<div class="col-sm-4">
		<input type="text" name="Jumlah" class="form-control" placeholder="Masukan Jumlah" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Subtotal : </label>
		<div class="col-sm-4">
		<input type="text" name="Subtotal" class="form-control" placeholder="Masukan Subtotal" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_transaksi" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=transaksi" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form> 

