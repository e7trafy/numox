<?php

namespace App\Http\Resources\site\sections;

use Illuminate\Http\Resources\Json\JsonResource;

class featureResource extends JsonResource
{
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'resourceable_id' => $this->resourceable_id,
            'resourceable_type' => $this->resourceable_type,

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

        ];
    }
}
