<h3 align="center">Tambah admin</h3>
<form class="form-horizontal" method="post" action="?halaman=admin_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id : </label>
		<div class="col-sm-4">
		<input type="text" name="Id" class="form-control" placeholder="Masukan Id" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Username : </label>
		<div class="col-sm-4">
		<input type="text" name="Username" class="form-control" placeholder="Masukan Username" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Password : </label>
		<div class="col-sm-4">
		<input type="text" name="Password" class="form-control" placeholder="Masukan Password" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp : </label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_admin" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman_admin" class="'btn btn-sm btn-danger">Batal</a>
		</div>
	</div> 
</form>