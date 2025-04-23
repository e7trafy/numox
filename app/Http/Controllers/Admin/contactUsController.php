<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contactUs;

class contactUsController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        $data = ['rows' => contactUs::all()];

        return view('dashboard.contactUs.index', $data);
    }

    /***************** show *****************/
    public function show($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => contactUs::find($id)];

        return view('dashboard.contactUs.show', $data);
    }
}
