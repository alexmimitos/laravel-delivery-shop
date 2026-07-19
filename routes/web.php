<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\facades\Route;


Route::get('/', [HomeController::class, 'index'])
->name('home');

Route::get('/services', [ServiceController::class, 'index'])
->name('services');

// Route Service Parameter 
Route::get('/services/{id}', [ServiceController::class, 'show'])
->name('services.show');
