<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return "Halo ini praktikum Laravel";
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);