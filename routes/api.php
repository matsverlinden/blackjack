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

// Playercontroller Routes
Route::get('players', 'PlayerController@index');
Route::group(['prefix' => 'player'], function () {
    Route::post('add', 'PlayerController@add');
});

// Gameroom Routes
Route::get('gamerooms','GameroomController@index');
Route::group(['prefix' => 'gameroom'], function () {
    route::post('add', 'GameroomController@add');
    // Route::get('edit/{id}', 'GameroomController@edit');
    // Route::post('update/{id}', 'GameroomController@update');
    // Route::delete('delete/{id}', 'GameroomController@delete');
});
