<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Faculty;

class BranchController extends Controller
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
            $branch = Branch::get();
            foreach ($branch as $key => $value) {
                $branch[$key]['faculty'] = Faculty::where('id',$value->faculty_id)->get();
            }
            
            return view('admin.branch.index',['branch' => $branch]);
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
         $faculty = Faculty::get();
         return view('admin.branch.create_branch',['faculty' => $faculty]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = new Branch;
        $arr->name = $request->name;
        $arr->faculty_id = $request->faculty_id;
        $arr->save();
        if ($arr) {
           return back()->with('success', 'Insert Record successfully.');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty = Faculty::get();
        $branch = Branch::where('id',$id)->first();
        return view('admin.branch.edit_branch',['branch' => $branch,'faculty' => $faculty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $update_branch = Branch::where('id',$request->branch_id)->first();
       $update_branch->name = $request->name;
       $update_branch->faculty_id = $request->faculty_id;
        $update_branch->save();
        if ($update_branch) {
           return back()->with('success', 'Insert Record successfully.');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $delete_faculty = Branch::where('id',$id)->delete();
        if($delete_faculty){
          return back()->with('success', 'Insert Record successfully.');
        }else{
            return "error message..";
        }
    }


}
