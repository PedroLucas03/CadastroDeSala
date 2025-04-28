<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ReservaController;

Route::get('/salas', [SalaController::class, 'index'])->name('salas.index'); // <<< NOVA ROTA
Route::get('/salas/create', [SalaController::class, 'create'])->name('salas.create');
Route::post('/salas', [SalaController::class, 'store'])->name('salas.store');

Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');
Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas.index');

    
