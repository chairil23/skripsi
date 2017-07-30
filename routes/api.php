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

Route::post('auth/register', 'Api\Auth\AuthController@doRegister');
Route::post('auth/login', 'Api\Auth\AuthController@doLogin');

Route::get('users', 'UserController@getUsers');
Route::get('users/profile', 'UserController@getProfile')->middleware('auth:api');

Route::post('post', 'PostController@add')->middleware('auth:api');
Route::put('post/{post}', 'PostController@update')->middleware('auth:api');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
