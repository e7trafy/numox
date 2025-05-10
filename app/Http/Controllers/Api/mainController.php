<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\contactUsRequest;
use App\Http\Resources\site\pages\aboutUsPageResource;
use App\Http\Resources\site\pages\homePageResource;
use App\Http\Resources\site\pages\partnersPageResource;
use App\Http\Resources\site\pages\pricingPageResource;
use App\Http\Resources\site\pages\productsPageResource;
use App\Http\Resources\site\pages\sourcePageResource;
use App\Models\contactUs;
use App\Models\Page;
use App\Models\Setting;

class mainController extends Controller
{
    /************ // homePage // **************/
    public function homePage(): \Illuminate\Http\JsonResponse
    {
        $page = Page::whereSlug('home')->first();
        $data = new homePageResource($page);

        return response()->json(successReturnData($data));
    }

    /************ // productsPage // **************/
    public function productsPage(): \Illuminate\Http\JsonResponse
    {
        $page = Page::whereSlug('products')->first();
        $data = new productsPageResource($page);

        return response()->json(successReturnData($data));
    }

    /************ // partnersPage // **************/
    public function partnersPage(): \Illuminate\Http\JsonResponse
    {
        $page = Page::whereSlug('partners')->first();
        $data = new partnersPageResource($page);

        return response()->json(successReturnData($data));
    }

    /************ // pricingPage // **************/
    public function pricingPage(): \Illuminate\Http\JsonResponse
    {
        $page = Page::whereSlug('pricing')->first();
        $data = new pricingPageResource($page);

        return response()->json(successReturnData($data));
    }

    /************ // sourcePage // **************/
    public function sourcePage(): \Illuminate\Http\JsonResponse
    {
        $page = Page::whereSlug('pricing')->first();
        $data = new sourcePageResource($page);

        return response()->json(successReturnData($data));
    }

    /************ // aboutUsPage // **************/
    public function aboutUsPage(): \Illuminate\Http\JsonResponse
    {
        $page = Page::whereSlug('aboutUs')->first();
        $data = new aboutUsPageResource($page);

        return response()->json(successReturnData($data));
    }

    /************ // termsPage // **************/
    public function termsPage(): \Illuminate\Http\JsonResponse
    {
        $terms = Setting::whereIn('key', ['TERMS_' . app()->getLocale()])->first()->value;
        $data = [
            'terms_conditions' => $terms,
        ];
        return response()->json(successReturnData($data));
    }

    /************ // privacyPage // **************/
    public function privacyPage(): \Illuminate\Http\JsonResponse
    {
        $terms = Setting::whereIn('key', ['PRIVACY_POLICY_' . app()->getLocale()])->first()->value;
        $data = [
            'privacy' => $terms,
        ];
        return response()->json(successReturnData($data));
    }

    public function settings(): \Illuminate\Http\JsonResponse
    {
        $data = [
            'FACEBOOK_URL' => SETTING_VALUE('FACEBOOK_URL'),
            'TWITTER_URL' => SETTING_VALUE('TWITTER_URL'),
            'INSTAGRAM_URL' => SETTING_VALUE('INSTAGRAM_URL'),
            'SNAPCHAT_URL' => SETTING_VALUE('SNAPCHAT_URL'),
            'FORMAL_EMAIL' => SETTING_VALUE('FORMAL_EMAIL'),
            'address' => SETTING_VALUE('address'),
        ];

        return response()->json(successReturnData($data));
    }

    public function sendContactUs(contactUsRequest $request)
    {
        contactUs::create($request->validated());
        $msg = __('siteTrans.sent_successfully');

        return response()->json(returnSuccessMsg($msg));
    }
}
