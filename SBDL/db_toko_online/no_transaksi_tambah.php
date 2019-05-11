<h3 align="center">Tambah notransaksi</h3>
<form class="form-horizontal" method="post" action="?halaman=notransaksi_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Username : </label>
		<div class="col-sm-4">
		<input type="text" name="Username" class="form-control" placeholder="Masukan Username" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Notransaksi : </label>
		<div class="col-sm-4">
		<input type="text" name="Notransaksi" class="form-control" placeholder="Masukan Notransaksi" required>
		</div>
	</div> 
	
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp : </label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_notransaksi" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman_notransaksi" class="'btn btn-sm btn-danger">Batal</a>
		</div>
	</div> 
</form>