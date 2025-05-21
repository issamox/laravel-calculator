<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculatorController;

// Affiche l'interface de la calculatrice
Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator.index');
// Gère l'action d'un bouton (chiffre, opération, égal, reset)
Route::post('/calculator', [CalculatorController::class, 'process'])->name('calculator.process');
