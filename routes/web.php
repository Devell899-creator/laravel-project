<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediumController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StreamController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\ClassController;

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

Route::get('/subject', [SubjectController::class,'index']);

Route::post('/subject/store', [SubjectController::class,'store']);

Route::get('/subject/edit/{id}', [SubjectController::class,'edit']);

Route::post('/subject/update/{id}', [SubjectController::class,'update']);

Route::get('/subject/delete/{id}', [SubjectController::class,'destroy']);

Route::get('/semester', [SemesterController::class,'index']);

Route::post('/semester/store', [SemesterController::class,'store']);

Route::get('/semester/edit/{id}', [SemesterController::class,'edit']);

Route::post('/semester/update/{id}', [SemesterController::class,'update']);

Route::get('/semester/delete/{id}', [SemesterController::class,'destroy']);

Route::get('/stream', [StreamController::class,'index']);

Route::post('/stream/store', [StreamController::class,'store']);

Route::get('/stream/edit/{id}', [StreamController::class,'edit']);

Route::post('/stream/update/{id}', [StreamController::class,'update']);

Route::get('/stream/delete/{id}', [StreamController::class,'destroy']);

Route::get('/shift', [ShiftController::class,'index']);

Route::post('/shift/store', [ShiftController::class,'store']);

Route::get('/shift/edit/{id}', [ShiftController::class,'edit']);

Route::post('/shift/update/{id}', [ShiftController::class,'update']);

Route::get('/shift/delete/{id}', [ShiftController::class,'destroy']);

Route::get('/classes', [ClassController::class,'index']);

Route::post('/classes/store', [ClassController::class,'store']);

Route::get('/classes/edit/{id}', [ClassController::class,'edit']);

Route::post('/classes/update/{id}', [ClassController::class,'update']);

Route::get('/classes/delete/{id}', [ClassController::class,'destroy']);