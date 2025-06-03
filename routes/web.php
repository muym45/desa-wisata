<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KategoriWisataController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', UserController::class);
Route::resource('karyawan', KaryawanController::class);
Route::resource('kategori_wisata', KategoriWisataController::class)->parameters([
    'kategori_wisata' => 'kategori_wisata'
]);
