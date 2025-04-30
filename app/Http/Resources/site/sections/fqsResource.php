<?php

namespace App\Http\Resources\site\sections;

use Illuminate\Http\Resources\Json\JsonResource;

class fqsResource extends JsonResource
{
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'page_id' => $this->id,

            'name' => [
                'name' => $this->name,
                'ar' => $this->getTranslation('name', 'ar'),
                'en' => $this->getTranslation('name', 'en'),
            ],

            'description' => [
                'description' => $this->description,
                'ar' => $this->getTranslation('description', 'ar'),
                'en' => $this->getTranslation('description', 'en'),
            ],

            'question' => [
                'question' => $this->question,
                'ar' => $this->getTranslation('question', 'ar'),
                'en' => $this->getTranslation('question', 'en'),
            ],

            'answer' => [
                'answer' => $this->answer,
                'ar' => $this->getTranslation('answer', 'ar'),
                'en' => $this->getTranslation('answer', 'en'),
            ],

            'extra_data' => $this->extra_data,

        ];
    }
}
