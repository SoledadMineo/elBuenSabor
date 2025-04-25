<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticuloManufacturadoController;

Route::post('/articulos-manufacturados', [ArticuloManufacturadoController::class, 'crearArticuloConIngredientes']);
