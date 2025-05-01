<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Page;

class pagesContentController extends Controller
{
    /***************** home *****************/
    public function home(): \Illuminate\Contracts\View\View
    {
        $data = [
            'rows' => Content::wherePageId(Page::home)->get(),
        ];
        return view('dashboard.pages.home', $data);
    }

    /***************** products *****************/
    public function products(): \Illuminate\Contracts\View\View
    {
        $data = [
            'rows' => Content::wherePageId(Page::products)->get(),
        ];
        return view('dashboard.pages.home', $data);
    }

    /***************** partners *****************/
    public function partners(): \Illuminate\Contracts\View\View
    {
        $data = [
            'rows' => Content::wherePageId(Page::partners)->get(),
        ];
        return view('dashboard.pages.home', $data);
    }

    /***************** aboutUs *****************/
    public function aboutUs(): \Illuminate\Contracts\View\View
    {
        $data = [
            'rows' => Content::wherePageId(Page::aboutUs)->get(),
        ];
        return view('dashboard.pages.home', $data);
    }

}
