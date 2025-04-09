<?php

use Illuminate\Support\Facades\Route;

Route::resource('sembako', SembakoController::class);
Route::get('/sembako', [SembakoController::class, 'index'])->name('sembako.index');
Route::get('/sembako/create', [SembakoController::class, 'create'])->name('sembako.create');

