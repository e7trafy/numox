<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['api-lang'], 'namespace' => 'App\Http\Controllers\Api'], function () {

    Route::get('homePage', 'mainController@homePage');

    Route::post('sendContactUs', 'mainController@sendContactUs');
});
