<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    return view('pages.guest.404');
});

Route::get('/login', [\App\Http\Controllers\auth\AuthController::class, 'login'])->name('login');

Route::prefix('profil')->group(function () {
    Route::get('/visi-misi', [\App\Http\Controllers\guest\ProfilController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/letak-geografis', [\App\Http\Controllers\guest\ProfilController::class, 'letakGeografis'])->name('letak-geografis');
    Route::get('/peta-administrasi', [\App\Http\Controllers\guest\ProfilController::class, 'petaAdministrasi'])->name('peta-administrasi');
});
