<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/bakery', [PrincipalController::class, 'bakery'])->name('bakery');
Route::get('/sobremesa', [PrincipalController::class, 'sobremesa'])->name('sobremesa');

// Nova rota Sobre Nós
Route::get('/sobre', [PrincipalController::class, 'sobre'])->name('sobre');
