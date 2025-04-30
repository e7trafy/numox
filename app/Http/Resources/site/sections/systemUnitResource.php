<?php

namespace App\Http\Resources\site\sections;

use Illuminate\Http\Resources\Json\JsonResource;

class systemUnitResource extends JsonResource
{
    public function toArray($request)
    {

        // 'page_id', 'name', 'title', 'description', 'image', 'content', 'is_available', 'extra_data',

        return [
            'id' => $this->id,

            'name' => [
                'name' => $this->name,
                'ar' => $this->getTranslation('name', 'ar'),
                'en' => $this->getTranslation('name', 'en'),
            ],

            'title' => [
                'title' => $this->title,
                'ar' => $this->getTranslation('title', 'ar'),
                'en' => $this->getTranslation('title', 'en'),
            ],

            'description' => [
                'description' => $this->description,
                'ar' => $this->getTranslation('description', 'ar'),
                'en' => $this->getTranslation('description', 'en'),
            ],

            'content' => [
                'content' => $this->content,
                'ar' => $this->getTranslation('content', 'ar'),
                'en' => $this->getTranslation('content', 'en'),
            ],

            'image' => $this->image,

            'extra_data' => $this->extra_data,

        ];
    }
}
