<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\fqs\fqsRequest;
use App\Models\Fqs;
use App\Models\Review;

class fqsController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        $data = ['rows' => Fqs::all()];
        return view('dashboard.fqs.index', $data);
    }

    /***************** store *****************/
    public function store(fqsRequest $request): \Illuminate\Http\JsonResponse
    {
        Fqs::create($request->validated());

        return \response()->json(['url' => route('admin.fqs.index'), 'message' => __('siteTrans.added_successfully')]);
    }

    /***************** create *****************/
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.fqs.create');
    }

    /***************** edit *****************/
    public function edit($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Fqs::find($id)];

        return view('dashboard.fqs.edit', $data);

    }

    /***************** update *****************/
    public function update(fqsRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $fqs = Fqs::find($id);

        $fqs->update($request->validated());

        return \response()->json(['url' => route('admin.fqs.index'), 'message' => __('siteTrans.updated_successfully')]);

    }

    /***************** show *****************/
    public function show($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Fqs::find($id)];

        return view('dashboard.fqs.show', $data);
    }

    /***************** delete *****************/
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $fqs = Fqs::find($id);

        $fqs->delete();
        return response()->json(['id' => $id]);
    }


}
