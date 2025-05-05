<?php

namespace App\Http\Requests\Admin\clients;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class clientRequest extends FormRequest
{
    public function __construct(Request $request)
    {
        $request['page_id'] = Page::general;
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if ($this->getMethod() === 'PUT') {
            return [
                'name.*' => 'nullable|max:191',
                'description.*' => 'nullable|max:191',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
            ];
        } else {
            return [
                'name.*' => 'nullable|max:191',
                'description.*' => 'nullable|max:191',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
            ];

        }
    }
}
