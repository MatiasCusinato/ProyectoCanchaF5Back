<?php

use App\Http\Controllers\API\TurnoController;
use App\Http\Controllers\API\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ArticuloController;
use App\Http\Controllers\API\CompraArticuloController;
use App\Http\Controllers\API\CobranzaController;
use App\Http\Controllers\API\UsuarioController;
use App\Http\Controllers\API\TurnoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//MIDDLEWARES
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//APIS
Route::apiResource('articulos', ArticuloController::class);
Route::apiResource('compras-articulos', CompraArticuloController::class);
Route::apiResource('cobranzas', CobranzaController::class);
Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('turnos', TurnoController::class);

