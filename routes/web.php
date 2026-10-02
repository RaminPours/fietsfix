<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfsprakenController;


Route::get('/',fn()=>redirect()->route('afspraken.index'));
Route::get('afspraken', [AfsprakenController::class, 'index'])->name('afspraken.index');
Route::get('afspraken/create', [AfsprakenController::class, 'create'])->name('afspraken.create');
Route::get('afspraken/overzicht', [AfsprakenController::class, 'overzicht'])->name('afspraken.overzicht');
Route::post('afspraken/', [AfsprakenController::class, 'store'])->name('afspraken.store');
Route::get('afspraken/{afspraken}/success', [AfsprakenController::class, 'success'])->name('afspraken.success');
Route::get('contact', [AfsprakenController::class, 'contact'])->name('afspraken.contact');
Route::get('fietsonderhoud', [AfsprakenController::class, 'fietsonderhoud'])->name('afspraken.fietsonderhoud');
Route::get('fietssoorten', [AfsprakenController::class, 'fietssoorten'])->name('afspraken.fietssoorten');