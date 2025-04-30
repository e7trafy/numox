<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\pricing\pricingRequest;
use App\Models\Partner;
use App\Models\Pricing;

class pricingController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        $data = ['rows' => Pricing::all()];
        return view('dashboard.pricing.index', $data);
    }

    /***************** store *****************/
    public function store(pricingRequest $request): \Illuminate\Http\JsonResponse
    {
        Pricing::create($request->validated());

        return \response()->json(['url' => route('admin.pricing.index'), 'message' => __('siteTrans.added_successfully')]);
    }

    /***************** create *****************/
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.pricing.create');
    }

    /***************** edit *****************/
    public function edit($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Pricing::find($id)];

        return view('dashboard.pricing.edit', $data);

    }

    /***************** update *****************/
    public function update(pricingRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $pricing = Pricing::find($id);

        $pricing->update($request->validated());

        return \response()->json(['url' => route('admin.pricing.index'), 'message' => __('siteTrans.updated_successfully')]);

    }

    /***************** show *****************/
    public function show($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Pricing::find($id)];

        return view('dashboard.pricing.show', $data);
    }

    /***************** delete *****************/
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $pricing = Pricing::find($id);

        $pricing->delete();
        return response()->json(['id' => $id]);
    }


}
