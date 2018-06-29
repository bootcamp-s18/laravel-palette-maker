<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = \DB::table('color')->select('id', 'name', 'hex')->orderBy('name')->get();
        $palettes = \DB::table('palette')->select('id', 'name')->orderBy('name')->get();
        return view('home', compact('colors', 'palettes'));
    }
}
