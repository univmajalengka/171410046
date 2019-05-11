<h3 align="center">Tambah kategori</h3>
<form class="form-horizontal" method="post" action="?halaman=kategori_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Kategori : </label>
		<div class="col-sm-4">
		<input type="text" name="Kategori" class="form-control" placeholder="Masukan Kategori" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Id : </label>
		<div class="col-sm-4">
		<input type="text" name="Id" class="form-control" placeholder="Masukan Id" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp : </label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_kategori" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman_kategori" class="'btn btn-sm btn-danger">Batal</a>
		</div>
	</div> 
</form>