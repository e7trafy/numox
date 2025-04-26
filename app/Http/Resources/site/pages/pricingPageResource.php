<?php

namespace App\Http\Resources\site\pages;

use App\Http\Resources\site\sections\contentResource;
use App\Http\Resources\site\sections\fqsResource;
use App\Http\Resources\site\sections\partnerResource;
use App\Http\Resources\site\sections\pricingResource;
use App\Http\Resources\site\sections\reviewResource;
use App\Http\Resources\site\sections\systemUnitResource;
use App\Models\Content;
use App\Models\Fqs;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Pricing;
use App\Models\Review;
use App\Models\systemUnit;
use Illuminate\Http\Resources\Json\JsonResource;

class pricingPageResource extends JsonResource
{
    public function toArray($request)
    {

        $contents = Content::where('page_id', Page::pricing)->orWhereJsonContains('extra_data->pages', Page::pricing)->get();

        $pricing = Pricing::get();

        $reviews = Review::get();

        $partners = Partner::get();

        $systemUnits = systemUnit::get();

        $fqs = Fqs::get();

        return [
            'id' => $this->id,
            'slug' => $this->slug,

            'contents' => contentResource::collection($contents),

            'pricing' => pricingResource::collection($pricing),

            'systemUnit' => systemUnitResource::collection($systemUnits),

            'reviews' => reviewResource::collection($reviews),

            'fqs' => fqsResource::collection($fqs),

            'partners' => partnerResource::collection($partners),

        ];
    }
}
