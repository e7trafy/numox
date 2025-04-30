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
        dd(8);
        // Debug the incoming request
        \Log::debug('Request data:', $request->all());

        $row = Content::findOrFail($id);

        // Prepare the data for update
        $data = [
            'name' => [
                'ar' => $request->input('name.ar'),
                'en' => $request->input('name.en')
            ],
            'title' => [
                'ar' => $request->input('title.ar'),
                'en' => $request->input('title.en')
            ],
            'description' => [
                'ar' => $request->input('description.ar'),
                'en' => $request->input('description.en')
            ],
            'content' => [
                'ar' => $request->input('content.ar'),
                'en' => $request->input('content.en')
            ],
            // Add other fields as needed
        ];

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('content_images', 'public');
        }

        $row->update($data);

        return redirect()->back()->with('success', __('siteTrans.updated_successfully'));
    }
}
