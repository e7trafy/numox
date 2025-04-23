<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class productController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.products.index');
    }
}
