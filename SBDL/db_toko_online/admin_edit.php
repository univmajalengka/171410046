<?php
include"koneksi.php";
$query=("SELECT * FROM data_admin WHERE Id='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_query());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit admin</h3>
<form class="form-harizontal" method="post" action="?halaman=admin_update" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Id]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Username : </label>
		<div class="col-sm-4">
		<input type="text" name="Username" class="form-control" placeholder="Masukan Username" value="<?php echo"$m[Username]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Password : </label>
		<div class="col-sm-4">
		<input type="text" name="Password" class="form-control" placeholder="Masukan Password" value="<?php echo"$m[Password]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_admin" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=admin" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form> 

