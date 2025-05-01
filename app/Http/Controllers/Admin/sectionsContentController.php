<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\contentRequest;
use App\Models\Content;

class sectionsContentController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.contents.index');
    }

    /***************** edit *****************/
    public function edit($id): \Illuminate\Contracts\View\View
    {
        $content = Content::findOrFail($id);

        $data = ['row' => $content];

        return view('dashboard.contents.edit', $data);
    }

    /***************************  update   **************************/
    public function update(contentRequest $request, $id)
    {
        $content = Content::find($id);

        $content->update($request->validated());
        return \response()->json(['url' => route('admin.dashboard.homePage'), 'message' => __('siteTrans.updated_successfully')]);
    }
}
