<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('about', [SiteController::class, 'about'])->name('about');
Route::get('/service', [SiteController::class, 'service']);
Route::get('contact', [SiteController::class, 'contact'])->name('contact');
Route::get('{any}', [SiteController::class, 'notfound'])->where('any', '.*');
