<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/contato', [PrincipalController::class, 'contato'])->name('contato.form');
Route::post('/contato', [PrincipalController::class, 'enviarContato'])->name('contato.enviar');