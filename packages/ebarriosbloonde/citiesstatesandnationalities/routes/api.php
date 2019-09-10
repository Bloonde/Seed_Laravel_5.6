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

Route::group(array('prefix' => 'api'), function () {
    Route::group(array('prefix' => 'v1'), function () {
        Route::group(['prefix' => 'city'], function(){
            Route::get('/filter', 'CityController@selectorList');
        });
        Route::group(['prefix' => 'state'], function(){
            Route::get('/filter', 'StateController@selectorList');
        });
        Route::group(['prefix' => 'country'], function(){
            Route::get('/filter', 'CountryController@selectorList');
        });
        Route::group(['middleware' => ['jwt.auth']], function () {
            Route::group(['prefix' => 'city'], function(){
                Route::get('/{id}', 'CityController@get');
                Route::get('/', 'CityController@list');
                Route::post('/', 'CityController@store')
                    ->middleware('checkPrivilege:city_store');
                Route::put('/{id}', 'CityController@update')
                    ->middleware('checkPrivilege:city_update');
                Route::delete('/{id}', 'CityController@delete')
                    ->middleware('checkPrivilege:city_delete');
            });
            Route::group(['prefix' => 'state'], function(){
                Route::get('/{id}', 'StateController@get');
                Route::get('/', 'StateController@list');
                Route::post('/', 'StateController@store')
                    ->middleware('checkPrivilege:state_store');
                Route::put('/{id}', 'StateController@update')
                    ->middleware('checkPrivilege:state_update');
                Route::delete('/{id}', 'StateController@delete')
                    ->middleware('checkPrivilege:state_delete');
            });
            Route::group(['prefix' => 'country'], function(){
                Route::get('/{id}', 'CountryController@get');
                Route::get('/', 'CountryController@list');
                Route::post('/', 'CountryController@store')
                    ->middleware('checkPrivilege:country_store');
                Route::put('/{id}', 'CountryController@update')
                    ->middleware('checkPrivilege:country_update');
                Route::delete('/{id}', 'CountryController@delete')
                    ->middleware('checkPrivilege:country_delete');
            });
        });
    });
});