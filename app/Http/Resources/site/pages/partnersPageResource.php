<?php

namespace App\Http\Resources\site\pages;

use App\Http\Resources\site\sections\clientResource;
use App\Http\Resources\site\sections\contentResource;
use App\Http\Resources\site\sections\partnerResource;
use App\Http\Resources\site\sections\productResource;
use App\Http\Resources\site\sections\reviewResource;
use App\Models\Client;
use App\Models\Content;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Resources\Json\JsonResource;

class partnersPageResource extends JsonResource
{
    public function toArray($request)
    {

        $contents = Content::where('page_id', Page::partners)->orWhereJsonContains('extra_data->pages', Page::partners)->get();

        $partners = Partner::get();

        return [
            'id' => $this->id,
            'slug' => $this->slug,

            'contents' => contentResource::collection($contents),

            'partners' => partnerResource::collection($partners),

        ];
    }
}
