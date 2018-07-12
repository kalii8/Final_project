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
//API for homepage
Route::get('/attribute', 'Api\AttributeController@index');
Route::get('/attribute/level', 'Api\AttributeController@Level');

//API for searches and results page
Route::get('/style/searchstyleattribute', 'Api\StyleController@searchStyleAttribute');
Route::get('/style/returnstyleattribute', 'Api\StyleController@returnStyleAttribute');
Route::get('/style', 'Api\StyleController@index');
Route::get('/style/stylewithlevel', 'Api\StyleController@styleWithLevel');
Route::get('/attribute/attributelevel', 'Api\AttributeController@attributeLevel');

Route::get('/style/getOneStyle/{id}', 'Api\StyleController@getOneStyle');

//All Rest API for BEER LIST Page
Route::get('/style/by_color', 'Api\StyleController@searchColor');
Route::get('/style/category', 'Api\StyleController@category');

//API for user profiles
Route::get('/user', 'Api\UserController@index');

//API Get input values from search
Route::post('/search', 'SearchController@store');

//User signup

Route::post('/user', 'Api\UserController@store');











