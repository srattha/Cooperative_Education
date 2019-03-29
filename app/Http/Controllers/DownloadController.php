<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        //$this->middleware('auth');
    }

    /** 
     * Show the application dashboard. 
     *
     * @return \Illuminate\Http\Response
     */
    public function Download()
    {
       
        $file = File::orderBy('status_file','asc')->get();
         //return $file;
        return view('download.download', ['file' => $file]);
    }
    
}
