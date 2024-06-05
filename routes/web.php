<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProdutoController::class, 'index']);
Route::get('/produtos/{slug}', [ProdutoController::class, 'show']);
Route::get('/categoria/{id}', [CategoriaController::class, 'productsByCategory']);
Route::get('/cart', [CartController::class, 'index']);


