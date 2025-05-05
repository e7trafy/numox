<?php

namespace App\Http\Requests\Admin\reviews;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class reviewRequest extends FormRequest
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
                'reviewer_name' => 'nullable|max:191',
                'reviewer_description' => 'nullable|max:191',
                'review.*' => 'nullable|max:500',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
            ];
        } else {
            return [
                'reviewer_name' => 'nullable|max:191',
                'reviewer_description' => 'nullable|max:191',
                'review.*' => 'nullable|max:500',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
            ];

        }
    }
}
