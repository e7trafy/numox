<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['api-lang'], 'namespace' => 'App\Http\Controllers\Api'], function () {

    Route::get('homePage', 'mainController@homePage');

    Route::get('productsPage', 'mainController@productsPage');

    Route::get('partnersPage', 'mainController@partnersPage');

    Route::get('pricingPage', 'mainController@pricingPage');

    Route::get('sourcePage', 'mainController@sourcePage');

    Route::get('aboutUsPage', 'mainController@aboutUsPage');

    Route::get('settings', 'mainController@settings');

    Route::post('sendContactUs', 'mainController@sendContactUs');

});
