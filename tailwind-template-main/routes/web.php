<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Import Komponen Livewire
use App\Livewire\Admin\Articles;
use App\Livewire\Admin\Awards;
use App\Livewire\Admin\Layanan; // 👈 1. TAMBAHKAN IMPORT INI
use App\Livewire\Admin\SkmManager;

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

        // 👈 2. UBAH BARIS INI (Ganti Route::view menjadi Route::get memanggil Layanan::class)
        Route::get('/layanan', Layanan::class)->name('layanan');

        Route::view('/dokumen', 'admin.dokumen')->name('dokumen');

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
