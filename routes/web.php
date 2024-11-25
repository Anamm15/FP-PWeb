<?php

use App\Http\Controllers\DanaController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PenerimaBansosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/get', [PengurusController::class, 'getPengurus']);
    Route::post('/tambah', [PengurusController::class, 'tambahPengurus']);
    Route::post('/login', [PengurusController::class, 'login']);
    Route::post('/logout', [PengurusController::class, 'logout']);
    Route::put('/update', [PengurusController::class, 'updatePengurus']);
    Route::delete('/delete', [PengurusController::class, 'deletePengurus']);
});

Route::prefix('warga')->group(function() {
    Route::get('/get', [WargaController::class, 'getWarga']);
    Route::post('/tambah', [WargaController::class, 'tambahWarga']);
    Route::put('/update', [WargaController::class, 'updateWarga']);
    Route::delete('/delete', [WargaController::class, 'deleteWarga']);
});

Route::prefix('dana')->group(function() {
    Route::get('/get', action: [DanaController::class, 'getDana']);
    Route::post('/tambah', [DanaController::class, 'tambahDana']);
    Route::put('/update', [DanaController::class, 'updateDana']);
    Route::delete('/delete', [DanaController::class, 'deleteDana']);
});

Route::prefix(prefix: 'layanan')->group(function() {
    Route::get('/get', [LayananController::class, 'getLayanan']);
    Route::post('/tambah', [LayananController::class, 'tambahLayanan']);
    Route::put('/update', [LayananController::class, 'updateLayanan']);
    Route::delete('/delete', [LayananController::class, 'deleteLayanan']);
});

Route::prefix(prefix: 'bansos')->group(function() {
    Route::get('/get', [PenerimaBansosController::class, 'getPenerimaBansos']);
    Route::post('/tambah', [PenerimaBansosController::class, 'tambahPenerimaBansos']);
    Route::put('/update', [PenerimaBansosController::class, 'updatePenerimaBansos']);
    Route::delete('/delete', [PenerimaBansosController::class, 'deletePenerimaBansos']);
});

Route::prefix('pengumuman')->group(function() {
    Route::get('/get', [PengumumanController::class, 'getPengumuman']);
    Route::post('/tambah', [PengumumanController::class, 'tambahPengumuman']);
    Route::put('/update', [PengumumanController::class, 'updatePengumuman']);
    Route::delete('/delete', [PengumumanController::class, 'deletePengumuman']);
});

Route::prefix(prefix: 'komentar')->group(function() {
    Route::get('/get', [KomentarController::class, 'getKomentar']);
    Route::post('/tambah', [KomentarController::class, 'tambahKomentar']);
    Route::put('/update', [KomentarController::class, 'updateKomentar']);
    Route::delete('/delete', [KomentarController::class, 'deleteKomentar']);
});

?>
