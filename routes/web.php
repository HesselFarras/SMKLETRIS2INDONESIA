<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', function () {
    return view('about');
})->name('tentang');

Route::get('/pendaftaran', function () {
    return view('ppdb');
})->name('pendaftaran');

Route::get('/berita', function () {
    return view('news');
})->name('berita');

Route::get('/kontak', function () {
    return view('contact');
})->name('kontak');