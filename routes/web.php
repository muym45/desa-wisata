<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', UserController::class);
Route::resource('karyawan', KaryawanController::class);
