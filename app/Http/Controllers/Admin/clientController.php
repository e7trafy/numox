<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\clients\clientRequest;
use App\Models\Client;
use App\Models\Review;

class clientController extends Controller
{
    /***************** index *****************/
    public function index(): \Illuminate\Contracts\View\View
    {
        $data = ['rows' => Client::all()];
        return view('dashboard.clients.index', $data);
    }

    /***************** store *****************/
    public function store(clientRequest $request): \Illuminate\Http\JsonResponse
    {
        Client::create($request->validated());

        return \response()->json(['url' => route('admin.clients.index'), 'message' => __('siteTrans.added_successfully')]);
    }

    /***************** create *****************/
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.clients.create');
    }

    /***************** edit *****************/
    public function edit($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Client::find($id)];

        return view('dashboard.clients.edit', $data);

    }

    /***************** update *****************/
    public function update(clientRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $client = Client::find($id);

        $client->update($request->validated());

        return \response()->json(['url' => route('admin.clients.index'), 'message' => __('siteTrans.updated_successfully')]);

    }

    /***************** show *****************/
    public function show($id): \Illuminate\Contracts\View\View
    {
        $data = ['row' => Client::find($id)];

        return view('dashboard.clients.show', $data);
    }

    /***************** delete *****************/
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $client = Client::find($id);

        $client->delete();
        return response()->json(['id' => $id]);
    }


}
