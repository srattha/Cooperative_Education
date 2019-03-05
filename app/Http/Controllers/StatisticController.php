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
    public function index(Request $request){
        //Highcharts
       
        $Student = Student::where('class_year',$request->item_id)->orderBy('faculty_id','asc')->get();
        $data = array();
         $min = 0; //2
         $num = 0;
         $sum = 0;
         $min = $Student[0]->faculty_id; // 1 1 1 2 3
         $data[0]['y'] = 0;
        $i = 0;
        if ($Student) { 
            foreach ($Student as $key => $value) {
                if($min == $Student[$key]->faculty_id && $i == 0){ 
                    $i++;
                    $data[$num]['y']++;
                    $Faculty = Faculty::select('id','name')->where('id', $Student[$key]->faculty_id)->first();
                    $data[$num]['name'] = $Faculty->name;
                    $data[$num]['key'] = $Faculty->id;
                    // $data[$num]['y'] = $data[$num]['y']->name;
                // return $data;
                }else if($min < $Student[$key]->faculty_id){
                    $num++;
                    $min = $Student[$key]->faculty_id;
                    $data[$num]['y'] = 1;
                    $Faculty = Faculty::select('id','name')->where('id', $Student[$key]->faculty_id)->first();
                    $data[$num]['name'] = $Faculty->name;
                    $data[$num]['key'] = $Faculty->id;
                    // $data[$num]['y'] = $data[$num]['y']->name;
                    // return $data;
                }
            else{
               $data[$num]['y']++; 
            }
        }
        return $data; 
        }
    }
    public function statistic(Request $request)
    {  
       // $statistic = [];
        $returnar = [];
      $statistic = Student::select('class_year')->get();
      foreach ($statistic as $key => $value) {
         $class_year = $value['class_year'];
         array_push($returnar,$class_year );
      }
      
      
      
    $year = array_unique($returnar);
    
        return view('statistic.statistic',['year' => $year]);
    }
}

   
