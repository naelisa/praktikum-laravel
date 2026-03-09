<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;

Route::get('/', function () {
    return "Halo ini praktikum Laravel";
});

Route::get('/matkuls', [MatkulController::class, 'index']);