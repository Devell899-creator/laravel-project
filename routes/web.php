<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediumController;
use App\Http\Controllers\SectionController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

Route::get('/medium', [MediumController::class,'index']);

Route::post('/medium/store', [MediumController::class,'store']);

Route::get('/medium/edit/{id}',[MediumController::class,'edit']);

Route::post('/medium/update/{id}',[MediumController::class,'update']);

Route::get('/medium/delete/{id}', [MediumController::class,'destroy']);

Route::get('/section', [SectionController::class,'index']);

Route::post('/section/store', [SectionController::class,'store']);

Route::get('/section/edit/{id}', [SectionController::class,'edit']);

Route::post('/section/update/{id}', [SectionController::class,'update']);

Route::get('/section/delete/{id}', [SectionController::class,'destroy']);