<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/equipas', 'App\Http\Controllers\equipasController@index')->name('equipas.index');

Route::get('/equipas/{numero}/show', 'App\Http\Controllers\equipasController@show')->name('equipas.show');

Route::get('/jogador', 'App\Http\Controllers\jogadoresController@index')->name('jogadores.index');


Route::get('/jogador/{numero}/show', 'App\Http\Controllers\jogadoresController@show')->name('jogadores.show');