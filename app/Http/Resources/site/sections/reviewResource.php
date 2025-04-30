<?php

namespace App\Http\Resources\site\sections;

use Illuminate\Http\Resources\Json\JsonResource;

class reviewResource extends JsonResource
{
    public function toArray($request)
    {

        return [
            'id' => $this->id,

            'reviewer_name' => $this->reviewer_name,
            'reviewer_description' => $this->reviewer_description,

            'review' => [
                'review' => $this->review,
                'ar' => $this->getTranslation('review', 'ar'),
                'en' => $this->getTranslation('review', 'en'),
            ],

            'image' => $this->image,

        ];
    }
}
