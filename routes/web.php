<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\StudentController;

// ================== Halaman Utama ==================
Route::get('/', [HomeController::class, 'index'])->name('home');

// ================== Sambutan ==================
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');

// ================== Galeri ==================
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// ================== Pendaftaran ==================
Route::get('/pendaftaran', [Pendaftaran::class, 'index'])->name('pendaftaran');

// Formulir Pendaftaran
Route::get('/formulir', [FormulirController::class, 'create'])->name('pendaftaran.formulir');
Route::post('/formulir', [FormulirController::class, 'store'])->name('pendaftaran.formulir.store');

// Validasi Pendaftaran
Route::get('/validasi', [FormulirController::class, 'validasi'])->name('pendaftaran.validasi');

// ================== Backoffice (Siswa) ==================
Route::prefix('backoffice')->name('student.')->group(function () {
    Route::get('/student', [StudentController::class, 'index'])->name('index');
    Route::get('/student/create', [StudentController::class, 'create'])->name('create');
    Route::post('/student', [StudentController::class, 'store'])->name('store');
    Route::get('/student/{id}/edit', [StudentController::class, 'edit'])->name('edit');
    Route::put('/student/{id}', [StudentController::class, 'update'])->name('update');
    Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('destroy');
});
