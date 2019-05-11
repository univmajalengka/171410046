<h3 align="center">Tambah barang</h3>
<form class="form-horizontal" method="post" action="?halaman=barang_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id : </label>
		<div class="col-sm-4">
		<input type="text" name="Id" class="form-control" placeholder="Masukan Id" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama : </label>
		<div class="col-sm-4">
		<input type="text" name="Nama" class="form-control" placeholder="Masukan Nama" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Deskripsi : </label>
		<div class="col-sm-4">
		<input type="text" name="Deskripsi" class="form-control" placeholder="Masukan Deskripsi" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Warna : </label>
		<div class="col-sm-4">
		<input type="text" name="Warna" class="form-control" placeholder="Masukan Warna" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Ukuran : </label>
		<div class="col-sm-4">
		<input type="text" name="Ukuran" class="form-control" placeholder="Masukan Ukuran" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Kategori : </label>
		<div class="col-sm-4">
		<input type="text" name="Kategori" class="form-control" placeholder="Masukan Kategori" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Harga : </label>
		<div class="col-sm-4">
		<input type="text" name="Harga" class="form-control" placeholder="Masukan Harga" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Stock : </label>
		<div class="col-sm-4">
		<input type="text" name="Stock" class="form-control" placeholder="Masukan Stock" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp : </label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_barang" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman_barang" class="'btn btn-sm btn-danger">Batal</a>
		</div>
	</div> 
</form>