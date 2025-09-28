<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

// Website Development Service Routes
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/portfolio', [WebsiteController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
