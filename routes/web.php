<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/data-guru', function () {
    return view('pages.data-master.guru');
});

Route::get('/data-kelas', function () {
    return view('pages.data-master.kelas');
});

Route::get('/data-siswa', function () {
    return view('pages.data-master.siswa');
});

Route::get('/jenis-transaksi', function () {
    return view('pages.data-master.jenis-transaksi');
});

Route::get('/tanggal-merah', function () {
    return view('pages.data-master.tanggal-merah');
});

Route::get('/pendaftaran', function () {
    return view('pages.kas-masuk.pendaftaran');
});

Route::get('/uang-ujian', function () {
    return view('pages.kas-masuk.ujian');
});

Route::get('/uang-spp', function () {
    return view('pages.kas-masuk.spp');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
