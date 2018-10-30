<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Search_dataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Search_data()
    {
        return view('Search_data.Search_data');
    }
}
