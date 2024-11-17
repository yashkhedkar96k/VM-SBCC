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
Route::post('/student/store',[StudentImportController::class,'store'])->name('students.store');
Route::get('/studentlist', [StudentImportController::class, 'studentlist'])->name('studentlist');
Route::POST('/student-list-ajax', [StudentImportController::class, 'studentListAjax'])->name('student_list');
Route::post('/delete-student', [StudentImportController::class, 'deleteStudent'])->name('delete_student');
Route::get('/students/edit/{id}', [StudentImportController::class, 'edit'])->name('students.edit');
Route::put('/students/update/{id}', [StudentImportController::class, 'update'])->name('students.update');
Route::get('/lc',[StudentImportController::class,'lc'])->name('lc');
Route::get('/students/print-lc/{studentId}', [StudentImportController::class, 'printLC']);

