<?php

use Illuminate\Http\Request;

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

Route::post('grammar-question','CreateGrammarQuestion@store');
Route::put('grammar-question/{id}','UpdateGrammarQuestion@update');
Route::get('grammar-question','ListGrammarQuestion@show');
Route::get('grammar-question/list','ListGrammarQuestion@list');
Route::delete('grammar-question/{id}','DeleteGrammarQuestion@destroy');


