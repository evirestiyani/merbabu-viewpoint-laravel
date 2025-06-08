<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/tentang', fn() => view('about'))->name('about');
Route::get('/artikel', [PostController::class, 'index'])->name('posts.index');
Route::get('/artikel/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/panduan', [PostController::class, 'panduan'])->name('panduan');
Route::get('/peralatan', [PostController::class, 'peralatan'])->name('peralatan');
Route::get('/spot', [PostController::class, 'spot'])->name('spot');
Route::get('/gallery', [PostController::class, 'gallery'])->name('gallery');
