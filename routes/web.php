<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/service', [SiteController::class, 'service']);
Route::get('contact', [SiteController::class, 'contact'])->name('contact');
