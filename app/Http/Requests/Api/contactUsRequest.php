<?php

namespace App\Http\Requests\Api;

use App\Models\Page;
use Illuminate\Http\Request;

class contactUsRequest extends BaseApiRequest
{
    public function __construct(Request $request)
    {
        $request['page_id'] = Page::contactUs;
        $request['name'] = 'contact';
        $request['type'] = 'contact';
    }

    public function authorize()
    {
        return \true;
    }

    public function rules()
    {
        return [
            'page_id' => 'nullable',
            'name' => 'nullable',
            'type' => 'nullable|in:afq,contact',

            'client_name' => 'required',
            'client_email' => 'required|email',
            'client_phone' => 'required',
            'content' => 'required|min:3',

            'city' => 'required_if:type,afq',
        ];
    }
}
