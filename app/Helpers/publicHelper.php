<?php

function dashboardPath(): string
{
    return url('/dashboard_assets');
}

function SETTING_VALUE($key = false)
{
    return \App\Models\Setting::where('key', $key)->first()->value;
}
