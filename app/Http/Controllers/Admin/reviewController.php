<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\reviews\reviewRequest;
use App\Models\Review;

class reviewController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        $data = ['rows' => Review::all()];
        return view('dashboard.reviews.index', $data);
    }

    /***************** store *****************/
    public function store(reviewRequest $request): \Illuminate\Http\JsonResponse
    {
        Review::create($request->validated());

        return \response()->json(['url' => route('admin.reviews.index'), 'message' => __('siteTrans.added_successfully')]);
    }

    /***************** create *****************/
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.reviews.create');
    }

    /***************** edit *****************/
    public function edit($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Review::find($id)];

        return view('dashboard.reviews.edit', $data);

    }

    /***************** update *****************/
    public function update(reviewRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $review = Review::find($id);

        $review->update($request->validated());

        return \response()->json(['url' => route('admin.reviews.index'), 'message' => __('siteTrans.updated_successfully')]);

    }

    /***************** show *****************/
    public function show($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Review::find($id)];

        return view('dashboard.reviews.show', $data);
    }

    /***************** delete *****************/
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $review = Review::find($id);

        $review->delete();
        return response()->json(['id' => $id]);
    }


}
