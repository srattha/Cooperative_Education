<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
          $user = Auth::user();
        $users_type_id = $user->user_type_id;
        switch ($users_type_id) {
            case '1':
            return redirect("/");
            break;
            case '2':
            $faculty = Faculty::get();
            return view('admin.faculty.index',['faculty' => $faculty]);
            break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faculty.create_faculty');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = new Faculty;
        $arr->name = $request->name;
        $arr->save();
        if ($arr) {
           return back()->with('success', 'Insert Record successfully.');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty = Faculty::where('id',$id)->first();
        return view('admin.faculty.edit_faculty',['faculty' => $faculty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @param  \App\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faculty $faculty)
    {
       $update_faculty = Faculty::where('id',$request->faculty_id)->first();
       $update_faculty->name = $request->name;
        $update_faculty->save();
        if ($update_faculty) {
           return back()->with('success', 'Insert Record successfully.');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delete_faculty = Faculty::where('id',$id)->delete();
        if($delete_faculty){
          return back()->with('success', 'Insert Record successfully.');
        }else{
            return "error message..";
        }
    }
}
