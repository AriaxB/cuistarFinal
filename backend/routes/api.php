<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\stock_inventarioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\OrdenVentasController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\SalidasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UsuariosController::class)->group(function(){

});
Route::controller(ProveedoresController::class)->group(function(){

});
Route::controller(stock_inventarioController::class)->group(function(){
    Route::get('/inven','get');
    Route::get('/inven/{id}','getOne');
    Route::post('/inven','add');
    Route::put('/inven/{id}','update');
    Route::delete('/inven/{id}','delete');


});
Route::controller(ProductosController::class)->group(function(){
    Route::get('/produc','get');
    Route::get('/produc/{id}','getOne');
    Route::post('/produc','add');
    Route::put('/produc/{id}','update');
    Route::delete('/produc/{id}','delete');

});
Route::controller(OrdenVentasController::class)->group(function(){

});
Route::controller(MascotasController::class)->group(function(){

});

Route::controller(PqrsController::class)->group(function(){

});

Route::controller(SalidasController::class)->group(function(){

});

