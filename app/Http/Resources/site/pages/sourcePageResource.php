<?php

namespace App\Http\Resources\site\pages;

use App\Http\Resources\site\sections\contentResource;
use App\Http\Resources\site\sections\partnerResource;
use App\Http\Resources\site\sections\sourceResource;
use App\Models\Client;
use App\Models\Content;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Source;
use Illuminate\Http\Resources\Json\JsonResource;

class sourcePageResource extends JsonResource
{
    public function toArray($request)
    {

        $contents = Content::where('page_id', Page::resources)->orWhereJsonContains('extra_data->pages', Page::resources)->get();

        $sources = Source::all();

        $clients = Client::all();

        $partners = Partner::get();

        return [
            'id' => $this->id,
            'slug' => $this->slug,

            'sources' => sourceResource::collection($sources),

            'contents' => contentResource::collection($contents),

            'clients' => partnerResource::collection($clients),

            'partners' => partnerResource::collection($partners),
            
        ];
    }
}
