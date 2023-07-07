<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatTranksaksiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenjualanController;
use App\Mail\NotifPendaftaranReseller;
use FontLib\Table\Type\name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@Dashboard');
Route::get('/master1', 'DashboardController@master1');
Route::get('dashboard_{kategori}', 'DashboardController@Dashboard_kategori')->name('dashboard.kategori');

//Menu Daftar User Tanpa Login 
Route::get('/register1', 'UserController@create_user');
Route::post('/register_store', 'UserController@store_user');
Route::get('/screnshoot', 'UserController@screnshoot');
Route::get('kategori_show_produk/{id}', 'KategoriController@show_produk')->name('kategori.show_produk');

Route::get('/login1', function () {
	return view('login.login');
});

Route::get('/info', function () {
	return view('info');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

	// K-MEANS
	Route::get('/k_means', 'KMeansController@index')->name('k_means');

	Route::get('/k_alternatif', 'KMeansController@alternatif')->name('k_alternatif');
	Route::get('/k_laporan', 'KMeansController@laporan')->name('k_laporan');
	Route::get('/k_alternatif_hapus/{id}', 'KMeansController@alternatif_hapus')->name('k_alternatif_hapus');

	Route::get('/k_kriteria_hapus/{id}', 'KMeansController@kriteria_hapus')->name('k_kriteria_hapus');

	Route::get('/k_penjualan_hapus/{id}', 'KMeansController@penjualan_hapus')->name('k_penjualan_hapus');

	Route::get('/k_laporan', 'KMeansController@laporan')->name('k_laporan');
	Route::get('/k_alternatif_tambah', 'KMeansController@alternatif_tambah')->name('alternatif_tambah');
	Route::post('/tambah_alternatif_simpan', 'KMeansController@alternatif_simpan')->name('alternatif_simpan');

	Route::get('/k_penjualan', 'KMeansController@penjualan')->name('k_penjualan');
	Route::get('/k_penjualan_tambah', 'KMeansController@penjualan_tambah')->name('penjualan_tambah');
	Route::post('/tambah_penjualan_simpan', 'KMeansController@penjualan_simpan')->name('penjualan_simpan');


	Route::get('/k_kriteria', 'KMeansController@kriteria')->name('k_kriteria');
	Route::get('/k_rel_alternatif', 'KMeansController@relasi')->name('k_rel_alternatif');
	Route::get('/k_import', 'KMeansController@kmeans_import')->name('k_import');
	Route::get('/relasi_ubah/{id}', 'KMeansController@relasi_ubah')->name('relasi_ubah');
	Route::post('/relasi_ubah_simpan/{id}', 'KMeansController@relasi_ubah_simpan')->name('relasi_ubah_simpan');


	Route::get('barang', [BarangController::class, 'index'])->name('barang.list');
	Route::get('barang/add', [BarangController::class, 'create'])->name('barang.create');
	Route::post('barang/store', [BarangController::class, 'store'])->name('barang.add');
	Route::get('barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
	Route::post('barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
	Route::get('barang/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,pelanggan']], function () {
	// Produk
	Route::resource('produk', 'ProdukController');
	Route::get('/lihatproduk/{id}', 'ProdukController@show')->name('lihat.produk');

	// Kategori
	Route::resource('/kategori', 'KategoriController');
	Route::get('/daftar_produk', 'KategoriController@index')->name('kategori');
	Route::get('/kategori_{kategori}', 'KategoriController@kategori_show')->name('produkkategori.show');

	/*Pelanggan*/
	Route::resource('pelanggan', 'UserController');
	Route::get('pelanggan_ceksaldo/{id}', 'UserController@pelanggan_saldo');
	Route::get('pelanggan_profile', 'UserController@pelanggan_profile');

	// Ganti Kata Sandi
	Route::get('/pelanggan_sandi', 'UserController@pelanggan_sandi');
	Route::put('/password', 'PasswordController@update')->name('password.update');

	// Saldo Keluar Masuk
	Route::resource('/saldokeluarmasuk', 'SaldokeluarmasukController');
	Route::get('/konfirmasi_create/{id}', 'SaldokeluarmasukController@konfirmasi_create')->name('konfirmasi_create');
	Route::post('/konfirmasi_store', 'SaldokeluarmasukController@konfirmasi_store');
	Route::get('/pelanggan_riwayatpembayaran/{id}', 'SaldokeluarmasukController@pelanggan_riwayatpembayaran');

	// Tranksaksi
	Route::resource('/riwayattranksaksi', 'RiwayatTranksaksiController');
	Route::get('/pesanan', 'RiwayatTranksaksiController@index');
	Route::get('/pesanancreate/{id}', 'RiwayatTranksaksiController@create')->name('create.tranksaksi');
	Route::get('/pelanggan_pesanandiproses/{id}', 'RiwayatTranksaksiController@pelanggan_pesanandiproses')->name('pesananproses');
	Route::get('/pelanggan_pesananhistori/{id}', 'RiwayatTranksaksiController@pelanggan_pesananhistori');
	Route::get('/pelanggan_pesanandikirim/{id}', 'RiwayatTranksaksiController@pelanggan_pesanandikirim');
	Route::get('/pelanggan_pesanandikonfirmasi/{id}', 'RiwayatTranksaksiController@pelanggan_pesanandikonfirmasi');
	Route::get('/pelanggan_histori/{id}', 'RiwayatTranksaksiController@pelanggan_pesananhistori');
	Route::delete('/hapuspesanan/{id}', 'RiwayatTranksaksiController@destroy')->name('tranksaksi.destroy');
});

// Tampilan Mobile Tanpa Login
Route::get('m/login', function () {
	return view('m/login');
});
Route::get('/m', 'DashboardController@mDashboard')->name('m');
Route::get('/produk_cari', 'DashboardController@mCari');
Route::get('m_dashboard_{kategori}', 'DashboardController@mDashboard_kategori')->name('mdashboard.kategori');
Route::get('/mShowproduk/{id}', 'DashboardController@mShowproduk')->name('mShow.Produk');

// Tampilan Harus Login
Route::group(['middleware' => ['auth', 'checkRole:admin,pelanggan']], function () {
	Route::post('/mAddcart', 'AddcartController@mAddcart')->name('m.addcart');
	Route::get('/mcart', 'AddcartController@mcart')->name('m.cart');
	Route::get('mprofile', 'UserController@mprofil');
});
