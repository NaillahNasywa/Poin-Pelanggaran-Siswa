<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PelanggaranController;
// use App\Http\Controllers\PelsiswaController;
use App\Http\Controllers\Pelanggaran_siswaController;
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

Route::get('/db', function () {
    return view('layout.db');
});

Route::get('/dashboard/siswa', function () {
    return view('/dashboard.siswa');
});

Route::get('/dashboard', function () {
    return view('/dashboard.dash');
});

Route::get('/dashboard/guru', function () {
    return view('/dashboard.guru');
});

Route::get('/dashboard/plnggrn', function () {
    return view('/dashboard.plnggrn');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/show/{id}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');
Route::get('/guru/show/{id}', [GuruController::class, 'show'])->name('guru.show');
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::put('/guru/update/{id}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('/guru/destroy/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');

Route::get('/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran.index');
Route::get('/pelanggaran/create', [PelanggaranController::class, 'create'])->name('pelanggaran.create');
Route::post('/pelanggaran/store', [PelanggaranController::class, 'store'])->name('pelanggaran.store');
Route::get('/pelanggaran/{id}/edit', [PelanggaranController::class, 'edit'])->name('pelanggaran.edit');
Route::put('/pelanggaran/update/{id}', [PelanggaranController::class, 'update'])->name('pelanggaran.update');
Route::delete('/pelanggaran/destroy/{id}', [PelanggaranController::class, 'destroy'])->name('pelanggaran.destroy');

Route::get('/pelanggaran_siswa', [Pelanggaran_siswaController::class, 'index'])->name('pelanggaran_siswa.index');
Route::get('/pelanggaran_siswa/create', [Pelanggaran_siswaController::class, 'create'])->name('pelanggaran_siswa.create');
Route::post('/pelanggaran_siswa/store', [Pelanggaran_siswaController::class, 'store'])->name('pelanggaran_siswa.store');