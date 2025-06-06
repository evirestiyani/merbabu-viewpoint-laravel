<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/tentang', fn() => view('about'))->name('about');
Route::get('/artikel', [PostController::class, 'index'])->name('posts.index');
Route::get('/artikel/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/galerry', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', fn() => view('contact'))->name('contact');

