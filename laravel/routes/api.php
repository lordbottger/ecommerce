<?php

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

Route::get('/usuarios','App\Http\Controllers\ArticuloController@index');//mostrar
Route::post('/usuarios','App\Http\Controllers\ArticuloController@store');//guardar
Route::put('/usuarios{id}','App\Http\Controllers\ArticuloController@update');//actualizar
Route::delete('/usuarios{id}','App\Http\Controllers\ArticuloController@destroy');//eliminar

Route::get('/productos','App\Http\Controllers\ProductoController@index');//mostrar
Route::post('/productos','App\Http\Controllers\ProductoController@store');//guardar
Route::put('/productos{id}','App\Http\Controllers\ProductoController@update');//actualizar
Route::delete('/productos{id}','App\Http\Controllers\ProductoController@destroy');//eliminar

Route::get('/categorias','App\Http\Controllers\ArticuloController@index');//mostrar
Route::post('/categorias','App\Http\Controllers\ArticuloController@store');//guardar
Route::put('/categorias{id}','App\Http\Controllers\ArticuloController@update');//actualizar
Route::delete('/categorias{id}','App\Http\Controllers\ArticuloController@destroy');//eliminar

Route::get('/carritos','App\Http\Controllers\ProductoController@index');//mostrar
Route::post('/carritos','App\Http\Controllers\ProductoController@store');//guardar
Route::put('/carritos{id}','App\Http\Controllers\ProductoController@update');//actualizar
Route::delete('/carritos{id}','App\Http\Controllers\ProductoController@destroy');//eliminar

Route::get('/pedidos','App\Http\Controllers\ProductoController@index');//mostrar
Route::post('/pedidos','App\Http\Controllers\ProductoController@store');//guardar
Route::put('/pedidos{id}','App\Http\Controllers\ProductoController@update');//actualizar
Route::delete('/pedidos{id}','App\Http\Controllers\ProductoController@destroy');//eliminar
