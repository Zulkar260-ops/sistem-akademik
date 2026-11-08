<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('akademik');
});

// Halaman layanan akademik
Route::get('/krs', function () {
    return view('krs');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/dokumen', function () {
    return view('dokumen');
});


use App\Http\Controllers\DokumenController;

Route::post('/dokumen', [DokumenController::class, 'store'])
    ->name('dokumen.store');