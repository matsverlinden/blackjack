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

// Player Routes
Route::get('players', 'PlayerController@index');
Route::group(['prefix' => 'player'], function () {
    Route::post('add', 'PlayerController@add');
});

// Gameroom Routes
Route::get('gamerooms','GameroomController@index');
Route::group(['prefix' => 'gameroom'], function () {
    Route::post('createroom', 'GameroomController@create');
    Route::get('show/{gameroom}', 'GameroomController@show');
    
});
