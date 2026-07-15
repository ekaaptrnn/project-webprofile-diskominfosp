<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\LayananController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ThemeSettingController;
use App\Http\Controllers\Api\LogActivityController;

// ============ ROUTE PUBLIK (tanpa login) ============
Route::post('/login', [AuthController::class, 'login']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{id}', [BeritaController::class, 'show']);

Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/theme', [ThemeSettingController::class, 'index']); // <- PASTIKAN INI DI LUAR GRUP

// ============ ROUTE YANG BUTUH LOGIN ============
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::post('/berita', [BeritaController::class, 'store']);
    Route::put('/berita/{id}', [BeritaController::class, 'update']);
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy']);

    Route::post('/layanan', [LayananController::class, 'store']);
    Route::put('/layanan/{id}', [LayananController::class, 'update']);
    Route::delete('/layanan/{id}', [LayananController::class, 'destroy']);

    Route::post('/kategori', [KategoriController::class, 'store']);

    Route::put('/theme', [ThemeSettingController::class, 'update']); // <- YANG PUT DI DALAM GRUP
    Route::get('/logs', [LogActivityController::class, 'index']);
});
