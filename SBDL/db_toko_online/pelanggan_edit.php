<?php
include"koneksi.php";
$query=("SELECT * FROM data_pelanggan WHERE Nama='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_query());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit pelanggan</h3>
<form class="form-harizontal" method="pos" action="?halaman=pelanggan_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Nama]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id : </label>
		<div class="col-sm-4">
		<input type="text" name="Id" class="form-control" placeholder="Masukan Id" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat : </label>
		<div class="col-sm-4">
		<input type="text" name="Alamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo"$m[Alamat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Email : </label>
		<div class="col-sm-4">
		<input type="text" name="Email" class="form-control" placeholder="Masukan Email" value="<?php echo"$m[Email]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Telepone : </label>
		<div class="col-sm-4">
		<input type="text" name="Telepone" class="form-control" placeholder="Masukan Telepone" value="<?php echo"$m[Telepone]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Username : </label>
		<div class="col-sm-4">
		<input type="text" name="Username" class="form-control" placeholder="Masukan Username" value="<?php echo"$m[Username]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Possword : </label>
		<div class="col-sm-4">
		<input type="text" name="Password" class="form-control" placeholder="Masukan Password" value="<?php echo"$m[Password]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_pelanggan" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=pelanggan" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form> 

