<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class mainController extends Controller
{
    /***************** homePage *****************/
    public function homePage(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.pages.home_page');
    }
}
