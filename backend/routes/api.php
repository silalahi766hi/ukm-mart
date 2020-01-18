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
Route::resource('/product', 'ProductController');

Route::get('/login', 'login_adminController@create');
Route::post('/login', 'login_adminController@store');
Route::get('/logout', 'login_adminController@destroy');

Route::get('/login', 'login_pembeliController@create');
Route::post('/login', 'login_pembeliController@store');
Route::get('/logout', 'login_pembeliController@destroy');
//
