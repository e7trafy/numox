<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\products\productRequest;
use App\Models\Product;

class productController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        $data = ['rows' => Product::all()];
        return view('dashboard.products.index', $data);
    }

    /***************** store *****************/
    public function store(productRequest $request): \Illuminate\Http\JsonResponse
    {
        Product::create($request->validated());

        return \response()->json(['url' => route('admin.products.index'), 'message' => __('siteTrans.added_successfully')]);
    }

    /***************** create *****************/
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.products.create');
    }

    /***************** edit *****************/
    public function edit($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Product::find($id)];

        return view('dashboard.products.edit', $data);

    }

    /***************** update *****************/
    public function update(productRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);

        $product->update($request->validated());

        return \response()->json(['url' => route('admin.products.index'), 'message' => __('siteTrans.updated_successfully')]);

    }

    /***************** show *****************/
    public function show($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Product::find($id)];

        return view('dashboard.products.show', $data);
    }

    /***************** delete *****************/
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);

        $product->delete();
        return response()->json(['id' => $id]);
    }


}
