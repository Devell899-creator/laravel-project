<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediumController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

Route::get('/medium', [MediumController::class,'index']);

Route::post('/medium/store', [MediumController::class,'store']);

Route::get('/medium/delete/{id}', [MediumController::class,'destroy']);