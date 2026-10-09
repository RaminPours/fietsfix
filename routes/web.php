<?php

use App\Http\Controllers\AfsprakenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AfsprakenController::class, 'index'])->name('home');
Route::get('/contact', [AfsprakenController::class, 'contact'])->name('contact');
Route::get('/fietsonderhoud', [AfsprakenController::class, 'fietsonderhoud'])
    ->name('fietsonderhoud');
Route::get('/fietssoorten', [AfsprakenController::class, 'fietssoorten'])
    ->name('fietssoorten');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AfsprakenController::class, 'dashboard'])
        ->name('dashboard');
    Route::post('/afspraken', [AfsprakenController::class, 'store'])
        ->name('afspraken.store');
    Route::get('/afspraken', [AfsprakenController::class, 'dashboard'])
        ->name('afspraken.index');
    Route::get('/afspraken/create', [AfsprakenController::class, 'create'])
        ->name('afspraken.create');
    Route::delete('/afspraken/{id}', [AfsprakenController::class, 'delete'])
        ->name('afspraken.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';