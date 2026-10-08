<?php

use App\Http\Controllers\AfsprakenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('afspraken.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('afspraak', [AfsprakenController::class, 'index'])->name('afspraken.index');
    Route::get('fietsonderhoud', [AfsprakenController::class, 'fietsonderhoud']);
    Route::get('fietssoorten', [AfsprakenController::class, 'fietssoorten']);
    Route::get('contact', [AfsprakenController::class, 'contact']);
    Route::get('afspraken/success/{id}', [AfsprakenController::class, 'success'])->name('afspraken.success');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
