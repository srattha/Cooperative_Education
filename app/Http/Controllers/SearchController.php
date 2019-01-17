<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Student;
use App\Company;
use App\User;
use App\file;
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

    public function index(){
         $faculty = Faculty::get();
         return $faculty;
        return view('search.search',['faculty' => $faculty]);
    }


    public function down($name){
        return response()->download('adminpdf/'.$name, $name, [], 'inline');
        return $name;
    }

    public function search(Request $request)  
    {  

     $faculty = Faculty::get();      
     $student = Student::where('faculty_id', 'like', '%' . $request->faculty . '%')
    ->Where('major', 'like', '%' . $request->major . '%')
    ->Where('year', 'like', '%' . $request->year . '%')
    ->paginate(15);
     //return $student;
    foreach ($student as $key => $value) {
        $student[$key]['user'] = User::where('id',$value->user_id)->get();
        $student[$key]['file'] = File::where('user_id',$value->user_id)->get();
        $student[$key]['company'] = Company::where('id',$value->company_id)->get();
    }
    //$student = json_encode($student);
    // return $student[0]['company'][0]->company_name; 
    //return $student;
    return view('search.search',['faculty' => $faculty,'student' => $student]);
         
    } 
}
