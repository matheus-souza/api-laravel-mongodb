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

Route::post('user', 'UsersController@create');
Route::get('user', 'UsersController@index');
Route::put('user/{id}', 'UsersController@update');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
