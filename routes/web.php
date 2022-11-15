<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\IndexsiswaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LaporanabsensiController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\LaporanlogbookController;

use App\Http\Controllers\IndexpController;
use App\Http\Controllers\LogbookpController;
use App\Http\Controllers\DatasiswaController;

use App\Http\Controllers\IndexguruController;
use App\Http\Controllers\LogbookgController;
use App\Http\Controllers\AbsensigController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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


//Admin
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/index', [IndexController::class, 'index']);
    Route::get('/profilsekolah', [IndexController::class, 'profil']);
    Route::get('/editprofil/{id}', [IndexController::class, 'edit']);
    Route::put('/profil/{id}', [IndexController::class, 'update']);
    Route::resource('/siswa', SiswaController::class);
    Route::resource('/guru', GuruController::class);
    Route::resource('/perusahaan', PerusahaanController::class);
});


//Siswa
Route::group(['middleware' => ['auth', 'ceklevel:siswa']], function () {
    Route::get('/indexsiswa', [IndexsiswaController::class, 'index']);
    Route::get('/profilsiswa', [IndexsiswaController::class, 'profil']);
    Route::resource('/absensi', AbsensiController::class);
    Route::resource('/laporanabsensi', LaporanabsensiController::class);
    Route::resource('/logbook', LogbookController::class);
    Route::resource('/laporanlogbook', LaporanlogbookController::class);
    Route::put('edit/{id}','LaporanlogbookController@update');
    Route::get('/exportpdf', [LaporanlogbookController::class, 'exportpdf']);
});

//Perusahaan
Route::group(['middleware' => ['auth', 'ceklevel:instansi']], function () {
    Route::get('/indexp', [IndexpController::class, 'index']);
    Route::get('/profil', [IndexpController::class, 'profil']);
    Route::get('/editprofil/{id}', [IndexpController::class, 'edit']);
    Route::put('/profil', [IndexpController::class, 'update']);
    Route::resource('/logbookp', LogbookpController::class);
    Route::resource('/datasiswa', DatasiswaController::class);
});

//Guru
Route::group(['middleware' => ['auth', 'ceklevel:guru']], function () {
    Route::get('/indexg', [IndexguruController::class, 'index']);
    Route::get('/profilguru', [IndexguruController::class, 'profil']);
    Route::resource('/absensig', AbsensigController::class);
    Route::resource('/logbookg', LogbookgController::class);
});


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');