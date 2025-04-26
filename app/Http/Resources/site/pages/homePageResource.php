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

class homePageResource extends JsonResource
{
    public function toArray($request)
    {

        $contents = Content::where('page_id', Page::home)->orWhereJsonContains('extra_data->pages', Page::home)->get();
        $clients = Client::all();
        $products = Product::where('page_id', Page::home)->orWhereJsonContains('extra_data->pages', Page::home)->get();
        $reviews = Review::all();
        $partners = Partner::get();

        return [
            'id' => $this->id,
            'slug' => $this->slug,

            'contents' => contentResource::collection($contents),

            'clients' => clientResource::collection($clients),

            'products' => productResource::collection($products),

            'reviews' => reviewResource::collection($reviews),

            'partners' => partnerResource::collection($partners),

        ];
    }
}
