<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class pricingController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.pricing.index');
    }
}
