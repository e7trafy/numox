<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.dashboard.homePage');
});

Route::get('/scend-page', function () {
    return view('site.scend_home');
});

Route::get('/products', function () {
    return view('site.products');
});

Route::get('/partners', function () {
    return view('site.partners');
});

Route::get('/pricing', function () {
    return view('site.pricing');
});

Route::get('/sources', function () {
    return view('site.sources');
});

Route::get('whoWeAre', function () {
    return view('site.who_we_are');
});

Route::get('contactUs', function () {
    return view('site.contact_us');
});
