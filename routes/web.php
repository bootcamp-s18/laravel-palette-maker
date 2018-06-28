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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {

	$colors = DB::table('color')->select('id', 'name', 'hex')->orderBy('name')->get();

	$palettes = DB::table('palette')->select('id', 'name')->orderBy('name')->get();

	return view('index', compact('colors', 'palettes'));

});
