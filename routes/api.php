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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::group(['middleware' => ['jwt.auth']], function (){
    Route::group(['prefix' => 'register_user'], function(){
        Route::get('/', 'RegisterUserController@list');
        Route::get('/filter', 'RegisterUserController@SelectorList');
        Route::get('/{id}', 'RegisterUserController@get');
        Route::post('/', 'RegisterUserController@store');
        Route::put('/{id}', 'RegisterUserController@update');
        Route::delete('/{id}', 'RegisterUserController@destroy');
        
    });
});

Route::group(array('prefix' => 'v1'), function () {
    Route::group(['prefix' => 'select'], function(){
        Route::get('/{file}/selectList', 'SelectController@selectorList');
    });
});
