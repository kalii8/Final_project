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

//All API routes
Route::get('/style', 'Api\StyleController@index');
Route::get('/attribute', 'Api\AttributeController@index');
Route::get('/attribute/searchattribute', 'Api\AttributeController@searchAttribute');
Route::get('/style/by_color', 'Api\StyleController@search');
Route::get('/style/category', 'Api\StyleController@category');





