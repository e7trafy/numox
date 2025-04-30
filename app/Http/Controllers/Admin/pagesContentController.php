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

}
