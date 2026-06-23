<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

// Halaman utama langsung diarahkan ke login
Route::get('/', function () {
    return view('login');
});

// Halaman login
Route::get('/login', function () {
    return view('login');
});

// Proses login
Route::post('/auth', [SiteController::class, 'auth'])->name('auth');

// Route resource untuk ProductController
Route::resource('products', ProductController::class);