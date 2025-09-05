<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-me', [PageController::class, 'about'])->name('about');
Route::get('/contact-me', [PageController::class, 'contact'])->name('contact');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/terms', [PageController::class, 'terms'])->name('terms');

Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

