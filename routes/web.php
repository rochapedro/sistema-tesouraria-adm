<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrativeCodeController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('administrative-codes')->group(function () {
    Route::get('/', [AdministrativeCodeController::class, 'index'])->name('administrative-codes.index');
    Route::get('/create', [AdministrativeCodeController::class, 'create'])->name('administrative-codes.create');
    Route::post('/create', [AdministrativeCodeController::class, 'store'])->name('administrative-codes.store');
});