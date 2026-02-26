<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\UserController;


Route::get('/', [UserController::class, 'index'])->name('main');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/resume', [UserController::class, 'resume'])->name('resume');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

