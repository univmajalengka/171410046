<?php
$halaman=(isset($_GET['halaman'])) ?$_GET['halaman']:"default";
switch($halaman){
	case'admin':include"admin.php";break;
	case'admin_edit':include"admin_edit.php";break;
	case'admin_hapus':include"admin_hapus.php";break;
	case'admin_tambah':include"admin_tambah.php";break;
	case'admin_ad':include"admin_save.php";break;
	case'admin_update':include"admin_update.php";break;
	case'admin_delete':include"admin_delete.php";break;
	
	case'pelanggan':include"pelanggan.php";break;
	case'pelanggan_edit':include"pelanggan_edit.php";break;
	case'pelanggan_hapus':include"pelanggan_hapus.php";break;
	case'pelanggan_tambah':include"pelanggan_tambah.php";break;
	case'pelanggan_ad':include"pelanggan_save.php";break;
	case'pelanggan_up':include"pelanggan_update.php";break;
	case'pelanggan_delete':include"pelanggan_delete.php";break;

	case'kategori':include"kategori.php";break;
	case'kategori_edit':include"kategori_edit.php";break;
	case'kategori_hapus':include"kategori_hapus.php";break;
	case'kategori_tambah':include"kategori_tambah.php";break;
	case'kategori_ad':include"kategori_save.php";break;
	case'kategori_up':include"kategori_update.php";break;
	case'kategori_delete':include"kategori_delete.php";break;

	case'barang':include"barang.php";break;
	case'barang_edit':include"barang_edit.php";break;
	case'barang_hapus':include"barang_hapus.php";break;
	case'barang_tambah':include"barang_tambah.php";break;
	case'barang_ad':include"barang_save.php";break;
	case'barang_up':include"barang_update.php";break;
	case'barang_delete':include"barang_delete.php";break;

	case'transaksi':include"transaksi.php";break;
	case'transaksi_edit':include"transaksi_edit.php";break;
	case'transaksi_hapus':include"transaksi_hapus.php";break;
	case'transaksi_tambah':include"transaksi_tambah.php";break;
	case'transaksi_ad':include"transaksi_save.php";break;
	case'transaksi_up':include"transaksi_update.php";break;
	case'transaksi_delete':include"transaksi_delete.php";break;

	case'notransaksi':include"notransaksi.php";break;
	case'notransaksi_edit':include"notransaksi_edit.php";break;
	case'notransaksi_hapus':include"notransaksi_hapus.php";break;
	case'notransaksi_tambah':include"notransaksi_tambah.php";break;
	case'notransaksi_ad':include"notransaksi_save.php";break;
	case'notransaksi_up':include"notransaksi_update.php";break;
	case'notransaksi_delete':include"notransaksi_delete.php";break;
	case'default':include"home.php";break;
}