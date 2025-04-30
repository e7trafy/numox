<?php

namespace App\Http\Requests\Admin\pricing;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class pricingRequest extends FormRequest
{
    public function __construct(Request $request)
    {
        $request['page_id'] = Page::pricing;
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
//'', 'description', 'image', 'price', 'period', 'is_available', 'extra_data',
        if ($this->getMethod() === 'PUT') {
            return [
                'name.*' => 'nullable|max:191',
                'description.*' => 'nullable|max:191',
                'price' => 'nullable|numeric',
                'period' => 'nullable|in:yearly,monthly',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
            ];
        } else {
            return [
                'name.*' => 'required|max:191',
                'description.*' => 'required|max:191',
                'price' => 'required|numeric',
                'period' => 'required|in:yearly,monthly',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
            ];

        }
    }
}
