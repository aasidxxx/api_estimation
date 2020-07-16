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

// API Auth
//
Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');
Route::post('logout', 'Api\AuthController@logout');
Route::get('user', 'Api\AuthController@getAuthUser');

// My controller )))
Route::apiResource('order', 'Api\OrderController');

// routes/api.php
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
