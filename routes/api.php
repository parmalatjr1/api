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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ok', function(){

    return ['status' => true];
});

{
        Route::prefix('produto')->group(function(){
//------------------------------------------------------------------------------
        Route::get('/','App\Http\Controllers\ProdutoController@index')->name('produto');
//------------------------------------------------------------------------------
        Route::get('/{id}', 'App\Http\Controllers\ProdutoController@show')->name('mostrar_produto');
//-------------------------------------------------------------------------------
        Route::post('/', 'App\Http\Controllers\ProdutoController@store')->name('salvar_produto');
//-------------------------------------------------------------------------------
        Route::put('/{id}', 'App\Http\Controllers\ProdutoController@update')->name('atualizar_produto');
//-------------------------------------------------------------------------------
        Route::delete('/{id}', 'App\Http\Controllers\ProdutoController@delete')->name('deletar_produto');

    });

};

/*
* <nome da instituição> Unime
* <nome do curso> Sistemas de Informação
* <nome da disciplina> POW2
* <nome do professor> Pablo Roxo
* <nome do(s) aluno(s)> Geraldo A. da Silva Júnior
*/