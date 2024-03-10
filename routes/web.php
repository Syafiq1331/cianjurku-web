<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    return view('pages.guest.404');
});

Route::get('/login', [\App\Http\Controllers\auth\AuthController::class, 'login'])->name('login');
