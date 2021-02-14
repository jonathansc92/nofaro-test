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

Route::namespace('API')->name('api.')->group(function(){

    Route::prefix('pets')->group(function(){
        Route::get('/', 'PetsController@index');
        Route::get('/{id}', 'PetsController@show');
        Route::post('/', 'PetsController@store');
        Route::put('/{id}', 'PetsController@update');
        Route::delete('/{id}', 'PetsController@delete');
    });

    Route::prefix('atendimentos')->group(function(){
        Route::get('/', 'AtendimentosController@index');
        Route::get('/{id}', 'AtendimentosController@show');
        Route::post('/', 'AtendimentosController@store');
        Route::put('/{id}', 'AtendimentosController@update');
        Route::delete('/{id}', 'AtendimentosController@delete');
    });

});
