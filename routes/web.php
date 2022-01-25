<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('about', 'about')->name('about');
Route::view('portfolio', 'portfolio')->name('portfolio');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
// Route::post('contact', [ContactController::class, 'create'])->name('contact.create');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
