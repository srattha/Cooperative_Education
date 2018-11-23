<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
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
    public function index()
    {
        //  $user = Auth::user();
        // $users_type_id = $user->user_type_id;
        // switch ($users_type_id) {
        //     case '1':
        //     return redirect("/");
        //     break;
        //     case '2':
        //     return redirect("/importExport");
        //     break;

        // }
        return view('home');
    }
}
