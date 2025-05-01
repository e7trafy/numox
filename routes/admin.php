<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {

    $configCache = Artisan::call('config:cache');
    $clearCache = Artisan::call('cache:clear');
    $clearCache = Artisan::call('optimize');
    // return what you want
});

Route::get('/starter', function () {
    return view('dashboard.layouts.master');
});

Route::get('/super-admin-permissions', function () {
    $configCache = Artisan::call('permissions');
});

/****** land page */
Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => ['admin-lang'],
], function () {

    /**** authentications */
    // login
    Route::get('login', 'authController@loginPage')->name('show.login');
    Route::post('login', 'authController@login')->name('login');
    // logout
    Route::post('logout', 'authController@logout')->name('logout');

    Route::group(['middleware' => ['admin']], function () {

        /* ------------ start Of Dashboard---------- */
        Route::get('/', [
            'uses' => 'mainController@homePage',
            'as' => 'dashboard.homePage',
            'title' => 'الرئيسيه',
            'group' => 'home',
            'type' => 'parent',
            'status' => 'admin',
        ]);
        /* ------------ end Of dashboard ---------- */

        /* ------------ start Of pages---------- */
        Route::get('/home-content', [
            'uses' => 'pagesContentController@home',
            'as' => 'pages.home',
            'title' => ' الصفحه الرئيسيه',
            'group' => 'pages',
            'status' => 'admin',
        ]);
        Route::get('/products-content', [
            'uses' => 'pagesContentController@products',
            'as' => 'pages.products',
            'title' => '  المنتجات',
            'group' => 'pages',
            'status' => 'admin',
        ]);
        Route::get('/partners-content', [
            'uses' => 'pagesContentController@partners',
            'as' => 'pages.partners',
            'title' => '  الشركاء',
            'group' => 'pages',
            'status' => 'admin',
        ]);
        Route::get('/aboutUs-content', [
            'uses' => 'pagesContentController@aboutUs',
            'as' => 'pages.aboutUs',
            'title' => '  عن الشركه',
            'group' => 'pages',
            'status' => 'admin',
        ]);
        /* ------------ end Of sectionsContent ---------- */

        /* ------------ start Of sectionsContent---------- */
        Route::get('/sections-content', [
            'uses' => 'sectionsContentController@index',
            'as' => 'sectionsContent.index',
            'title' => 'محتوى القطاعات',
            'group' => 'sectionsContent',
            'type' => 'parent',
            'status' => 'admin',
        ]);
        // sectionsContent edit
        Route::get('sectionsContent/{id}/edit', [
            'uses' => 'sectionsContentController@edit',
            'as' => 'sectionsContent.edit',
            'group' => 'sectionsContent',
            'status' => 'admin',
            'title' => 'صفحه تحديث سيكشن',
        ]);

        // sectionsContent update
        Route::put('sectionsContent/{id}', [
            'uses' => 'sectionsContentController@update',
            'as' => 'sectionsContent.update',
            'group' => 'sectionsContent',
            'status' => 'admin',
            'title' => 'تحديث سيكشن',
        ]);
        /* ------------ end Of sectionsContent ---------- */

        /* ------------ start Of products---------- */
        Route::get('/products', [
            'uses' => 'productController@index',
            'as' => 'products.index',
            'title' => ' المنتجات',
            'group' => 'products',
            'type' => 'parent',
            'status' => 'admin',
        ]);
        // products show
        Route::get('products/{id}/show', [
            'uses' => 'productController@show',
            'as' => 'products.show',
            'group' => 'products',
            'status' => 'admin',
            'title' => 'عرض منتج',
        ]);

        // products create
        Route::get('products/create', [
            'uses' => 'productController@create',
            'as' => 'products.create',
            'group' => 'products',
            'status' => 'admin',
            'title' => ' صفحة اضافة منتج',
        ]);

        // products store
        Route::post('products/store', [
            'uses' => 'productController@store',
            'as' => 'products.store',
            'group' => 'products',
            'status' => 'admin',
            'title' => ' اضافة منتج',
        ]);

        // products update
        Route::get('products/{id}/edit', [
            'uses' => 'productController@edit',
            'as' => 'products.edit',
            'group' => 'products',
            'status' => 'admin',
            'title' => 'صفحه تحديث منتج',
        ]);

        // products update
        Route::put('products/{id}', [
            'uses' => 'productController@update',
            'as' => 'products.update',
            'group' => 'products',
            'status' => 'admin',
            'title' => 'تحديث منتج',
        ]);

        // products delete
        Route::delete('products/{id}', [
            'uses' => 'productController@destroy',
            'as' => 'products.delete',
            'group' => 'products',
            'status' => 'admin',
            'title' => 'حذف منتج',
        ]);
        /* ------------ end Of products ---------- */

        /* ------------ start Of partners ---------- */
        Route::get('partners', [
            'uses' => 'partnerController@index',
            'as' => 'partners.index',
            'title' => 'المشرفين',
            'type' => 'parent',
            'group' => 'partners',
            'status' => 'admin',
        ]);

        // partners show
        Route::get('partners/{id}/show', [
            'uses' => 'partnerController@show',
            'as' => 'partners.show',
            'group' => 'partners',
            'status' => 'admin',
            'title' => 'عرض مشرف',
        ]);

        // partners create
        Route::get('partners/create', [
            'uses' => 'partnerController@create',
            'as' => 'partners.create',
            'group' => 'partners',
            'status' => 'admin',
            'title' => ' صفحة اضافة مشرف',
        ]);

        // partners store
        Route::post('partners/store', [
            'uses' => 'partnerController@store',
            'as' => 'partners.store',
            'group' => 'partners',
            'status' => 'admin',
            'title' => ' اضافة مشرف',
        ]);

        // partners update
        Route::get('partners/{id}/edit', [
            'uses' => 'partnerController@edit',
            'as' => 'partners.edit',
            'group' => 'partners',
            'status' => 'admin',
            'title' => 'صفحه تحديث مشرف',
        ]);

        // partners update
        Route::put('partners/{id}', [
            'uses' => 'partnerController@update',
            'as' => 'partners.update',
            'group' => 'partners',
            'status' => 'admin',
            'title' => 'تحديث مشرف',
        ]);

        // partners delete
        Route::delete('partners/{id}', [
            'uses' => 'partnerController@destroy',
            'as' => 'partners.delete',
            'group' => 'partners',
            'status' => 'admin',
            'title' => 'حذف مشرف',
        ]);
        /* ------------ end Of partners ---------- */

        /* ------------ start Of pricing ---------- */
        Route::get('pricing', [
            'uses' => 'pricingController@index',
            'as' => 'pricing.index',
            'title' => 'المشرفين',
            'type' => 'parent',
            'group' => 'pricing',
            'status' => 'admin',
        ]);

        // pricing show
        Route::get('pricing/{id}/show', [
            'uses' => 'pricingController@show',
            'as' => 'pricing.show',
            'group' => 'pricing',
            'status' => 'admin',
            'title' => 'عرض مشرف',
        ]);

        // pricing create
        Route::get('pricing/create', [
            'uses' => 'pricingController@create',
            'as' => 'pricing.create',
            'group' => 'pricing',
            'status' => 'admin',
            'title' => ' صفحة اضافة مشرف',
        ]);

        // pricing store
        Route::post('pricing/store', [
            'uses' => 'pricingController@store',
            'as' => 'pricing.store',
            'group' => 'pricing',
            'status' => 'admin',
            'title' => ' اضافة مشرف',
        ]);

        // pricing update
        Route::get('pricing/{id}/edit', [
            'uses' => 'pricingController@edit',
            'as' => 'pricing.edit',
            'group' => 'pricing',
            'status' => 'admin',
            'title' => 'صفحه تحديث مشرف',
        ]);

        // pricing update
        Route::put('pricing/{id}', [
            'uses' => 'pricingController@update',
            'as' => 'pricing.update',
            'group' => 'pricing',
            'status' => 'admin',
            'title' => 'تحديث مشرف',
        ]);

        // pricing delete
        Route::delete('pricing/{id}', [
            'uses' => 'pricingController@destroy',
            'as' => 'pricing.delete',
            'group' => 'pricing',
            'status' => 'admin',
            'title' => 'حذف مشرف',
        ]);
        /* ------------ end Of pricing ---------- */

        /* ------------ start Of sources ---------- */
        Route::get('sources', [
            'uses' => 'sourcesController@index',
            'as' => 'sources.index',
            'title' => 'المصادر',
            'type' => 'parent',
            'group' => 'sources',
            'status' => 'admin',
        ]);

        // sources show
        Route::get('sources/{id}/show', [
            'uses' => 'sourcesController@show',
            'as' => 'sources.show',
            'group' => 'sources',
            'status' => 'admin',
            'title' => 'عرض مصدر',
        ]);

        // sources create
        Route::get('sources/create', [
            'uses' => 'sourcesController@create',
            'as' => 'sources.create',
            'group' => 'sources',
            'status' => 'admin',
            'title' => ' صفحة اضافة مصدر',
        ]);

        // sources store
        Route::post('sources/store', [
            'uses' => 'sourcesController@store',
            'as' => 'sources.store',
            'group' => 'sources',
            'status' => 'admin',
            'title' => ' اضافة مصدر',
        ]);

        // sources update
        Route::get('sources/{id}/edit', [
            'uses' => 'sourcesController@edit',
            'as' => 'sources.edit',
            'group' => 'sources',
            'status' => 'admin',
            'title' => 'صفحه تحديث مصدر',
        ]);

        // sources update
        Route::put('sources/{id}', [
            'uses' => 'sourcesController@update',
            'as' => 'sources.update',
            'group' => 'sources',
            'status' => 'admin',
            'title' => 'تحديث مصدر',
        ]);

        // sources delete
        Route::delete('sources/{id}', [
            'uses' => 'sourcesController@destroy',
            'as' => 'sources.delete',
            'group' => 'sources',
            'status' => 'admin',
            'title' => 'حذف مصدر',
        ]);
        /* ------------ end Of sources ---------- */

        /* ------------ start Of contactUs ---------- */
        Route::get('contactUs', [
            'uses' => 'contactUsController@index',
            'as' => 'contactUs.index',
            'title' => 'تواصل معنا',
            'type' => 'parent',
            'group' => 'contactUs',
            'status' => 'admin',
        ]);

        // contactUs show
        Route::get('contactUs/{id}/show', [
            'uses' => 'contactUsController@show',
            'as' => 'contactUs.show',
            'group' => 'contactUs',
            'status' => 'admin',
            'title' => 'عرض مصدر',
        ]);

        // contactUs delete
        Route::delete('contactUs/{id}', [
            'uses' => 'contactUsController@destroy',
            'as' => 'contactUs.delete',
            'group' => 'contactUs',
            'status' => 'admin',
            'title' => 'حذف مصدر',
        ]);
        /* ------------ end Of contactUs ---------- */

    });

});
