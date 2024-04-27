<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrativeCodeController;

Route::get('/', function () {
    return view('pages/home');
})->name('index');

Route::prefix('administrative-codes')->group(function () {
    Route::get('/', [AdministrativeCodeController::class, 'index'])->name('administrative-codes.index');
    Route::get('/create', [AdministrativeCodeController::class, 'create'])->name('administrative-codes.create');
    Route::post('/create', [AdministrativeCodeController::class, 'store'])->name('administrative-codes.store');
    Route::get('/{administrative-code}/edit', [AdministrativeCodeController::class, 'edit'])->name('administrative-codes.edit');
    Route::put('/{administrative-code}', [AdministrativeCodeController::class, 'update'])->name('administrative-codes.update');
});