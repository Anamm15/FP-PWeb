<?php

use App\Http\Controllers\BansosController;
use App\Http\Controllers\DanaController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PenerimaBansosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);

Route::get('/bansos', [BansosController::class, 'index']);
Route::get('/search-nik', [BansosController::class, 'searchNik'])->name('search.nik');

