<?php

namespace App\Http\Controllers;

use App\Item;
use App\Student;
use DB;
use Excel;
use Illuminate\Http\Request;

class MaatwebsiteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importExport()
    {
         $student = Student::orderBy('id','desc')->get();
        return view('admin.importExport.index',['student' => $student]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadExcel($type)
    {
        $data = Student::get()->toArray();

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
                $arr[] = ['identification_number' => $value->identification_number, 'name' => $value->name];
            }

            if(!empty($arr)){
                // Item::insert($arr);
                Student::insert($arr);

            }
        }

        return back()->with('success', 'Insert Record successfully.');
    }
}
