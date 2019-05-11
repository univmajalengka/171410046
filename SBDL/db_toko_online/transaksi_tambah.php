<h3 align="center">Tambah transaksi</h3>
<form class="form-horizontal" method="post" action="?halaman=transaksi_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Notransaksi : </label>
		<div class="col-sm-4">
		<input type="text" name="Notransaksi" class="form-control" placeholder="Masukan Notransaksi" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Username : </label>
		<div class="col-sm-4">
		<input type="text" name="Username" class="form-control" placeholder="Masukan Username" required>
		</div>
	</div> 
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
		<label class="col-sm-3 control-label">Harga : </label>
		<div class="col-sm-4">
		<input type="text" name="Harga" class="form-control" placeholder="Masukan Harga" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">JUmlah : </label>
		<div class="col-sm-4">
		<input type="text" name="Jumlah" class="form-control" placeholder="Masukan Jumlah" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">Subtotal : </label>
		<div class="col-sm-4">
		<input type="text" name="Subtotal" class="form-control" placeholder="Masukan Subtotal" required>
		</div>
	</div> 
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp : </label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_transaksi" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman_transaksi" class="'btn btn-sm btn-danger">Batal</a>
		</div>
	</div> 
</form>