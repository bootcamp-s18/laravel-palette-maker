<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/palettemaker', function() {

	// $colors = DB::table('color')->select('id', 'name', 'hex')->orderBy('name')->get();
	// $palettes = DB::table('palettes')->select('id', 'name')->orderBy('name')->get();

	$colors = \App\Color::orderBy('name', 'asc')->get();
	$palettes = \App\Palette::orderBy('name', 'asc')->get();

	return view('index', compact('colors', 'palettes'));

})->name('maker');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/color/{id}/destroy', function($id) {

	$color = \App\Color::find($id);
	$color->delete();

	return redirect()->route('maker');	

});

Route::post('/palette/{palette_id}/colors/{color_id}/destroy', function($palette_id, $color_id) {

	$palette = \App\Palette::find($palette_id);
	$color = \App\Color::find($color_id);

	$palette->colors()->detach($color);

	return redirect()->route('maker');

});

Route::post('/palette/{id}/destroy', function($id) {

	$palette = \App\Palette::find($id);

	$palette->colors()->detach();
	$palette->delete();

	return redirect()->route('maker');

});

Route::post('/color/create', function(Request $request) {

	$color = new \App\Color;
	$color->name = $request->input('colorName');;
	$color->hex = $request->input('hexCode');;

	$color->save();

	return redirect()->route('maker');

});

Route::post('/palette/create', function(Request $request) {

	$palette = new \App\Palette;
	$palette->name = $request->input('paletteName');

	$palette->save();

	return redirect()->route('maker');

});

Route::get('/palette/{palette_id}/colors/{color_id}/add', function($palette_id, $color_id) {

	$palette = \App\Palette::find($palette_id);
	$color = \App\Color::find($color_id);

	$palette->colors()->attach($color);

	return redirect()->route('maker');

});





