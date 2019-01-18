<?php

namespace App\Http\Controllers;
use App\Student;
use App\Faculty;
use Illuminate\Http\Request;

class StatisticController extends Controller
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

    // public function create() 
    // {
    //     $items = Subject::all(['id', 'name']);
    //     return View::make('your view', compact('items',$items));
    // }
    public function index(Request $request){
        //Highcharts
        $Student = Student::where('class_year',$request->item_id)->orderBy('faculty_id','asc')->get();
        $data = array();
         $min = 0;
         $num = 0;
         $sum = 0;
         $min = $Student[0]->faculty_id;
        $data[0]['name'] = 0;
        $i = 0;
        if ($Student) {
            # code...
            foreach ($Student as $key => $value) {
            if($min == $Student[$key]->faculty_id && $i == 0){
                $i++;
                $data[$num]['name']++;
                $data[$num]['y'] = Faculty::select('name')->where('id', $Student[$key]->faculty_id)->first();
                $data[$num]['y'] = $data[$num]['y']->name;
                // return $data;
            }else if($min < $Student[$key]->faculty_id){ 
                $num++;
                $min = $Student[$key]->faculty_id;
                $data[$num]['name'] = 1;
                $data[$num]['y'] = Faculty::select('name')->where('id', $Student[$key]->faculty_id)->first();
                $data[$num]['y'] = $data[$num]['y']->name;
            }
            else{
               $data[$num]['name']++; 
            }
        }
        return $data; 
        }
    }

    public function statistic(Request $request)
    {  
        
          ///Highcharts
        //  $data = array();
        //  $min = 0;
        //  $num = 0;
        //  $sum = 0;
        //  //$Student = Student::where('class_year',$request->item_id)->get();
        //  $Student = Student::select('faculty_id')->orderBy('faculty_id','asc')->get();
        // $min = $Student[0]->faculty_id;
        // $data[0]['name'] = 0;
        // $i = 0;
        // foreach ($Student as $key => $value) {
        //     if($min == $Student[$key]->faculty_id && $i == 0){
        //         $i++;
        //         $data[$num]['name']++;
        //         $data[$num]['y'] = Faculty::select('name')->where('id', $Student[$key]->faculty_id)->first();
        //         $data[$num]['y'] = $data[$num]['y']->name;
        //         // return $data;
        //     }else if($min < $Student[$key]->faculty_id){ 
        //         $num++;
        //         $min = $Student[$key]->faculty_id;
        //         $data[$num]['name'] = 1;
        //         $data[$num]['y'] = Faculty::select('name')->where('id', $Student[$key]->faculty_id)->first();
        //         $data[$num]['y'] = $data[$num]['y']->name;
        //     }
        //     else{
        //        $data[$num]['name']++; 
        //     }
        // }
        //return $data;
        return view('statistic.statistic');
    }
}

   
