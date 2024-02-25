<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/productos/crear', [ProductoController::class, 'crear'])->name('productos.crear');
Route::get('/productos/{producto}/editar', [ProductoController::class, 'editar'])->name('productos.editar');
