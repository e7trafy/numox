<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\partners\partnerRequest;
use App\Models\Partner;

class partnerController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        $data = ['rows' => Partner::all()];
        return view('dashboard.partners.index', $data);
    }

    /***************** store *****************/
    public function store(partnerRequest $request): \Illuminate\Http\JsonResponse
    {
        Partner::create($request->validated());

        return \response()->json(['url' => route('admin.partners.index'), 'message' => __('siteTrans.added_successfully')]);
    }

    /***************** create *****************/
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.partners.create');
    }

    /***************** edit *****************/
    public function edit($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Partner::find($id)];

        return view('dashboard.partners.edit', $data);

    }

    /***************** update *****************/
    public function update(partnerRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $partner = Partner::find($id);

        $partner->update($request->validated());

        return \response()->json(['url' => route('admin.partners.index'), 'message' => __('siteTrans.updated_successfully')]);

    }

    /***************** show *****************/
    public function show($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Partner::find($id)];

        return view('dashboard.partners.show', $data);
    }

    /***************** delete *****************/
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $partner = Partner::find($id);

        $partner->delete();
        return response()->json(['id' => $id]);
    }


}
