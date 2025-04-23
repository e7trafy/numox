<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class sectionsContentController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.contents.index');
    }
}
