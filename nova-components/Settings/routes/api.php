<?php

use Illuminate\Http\Request;
use Iboldurev\Settings\Setting;
use Illuminate\Support\Facades\Route;
use Iboldurev\Settings\Http\Requests\CreateRequest;
use Iboldurev\Settings\Http\Requests\UpdateRequest;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('/all', function (Request $request) {
    return Setting::all();
});

Route::get('/{setting}', function (Setting $setting) {
    return $setting;
});

Route::post('/create', function (CreateRequest $request) {
    $setting = new Setting;

    $setting->fill([
        'key' => $request->get('key'),
        'value' => $request->get('value')
    ]);

    $setting->saveOrFail();

    return response()->json([], $setting ? 200: 402);
});

Route::patch('/{setting}', function (UpdateRequest $request, Setting $setting) {
    $setting->update([
        'key' => $request->get('key'),
        'value' => $request->get('value'),
    ]);

    return response()->json([], $setting ? 200: 402);
});

Route::delete('/{setting}', function (Setting $setting) {
    return response()->json([], $setting->delete() ? 200: 201);
});
