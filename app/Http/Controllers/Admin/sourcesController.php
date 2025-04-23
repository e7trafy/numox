<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class sourcesController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.sources.index');
    }
}
