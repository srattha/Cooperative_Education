<?php

namespace App\Http\Controllers;

use App\Item;
use App\Student;
use DB;
use App\User;
use Excel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaatwebsiteController extends Controller
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
    public function importExport()
    {
        $user = Auth::user();
        $users_type_id = $user->user_type_id;
        switch ($users_type_id) {
            case '1':
            return redirect("/");
            break;
            case '2':
            $student = User::orderBy('id','desc')->get();
            return view('admin.importExport.index',['student' => $student]);
            break;

        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadExcel($type)
    {
        $data = User::get()->toArray();

        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importExcel(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);

        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value) {

                // $arr[] = ['title' => $value->title, 'description' => $value->description];
                $arr[] = ['identification_number' => $value->identification_number, 'name' => $value->name, 'user_type_id' => 1, 'password' => Hash::make($value->identification_number)];
            }

            if(!empty($arr)){
                // Item::insert($arr);
                User::insert($arr);

            }
        }

        return back()->with('success', 'Insert Record successfully.');
    }

    public function CreateUser(Request $request)
    {
        return view('admin.importExport.create_user');
    }

    public function store(Request $request)
    {
        $add_user = new User;
        $add_user->name = $request->name;
        $add_user->identification_number = "0000000000-0";
        $add_user->user_type_id = $request->user_type_id;
        $add_user->password = Hash::make($request->password);
        $add_user->save();
        if ($add_user) {
           return back()->with('success', 'Insert Record successfully.');
       }


   }
}
