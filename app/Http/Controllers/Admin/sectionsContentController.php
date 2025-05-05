<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\contentRequest;
use App\Models\Content;
use App\Models\Feature;

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

    /***************************  update content with features  **************************/
    public function update(contentRequest $request, $id)
    {
        $content = Content::findOrFail($id);

        // Update main content
        $contentData = $request->input('content', []);

        $content->update($contentData);

        // Update features if they exist
        if ($request->has('features')) {
            foreach ($request->input('features') as $featureId => $featureData) {
                $feature = Feature::find($featureId);
                if ($feature) {
                    $feature->update($featureData);
                }
            }
        }

        return response()->json([
            'url' => route('admin.dashboard.homePage'),
            'message' => __('siteTrans.updated_successfully')
        ]);
    }
}
