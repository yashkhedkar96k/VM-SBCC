<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentImportController;
use App\Http\Controllers\Uploadcsv;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/index',[StudentImportController::class,'index'])->name('uploadcsv');
Route::get('/addnewstudent',[AuthController::class,'addstudent'])->name('addstudent');