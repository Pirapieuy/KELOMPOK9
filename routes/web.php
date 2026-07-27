<?php

use Illuminate\Support\Facades\Route;

// Route ini menampilkan halaman utama (welcome.blade.php) sebagai homepage
Route::view('/', 'welcome')->name('home');

// Route khusus untuk user yang sudah login (auth) dan email-nya terverifikasi (verified)
Route::middleware(['auth', 'verified'])->group(function () {
    // Halaman dashboard, hanya bisa diakses setelah login
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
