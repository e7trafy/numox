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
        Route::get('/general-content', [
            'uses' => 'pagesContentController@general',
            'as' => 'pages.general',
            'title' => ' الصفحات العامه',
            'group' => 'pages',
            'status' => 'admin',
        ]);
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

        /* ------------ start Of reviews ---------- */
        Route::get('reviews', [
            'uses' => 'reviewController@index',
            'as' => 'reviews.index',
            'title' => 'الاراء',
            'type' => 'parent',
            'group' => 'reviews',
            'status' => 'admin',
        ]);

        // reviews show
        Route::get('reviews/{id}/show', [
            'uses' => 'reviewController@show',
            'as' => 'reviews.show',
            'group' => 'reviews',
            'status' => 'admin',
            'title' => 'عرض اراء',
        ]);

        // reviews create
        Route::get('reviews/create', [
            'uses' => 'reviewController@create',
            'as' => 'reviews.create',
            'group' => 'reviews',
            'status' => 'admin',
            'title' => ' صفحة اضافة اراء',
        ]);

        // reviews store
        Route::post('reviews/store', [
            'uses' => 'reviewController@store',
            'as' => 'reviews.store',
            'group' => 'reviews',
            'status' => 'admin',
            'title' => ' اضافة اراء',
        ]);

        // reviews update
        Route::get('reviews/{id}/edit', [
            'uses' => 'reviewController@edit',
            'as' => 'reviews.edit',
            'group' => 'reviews',
            'status' => 'admin',
            'title' => 'صفحه تحديث اراء',
        ]);

        // reviews update
        Route::put('reviews/{id}', [
            'uses' => 'reviewController@update',
            'as' => 'reviews.update',
            'group' => 'reviews',
            'status' => 'admin',
            'title' => 'تحديث اراء',
        ]);

        // reviews delete
        Route::delete('reviews/{id}', [
            'uses' => 'reviewController@destroy',
            'as' => 'reviews.delete',
            'group' => 'reviews',
            'status' => 'admin',
            'title' => 'حذف اراء',
        ]);
        /* ------------ end Of reviews ---------- */

        /* ------------ start Of clients ---------- */
        Route::get('clients', [
            'uses' => 'clientController@index',
            'as' => 'clients.index',
            'title' => 'العملاء',
            'type' => 'parent',
            'group' => 'clients',
            'status' => 'admin',
        ]);

        // clients show
        Route::get('clients/{id}/show', [
            'uses' => 'clientController@show',
            'as' => 'clients.show',
            'group' => 'clients',
            'status' => 'admin',
            'title' => 'عرض عميل',
        ]);

        // clients create
        Route::get('clients/create', [
            'uses' => 'clientController@create',
            'as' => 'clients.create',
            'group' => 'clients',
            'status' => 'admin',
            'title' => ' صفحة اضافة عميل',
        ]);

        // clients store
        Route::post('clients/store', [
            'uses' => 'clientController@store',
            'as' => 'clients.store',
            'group' => 'clients',
            'status' => 'admin',
            'title' => ' اضافة عميل',
        ]);

        // clients update
        Route::get('clients/{id}/edit', [
            'uses' => 'clientController@edit',
            'as' => 'clients.edit',
            'group' => 'clients',
            'status' => 'admin',
            'title' => 'صفحه تحديث عميل',
        ]);

        // clients update
        Route::put('clients/{id}', [
            'uses' => 'clientController@update',
            'as' => 'clients.update',
            'group' => 'clients',
            'status' => 'admin',
            'title' => 'تحديث عميل',
        ]);

        // clients delete
        Route::delete('clients/{id}', [
            'uses' => 'clientController@destroy',
            'as' => 'clients.delete',
            'group' => 'clients',
            'status' => 'admin',
            'title' => 'حذف عميل',
        ]);
        /* ------------ end Of clients ---------- */

        /*------------ start Of settings ----------*/
        Route::get('settings', [
            'uses' => 'settingController@index',
            'as' => 'settings.index',
            'title' => 'الاعدادات',
            'type' => 'parent',
            'group' => 'settings',
            'status' => 'admin',
        ]);
        // settings update
        Route::post('settings/update', [
            'uses' => 'settingController@update',
            'as' => 'settings.update',
            'group' => 'settings',
            'status' => 'admin',
            'title' => '  تعديل الاعدادات',
        ]);
        /*------------ end Of settings ----------*/

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
