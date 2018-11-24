<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
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
         $user = Auth::user();
        $users_type_id = $user->user_type_id;
        switch ($users_type_id) {
            case '1':
            return redirect("/");
            break;
            case '2':
            $user = User::get();
               return view('admin.user.index', ["user" => $user]);
            break;

        }

    }
}
