<?php

use App\Http\Controllers\guest\KontakController;
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

Route::prefix('pemerintahan')->group(function () {
    Route::get('/profil-bupati', [\App\Http\Controllers\guest\PemerintahanController::class, 'profilBupati'])->name('profil-bupati');
    Route::get('/profil-wakil-bupati', [\App\Http\Controllers\guest\PemerintahanController::class, 'profilWakilBupati'])->name('profil-wakil-bupati');
    Route::get('/sekretariat-daerah', [\App\Http\Controllers\guest\PemerintahanController::class, 'sekretariatDaerah'])->name('sekretariat-daerah');
    Route::get('/dinas', [\App\Http\Controllers\guest\PemerintahanController::class, 'dinas'])->name('dinas');
    Route::get('/badan', [\App\Http\Controllers\guest\PemerintahanController::class, 'badan'])->name('badan');
    Route::get('/inspektor-daerah', [\App\Http\Controllers\guest\PemerintahanController::class, 'inspektorDaerah'])->name('inspektor-daerah');
    Route::get('/sekretariat-dprd', [\App\Http\Controllers\guest\PemerintahanController::class, 'sekretariatDPRD'])->name('sekretariat-dprd');
    Route::get('/rsud', [\App\Http\Controllers\guest\PemerintahanController::class, 'rsud'])->name('rsud');
    Route::get('/kecamatan', [\App\Http\Controllers\guest\PemerintahanController::class, 'kecamatan'])->name('kecamatan');
});

Route::get('/kontak', [KontakController::class, 'index']);
