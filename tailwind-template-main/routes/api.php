<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\LayananController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ThemeSettingController;
use App\Http\Controllers\Api\LogActivityController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SkmController;
use App\Http\Controllers\Api\UnduhanController;

// ============ ROUTE PUBLIK (tanpa login) ============
Route::post('/login', [AuthController::class, 'login']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{id}', [BeritaController::class, 'show']);

Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/layanans', [LayananController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/theme', [ThemeSettingController::class, 'index']);

// --- ROUTE PUBLIK UNDUHAN ---
Route::get('/unduhan', [UnduhanController::class, 'index']);

// --- ROUTE PUBLIK SKM ---
Route::post('/skm/store', [SkmController::class, 'store']);
Route::post('/skm', [SkmController::class, 'store']);
Route::get('/skm/stats', [SkmController::class, 'getStats']); // ✅ DIPINDAHKAN KE SINI (PUBLIK)


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
    Route::put('/kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']);

    // --- ROUTE ADMIN UNDUHAN ---
    Route::post('/unduhan', [UnduhanController::class, 'store']);
    Route::put('/unduhan/{id}', [UnduhanController::class, 'update']);
    Route::delete('/unduhan/{id}', [UnduhanController::class, 'destroy']);

    Route::put('/theme', [ThemeSettingController::class, 'update']);
    Route::get('/logs', [LogActivityController::class, 'index']);

    // --- ROUTE ADMIN SKM ---
    Route::get('/skm', [SkmController::class, 'index']); // Hanya daftar tabel lengkap untuk admin
    Route::delete('/skm/{id}', [SkmController::class, 'destroy']);

    Route::middleware(['role:Super Admin'])->group(function () {
        Route::get('/users', [UserController::class, 'index']);
        Route::post('/users', [UserController::class, 'store']);
        Route::put('/users/{id}', [UserController::class, 'update']);
        Route::delete('/users/{id}', [UserController::class, 'destroy']);
    });
});
