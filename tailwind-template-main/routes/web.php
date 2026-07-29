<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Import Komponen Livewire
use App\Livewire\Admin\Articles;
use App\Livewire\Admin\Awards;
use App\Livewire\Admin\Layanan; 
use App\Livewire\Admin\SkmManager;
use App\Http\Controllers\SpaAuthController;

Route::view('/', 'welcome')->name('home');

Route::view('/admin/login', 'admin.login')->name('admin.login');

// Login berbasis session, dipanggil dari React (Sanctum SPA auth)
Route::post('/auth/login', [SpaAuthController::class, 'login']);

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
        Route::view('/log-activity', 'admin.log-activity')->name('log-activity');
        Route::view('/theme-settings', 'admin.theme-settings')->name('theme-settings');
        Route::view('/berita', 'admin.berita')->name('berita');
        Route::view('/pejabat', 'admin.pejabat')->name('pejabat');

        Route::get('/podcast', \App\Livewire\Admin\PodcastManager::class)->name('podcast');     
        Route::get('/layanan', Layanan::class)->name('layanan');

        Route::view('/dokumen', 'admin.dokumen')->name('dokumen');
        Route::view('/dokumen-publik', 'admin.dokumen-publik')->name('dokumen-publik');
        Route::get('/dokumen-publik', \App\Livewire\Admin\DokumenPublikManager::class)->name('dokumen-publik');
        Route::get('/skm', SkmManager::class)->name('skm');

        // Route Livewire Lainnya
        Route::get('/articles', Articles::class)->name('articles');
        Route::get('/awards', Awards::class)->name('awards');

        Route::view('/users', 'admin.users')
            ->name('users')
            ->middleware('role:Super Admin');

        Route::post('/logout', function () {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect()->route('admin.login');
        })->name('logout');
    });
