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

//Route::post('/master/login_pembeli/search',['uses'=>'login_pembeli@search','as'=>'loginpembeli']);  
//Route::get('/master/login_pembeli {uuid}',['uses'=>'login_pembeli@gsearch','as'=>'login_pembeli']);

//Route::post('/master/login_admin/search',['uses'=>'login_admin@search','as'=>'login_admin']);  
//Route::get('/master/login_admin {uuid}',['uses'=>'login_admin@gsearch','as'=>'login_admin']);


//masters-login_pembeli
// Route::resource('/master/login_pembeli', 'login_pembeliController', [
//         'parameters' => ['login_pembeli' => 'uuid'],
//     ]);
//     Route::post('/master/login_pembeli/search', ['uses' => 'login_pembeliController@search', 'as' => 'login_pembeli.search']);
    //Route::post('/master/login_pembeli/filter', ['uses' => 'login_pembeliController@filter', 'as' => 'login_pembeli.filter']);

    //masterlogin_admind
// Route::resource('/master/login_admin', 'login_adminController', [
//         'parameters' => ['login_admin' => 'uuid'],
    //]);
    //Route::post('/master/login_admin/search', ['uses' => 'login_adminController@search', 'as' => 'login_admin.search']);
    //Route::post('/master/login_admin/filter', ['uses' => 'login_adminController@filter', 'as' => 'login_admin.filter']);

Route::resource('/product', 'ProductController');

