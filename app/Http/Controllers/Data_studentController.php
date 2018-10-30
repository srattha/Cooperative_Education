<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data_studentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function data_student()
    {

        //return "ss";

        return view('data_student.data_student');
    }
}
