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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function statistic()
    {  
        // return view('statistic.statistic');
        $data = array();
        $min = 0;
        $num = 0;
        $sum = 0;
        //return view('statistic.statistic');
        $Student = Student::select('faculty_id')->orderBy('faculty_id','asc')->get();
        $min = $Student[0]->faculty_id;
        $data[0]['name'] = 0;
        $i = 0;
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
        // return $data;
        // return $Student;
       

        return view('statistic.statistic', ['data' => $data]);
    }
}
