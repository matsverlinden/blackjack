<?php


/**
 * because its an single page application and a vue project thats only using components
 * you want to return the same blade in every instance
 * return app.blade in every instance 
 */

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');
