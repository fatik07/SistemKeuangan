<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasukSppController;
use App\Http\Controllers\MasukUjianController;
use App\Http\Controllers\MasukPendaftaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GajiController;




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

Route::get('/',[UserController::class, 'index']);
Route::post('login', [UserController::class, 'login']);

// SPP
Route::get('/kas/masuk/spp', [MasukSppController::class, 'index'])->name('indexSpp');
Route::get('getDataSpp',[MasukSppController::class, 'getDataSpp'])->name('getDataSpp');
Route::get('/kas/masuk/spp/tambah',[MasukSppController::class, 'create'])->name('tambahdataspp');
Route::get('/kas/masuk/spp/save',[MasukSppController::class, 'store'])->name('storeSpp');


// UJIAN
Route::get('/kas/masuk/Ujian', [MasukUjianController::class, 'index'])->name('indexUjian');
Route::get('getDataUjian',[MasukUjianController::class, 'getDataUjian'])->name('getDataUjian');
Route::get('/kas/masuk/ujian/tambah',[MasukUjianController::class, 'create'])->name('tambahdataUjian');
Route::get('/kas/masuk/ujian/save',[MasukUjianController::class, 'store'])->name('storeUjian');

// pendaftaran
Route::get('/kas/masuk/pendaftaran', [MasukpendaftaranController::class, 'index'])->name('indexPendaftaran');
Route::get('getDataPendaftaran',[MasukPendaftaranController::class, 'getDataPendaftaran'])->name('getDataPendaftaran');
Route::get('/kas/masuk/pendaftaran/tambah',[MasukPendaftaranController::class, 'create'])->name('tambahdataPendaftaran');
Route::get('/kas/masuk/pendaftaran/save',[MasukPendaftaranController::class, 'store'])->name('storePendaftaran');

// siswa
Route::get('master/Siswa', [SiswaController::class, 'index'])->name('indexSiswa');
Route::get('getDataSiswa',[SiswaController::class, 'getDataSiswa'])->name('getDataSiswa');
Route::get('master/Siswa/tambah',[SiswaController::class, 'create'])->name('tambahdataSiswa');
Route::post('master/Siswa/save',[SiswaController::class, 'store'])->name('storeSiswa');

// guru
Route::get('master/Guru', [GuruController::class, 'index'])->name('indexGuru');
Route::get('getDataGuru',[GuruController::class, 'getDataGuru'])->name('getDataGuru');
Route::get('master/Guru/tambah',[GuruController::class, 'create'])->name('tambahdataGuru');
Route::post('master/Guru/save',[GuruController::class, 'store'])->name('storeGuru');

// guru
Route::get('keluar/Gaji', [GajiController::class, 'index'])->name('indexGaji');
Route::get('getDataGaji',[GajiController::class, 'getDataGaji'])->name('getDataGaji');
Route::get('keluar/Gaji/tambah',[GajiController::class, 'create'])->name('tambahdataGaji');
Route::get('keluar/Gaji/save',[GajiController::class, 'store'])->name('storeGaji');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// // data master
// Route::get('/data-guru', function () {
//     return view('pages.data-master.guru');
// });

// Route::get('/data-kelas', function () {
//     return view('pages.data-master.kelas');
// });

// Route::get('/data-siswa', function () {
//     return view('pages.data-master.siswa');
// });

// Route::get('/jenis-transaksi', function () {
//     return view('pages.data-master.jenis-transaksi');
// });

// Route::get('/tanggal-merah', function () {
//     return view('pages.data-master.tanggal-merah');
// });

// // kas masuk
// Route::get('/pendaftaran', function () {
//     return view('pages.kas-masuk.pendaftaran');
// });

// Route::get('/uang-ujian', function () {
//     return view('pages.kas-masuk.ujian');
// });



// kas keluar
Route::get('/gaji', function () {
    return view('pages.kas-keluar.gaji');
});

// laporan
Route::get('/laporan', function () {
    return view('pages.laporan');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
