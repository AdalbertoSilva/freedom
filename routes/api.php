<?php
use App\Technique;
use App\Character;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('techniques', function () {
    return Technique::with('techniqueEffect', 'skill')->all();
});

Route::get('techniques/{id}', function ($id) {
    return Technique::with('skill')->find($id);
});

Route::post('techniques', function (Request $request) {
    return Technique::create($request->all());
});

Route::put('techniques/{id}', function (Request $request, $id) {
    $technique = Technique::findOrFail($id);
    $technique->update($request->all());

    return $technique;
});

Route::delete('techniques/{id}', function($id) {
    Technique::find($id)->delete();

    return 204;
});

Route::get('characters', function () {
    return Character::all();
});

Route::get('characters/{id}', function ($id) {
    return Character::all()->find($id);
});

Route::post('characters', function (Request $request) {
    return Character::create($request->all());
});

Route::put('characters/{id}', function (Request $request, $id) {
    $character = Character::findOrFail($id);
    $character->update($request->all());

    return $character;
});

Route::delete('characters/{id}', function($id) {
    Character::find($id)->delete();

    return 204;
});