<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
class SearchController extends Controller
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
    public function search()
    {
        //return '555'
         $faculty = Faculty::get();
        return view('search.search',['faculty' => $faculty]);
    }

    public function index(){
        return "dd"; 
    }
}
