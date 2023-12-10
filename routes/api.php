<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ZapatosController;
use App\Http\Controllers\DetalleVentaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('shoes', ZapatosController::class);

Route::post('/addProduct/{id}',[CarritoController::class,"store"]);
Route::get('/shoppingCar',[CarritoController::class,'index']);
Route::post('/shoppingCar/{id}',[CarritoController::class,'update']);
Route::delete('/shoppingCar/{id}',[CarritoController::class,'destroy']);

Route::resource('detail', DetalleVentaController::class);
