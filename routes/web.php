<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdministratorController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('login');
Route::post('/', [HomeController::class, 'index'])->name('login');
// Route::post('/{id}', [HomeController::class, 'laundry']);
Route::get('/{id}', [HomeController::class, 'laundry']);
// Route::post('search', [HomeController::class, 'search']);

// login
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('administrator', [AdministratorController::class, 'index'])->middleware('auth');

// pelanggan
Route::get('pelanggan', [AdministratorController::class, 'pelanggan'])->middleware('auth');
Route::get('pelanggan/tambah', [AdministratorController::class, 'tambah_pelanggan'])->middleware('auth');
Route::post('pelanggan/tambah/simpan', [AdministratorController::class, 'simpan_tambah_pelanggan'])->middleware('auth');
Route::get('pelanggan/edit/{id}',[AdministratorController::class, 'edit_pelanggan'])->middleware('auth');
Route::post('pelanggan/edit/simpan/{id}', [AdministratorController::class, 'simpan_pelanggan'])->middleware('auth');
Route::post('pelanggan/hapus/{id}', [AdministratorController::class, 'hapus_pelanggan'])->middleware('auth');

// laundry
Route::get('laundry/tambah', [AdministratorController::class, 'tambah_laundry'])->middleware('auth');
Route::post('laundry/tambah/simpan', [AdministratorController::class, 'simpan_tambah_laundry'])->middleware('auth');
Route::get('laundry/aktif', [AdministratorController::class, 'aktif_laundry'])->middleware('auth');
Route::get('laundry/edit/{id}', [AdministratorController::class, 'edit_laundry'])->middleware('auth');
Route::post('laundry/edit/simpan/{id}', [AdministratorController::class, 'simpan_laundry'])->middleware('auth');
Route::post('laundry/hapus/{id}', [AdministratorController::class, 'hapus_laundry'])->middleware('auth');

Route::get('laundry/siap', [AdministratorController::class, 'siap_laundry'])->middleware('auth');
Route::get('laundry/selesai', [AdministratorController::class, 'selesai_laundry'])->middleware('auth');