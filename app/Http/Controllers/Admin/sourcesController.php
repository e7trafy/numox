<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\sources\sourceRequest;
use App\Models\Source;

class sourcesController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        $data = ['rows' => Source::all()];
        return view('dashboard.sources.index', $data);
    }

    /***************** store *****************/
    public function store(sourceRequest $request): \Illuminate\Http\JsonResponse
    {
        Source::create($request->validated());

        return \response()->json(['url' => route('admin.sources.index'), 'message' => __('siteTrans.added_successfully')]);
    }

    /***************** create *****************/
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.sources.create');
    }

    /***************** edit *****************/
    public function edit($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Source::find($id)];

        return view('dashboard.sources.edit', $data);

    }

    /***************** update *****************/
    public function update(sourceRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $partner = Source::find($id);

        $partner->update($request->validated());

        return \response()->json(['url' => route('admin.sources.index'), 'message' => __('siteTrans.updated_successfully')]);

    }

    /***************** show *****************/
    public function show($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Source::find($id)];

        return view('dashboard.sources.show', $data);
    }

    /***************** delete *****************/
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $partner = Source::find($id);

        $partner->delete();
        return response()->json(['id' => $id]);
    }


}
