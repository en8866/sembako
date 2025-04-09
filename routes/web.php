<?php

use Illuminate\Support\Facades\Route;


Route::get('/sembako', [SembakoController::class, 'index'])->name('sembako.index');
Route::get('/sembako/create', [SembakoController::class, 'create'])->name('sembako.create');
Route::get('/sembako', [SembakoController::class, 'index'])->name('sembako.index');
Route::post('/sembako', [SembakoController::class, 'store'])->name('sembako.store');
