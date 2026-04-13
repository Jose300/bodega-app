<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');

Route::middleware('guest')->group(function () {
    Route::post('/', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'login']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
