<?php

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

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
