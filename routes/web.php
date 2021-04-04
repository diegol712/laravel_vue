<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('contenido');
});

Route::get('/categoria', [CategoriaController::class, 'index']);
Route::post('/categoria/registrar', [CategoriaController::class, 'store']);
Route::put('/categoria/actualizar', [CategoriaController::class, 'update']);
Route::put('/categoria/desactivar', [CategoriaController::class, 'desactivar']);
Route::put('/categoria/activar', [CategoriaController::class, 'activar']);
Route::get('/categoria/selectCategoria', [CategoriaController::class, 'selectCategoria']);

Route::get('/articulo', [ArticuloController::class, 'index']);
Route::post('/articulo/registrar', [ArticuloController::class, 'store']);
Route::put('/articulo/actualizar', [ArticuloController::class, 'update']);
Route::put('/articulo/desactivar', [ArticuloController::class, 'desactivar']);
Route::put('/articulo/activar', [ArticuloController::class, 'activar']);