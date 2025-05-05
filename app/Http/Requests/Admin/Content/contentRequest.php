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
        $rules = [
            'content.name.*' => 'nullable|max:191',
            'content.title.*' => 'nullable|max:191',
            'content.description.*' => 'nullable',
            'content.content.*' => 'nullable',
            'content.page_id' => 'nullable|exists:pages,id,deleted_at,NULL',
        ];

        // Image rules
        if ($this->getMethod() === 'PUT') {
            $rules['content.image'] = 'nullable|mimes:jpeg,png,jpg,gif,svg,mp4|max:5400';
        } else {
            $rules['content.image'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        // Feature rules
        if ($this->has('features')) {
            foreach ($this->input('features') as $featureId => $feature) {
                $rules["features.{$featureId}.title.*"] = 'nullable|max:191';
                $rules["features.{$featureId}.description.*"] = 'nullable';
                $rules["features.{$featureId}.content.*"] = 'nullable';

                if ($this->getMethod() === 'PUT') {
                    $rules["features.{$featureId}.image"] = 'nullable|mimes:jpeg,png,jpg,gif,svg,mp4|max:5400';
                } else {
                    $rules["features.{$featureId}.image"] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
                }
            }
        }

        return $rules;
    }
}
