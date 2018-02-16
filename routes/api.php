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

/**
 * Routes of user
 */
Route::post('user', 'UsersController@create');
Route::get('user', 'UsersController@index');
Route::put('user/{id}', 'UsersController@update');
Route::delete('user/{id}', 'UsersController@destroy');

/**
 * Routes of profile
 */
Route::post('profile', 'ProfilesController@create');
Route::get('profile', 'ProfilesController@index');
Route::put('profile/{id}', 'ProfilesController@update');
Route::delete('profile/{id}', 'ProfilesController@destroy');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
