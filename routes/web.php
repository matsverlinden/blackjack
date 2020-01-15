<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * because its an single page application and a vue project thats only using components
 * you want to return the same blade in every instance
 * return app.blade in every instance 
 * all routes we tend to use are displayed in routes/api.php
 */


Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');
