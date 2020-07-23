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


Auth::routes();

Route::get('/','JogoController@index' );

Route::middleware('auth')->group(function(){
    Route::prefix('jogo')->group(function(){
        Route::post('salvar','JogoController@salvar');
    });

    Route::prefix('personagem')->group(function(){
        Route::post('salvar','PersonagemController@salvar');
        Route::post('editar','PersonagemController@editar');

    });

});
