<?php
include"koneksi.php";
$query=("SELECT * FROM data_notransaksi WHERE Username='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' .mysqli_query());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit notransaksi</h3>
<form class="form-harizontal" method="pos" action="?halaman=transaksi_up" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo"$m[Username]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Username : </label>
		<div class="col-sm-4">
		<input type="text" name="Username" class="form-control" placeholder="Masukan NUsername" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Notransaksi : </label>
		<div class="col-sm-4">
		<input type="text" name="Notransaksi" class="form-control" placeholder="Masukan Notransaksi" value="<?php echo"$m[Id]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_notransaksi" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=notransaksi" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form> 

