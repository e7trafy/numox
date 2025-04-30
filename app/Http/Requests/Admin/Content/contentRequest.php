<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class contentRequest extends FormRequest
{
    public function __construct(Request $request)
    {
        //
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
                'title.*' => 'nullable|max:191',
                'description.*' => 'nullable|max:191',
                'content.*' => 'nullable|max:191',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
            ];
        } else {
            return [
                'name.*' => 'nullable|max:191',
                'title.*' => 'nullable|max:191',
                'description.*' => 'nullable|max:191',
                'content.*' => 'nullable|max:191',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
            ];

        }
    }
}
