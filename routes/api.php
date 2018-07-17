<?php
use App\Technique;
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
    return Technique::all();
});

Route::get('techniques/{id}', function ($id) {
    return Technique::find($id);
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
//
//Route::get('techniques', 'TechniqueController@index');
//Route::get('techniques/{technique}', 'TechniqueController@show');
//Route::post('techniques', 'TechniqueController@store');
//Route::put('techniques/{technique}', 'TechniqueController@update');
//Route::delete('techniques/{technique}', 'TechniqueController@delete');