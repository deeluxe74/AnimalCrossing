<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'PoissonController@index');

Route::get('/insectes', 'InsecteController@index');
Route::get('/fossiles', 'FossileController@index');
Route::get('/autres', 'AutresController@index');

Route::post('/post', 'PoissonController@post');