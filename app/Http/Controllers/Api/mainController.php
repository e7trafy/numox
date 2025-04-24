<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\contactUsRequest;
use App\Models\contactUs;

class mainController extends Controller
{
    /************ // homePage // **************/
    public function homePage(): \Illuminate\Http\JsonResponse
    {

        $data = ['text' => 'Home Page'];

        return response()->json(successReturnData($data));
    }

    public function sendContactUs(contactUsRequest $request)
    {
        contactUs::create($request->validated());
        $msg = __('siteTrans.sent_successfully');

        return response()->json(returnSuccessMsg($msg));
    }
}
