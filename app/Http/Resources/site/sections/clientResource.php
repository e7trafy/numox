<?php

namespace App\Http\Resources\site\sections;

use Illuminate\Http\Resources\Json\JsonResource;

class clientResource extends JsonResource
{
    public function toArray($request)
    {

        return [
            'id' => $this->id,

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

            'image' => $this->image,

        ];
    }
}
