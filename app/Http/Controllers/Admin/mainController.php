<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Pricing;
use App\Models\Product;

class mainController extends Controller
{
    /***************** homePage *****************/
    public function homePage(): \Illuminate\Contracts\View\View
    {
        $data = [
            'partnersCount' => Partner::count(),
            'productsCount' => Product::count(),
            'pricingCount' => Pricing::count(),
            'contactsCount' => \App\Models\contactUs::count(),
        ];
        return view('dashboard.pages.home_page', $data);
    }
}
