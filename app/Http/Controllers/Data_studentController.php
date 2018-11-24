<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\Student;
class Data_studentController extends Controller
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
    public function data_student()
    {


        $user = Auth::user();
        $users_type_id = $user->user_type_id;
        $company = Company::get();
        switch ($users_type_id) {
            case '1':
                return view('data_student.data_student', ['user'=> $user, 'company' => $company]);
            break;
            case '2':
                return redirect("/user");
            break;

        }


    }

    public function add_data_student(Request $request)
    {
        return $request->all();
    }
}
