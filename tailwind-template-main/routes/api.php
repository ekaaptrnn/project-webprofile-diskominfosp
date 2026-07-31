<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SkmController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\PejabatController;
use App\Http\Controllers\Api\AwardController;
use App\Http\Controllers\Api\DokumenController;
use App\Http\Controllers\Api\PodcastController;
use App\Http\Controllers\Api\LayananController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ThemeSettingController;
use App\Http\Controllers\Api\LogActivityController;
use App\Http\Controllers\Api\UserController;
use App\Models\VisitorLog;
use Carbon\Carbon;

// ============ ROUTE PUBLIK (tanpa login) ============
Route::post('/login', [AuthController::class, 'login']);

// 👈 1. ROUTE PENGUNJUNG / VISITOR STATS (BARU)
Route::get('/visitor-stats', function () {
    // Otomatis catat IP pengunjung
    VisitorLog::firstOrCreate([
        'ip_address' => request()->ip(),
        'visit_date' => now()->toDateString(),
    ]);

    $today = Carbon::today()->toDateString();
    $yesterday = Carbon::yesterday()->toDateString();
    $currentMonth = Carbon::now()->month;
    $currentYear = Carbon::now()->year;

    return response()->json([
        'hari_ini'  => VisitorLog::where('visit_date', $today)->count(),
        'kemarin'   => VisitorLog::where('visit_date', $yesterday)->count(),
        'bulan_ini' => VisitorLog::whereYear('visit_date', $currentYear)->whereMonth('visit_date', $currentMonth)->count(),
        'total'     => VisitorLog::count(),
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{id}', [BeritaController::class, 'show']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::get('/pejabat', [PejabatController::class, 'index']);

Route::get('/awards', [AwardController::class, 'index']);

Route::get('/dokumen', [DokumenController::class, 'index']);
Route::get('/dokumen-publik', [DokumenController::class, 'indexPublik']);
Route::get('/podcast', [PodcastController::class, 'index']);

Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/theme', [ThemeSettingController::class, 'index']);

// ROUTE SKM (PUBLIK)
Route::post('/skm/store', [SkmController::class, 'store']);
Route::get('/skm/stats', [SkmController::class, 'getStats']);


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

    Route::put('/theme', [ThemeSettingController::class, 'update']);
    Route::get('/logs', [LogActivityController::class, 'index']);

    Route::middleware(['auth:sanctum', 'role:Super Admin'])->group(function () {
        Route::get('/users', [UserController::class, 'index']);
        Route::post('/users', [UserController::class, 'store']);
        Route::put('/users/{id}', [UserController::class, 'update']);
        Route::delete('/users/{id}', [UserController::class, 'destroy']);
    });
});
