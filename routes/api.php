<?php

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

Route::get('usuarios', 'App\Http\Controllers\UsuarioController@index');
Route::get('usuarios/{id}', 'App\Http\Controllers\UsuarioController@show');
Route::post('usuarios', 'App\Http\Controllers\UsuarioController@store');
Route::put('usuarios/{id}', 'App\Http\Controllers\UsuarioController@update');
Route::delete('usuarios/{id}', 'App\Http\Controllers\UsuarioController@delete');
