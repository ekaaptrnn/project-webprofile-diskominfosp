<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

/*
|--------------------------------------------------------------------------
| Admin Login (tanpa proteksi — ini justru pintu masuknya)
|--------------------------------------------------------------------------
*/
Route::view('/admin/login', 'admin.login')->name('admin.login');

/*
|--------------------------------------------------------------------------
| Admin Dashboard (WAJIB login)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
        Route::view('/log-activity', 'admin.log-activity')->name('log-activity');
        Route::view('/theme-settings', 'admin.theme-settings')->name('theme-settings');

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
