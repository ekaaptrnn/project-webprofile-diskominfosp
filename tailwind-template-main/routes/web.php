<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Import Komponen Livewire
use App\Livewire\Admin\Articles;
use App\Livewire\Admin\Awards;
use App\Livewire\Admin\Layanan;
use App\Livewire\Admin\SkmManager;
use App\Livewire\Admin\DokumenManager;       // 👈 Komponen Dokumen PPID
use App\Livewire\Admin\DokumenPublikManager; // 👈 Komponen Dokumen Publik
use App\Livewire\Admin\PodcastManager;       // 👈 Komponen Podcast (KOMINPOD)

Route::view('/', 'welcome')->name('home');

Route::view('/admin/login', 'admin.login')->name('admin.login');

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
        Route::view('/log-activity', 'admin.log-activity')->name('log-activity');
        Route::view('/theme-settings', 'admin.theme-settings')->name('theme-settings');
        Route::view('/berita', 'admin.berita')->name('berita');
        Route::view('/pejabat', 'admin.pejabat')->name('pejabat');

        Route::get('/layanan', Layanan::class)->name('layanan');

        // -------------------------------------------------------------
        // ROUTE DOKUMEN & PODCAST:
        // 1. Dokumen PPID (Informasi Berkala, Setiap Saat, dll)
        Route::get('/dokumen-ppid', DokumenManager::class)->name('dokumen');

        // 2. Data Publik (Rilis Data, LKJIP, Statistik)
        Route::get('/dokumen-publik', DokumenPublikManager::class)->name('dokumen-publik');

        // 3. Podcast / KOMINPOD
        Route::get('/podcast', PodcastManager::class)->name('podcast');
        // -------------------------------------------------------------

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
