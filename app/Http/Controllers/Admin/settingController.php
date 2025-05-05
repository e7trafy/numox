<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\services\settingService;
use Illuminate\Http\Request;

class settingController extends Controller
{
    /***************************  get all   **************************/
    public function index()
    {

        $row = settingService::settingValues(Setting::pluck('value', 'key'));

        return view('dashboard.settings.index', compact('row'));
    }

    public function update(Request $request)
    {

        foreach (array_filter($request->all()) as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }

        if (\in_array($request['APP_LOGO'], array_filter($request->all()))) {
            $logo = Setting::where('key', 'APP_LOGO')->first();

            $logo->update(['value' => $logo->logo($request['APP_LOGO'])]);
        }

        return \response()->json(['url' => route('admin.settings.index'), 'message' => __('siteTrans.updated_successfully')]);
    }

}
