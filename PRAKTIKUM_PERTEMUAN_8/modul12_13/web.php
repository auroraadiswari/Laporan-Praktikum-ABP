<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/products');
    }

    return view('login');
})->name('login');

Route::post('/auth', [SiteController::class, 'auth'])->name('auth');

Route::get('/logout', [SiteController::class, 'logout'])->name('logout');

Route::resource('products', ProductController::class)->middleware('auth');