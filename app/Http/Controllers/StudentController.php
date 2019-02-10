<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use Excel;
use App\Faculty;
use App\Branch;
use App\Company;
class StudentController extends Controller
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
    public function index()
    {
         $user = Auth::user();
        $users_type_id = $user->user_type_id;
        switch ($users_type_id) {
            case '1':
            return redirect("/");
            break;
            case '2':
             $student = Student::orderBy('id','desc')->get();
            return view('admin.student.index',['student' => $student]);
            break;
        }
    }
    public function create_student(){
        return view('admin.student.create_student');
    }
    public function add_student(Request $request){


      $request->validate([
            'import_file' => 'required'
        ]);

        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();

        if($data->count()){
            foreach ($data as $key => $value) {
          
              // return $value->major;
               $company = Company::where('company_name',$value->company_id)->first();

                if ($company->company_name) {
                 $companyId = $company->id;
                }else{
                 $companyId = $value->company_id;
                }
                $faculty = Faculty::where('name', $value->faculty_id)->first();
                if ($faculty) {
                 $faculty_id =  $faculty->id;
                }

                 $branch = Branch::where('name', $value->major)->first();
                if ($branch) {
                  $branch_id =  $branch->id;
                }else{
                  $add = new Branch;
                  $add->name = $value->major;
                  $add->faculty_id = $faculty_id;
                  $add->save();
                  if ($add) {
                    $branch_id = $add->id;
                  }
                }

                $arr[] = ['user_id' => $value->user_id, 'company_id' => $companyId, 'faculty_id' =>$faculty_id, 'term' => $value->term, 'year' => $value->year, 'activities' => $value->activities, 'institution' => $value->institution, 'campus' => $value->campus, 'major' => $branch_id, 'student_id' => $value->student_id, 'identification_number' => $value->identification_number,
              'name_student' => $value->name_student, 'year_study' => $value->year_study, 'class_year' => $value->class_year, 'gpa_past' => $value->gpa_past, 'gpa' => $value->gpa, 'telephone' => $value->telephone, 'birthday' => $value->birthday,'is_active' => 1];
            }
     //return $arr;
            if(!empty($arr)){
                // Item::insert($arr);
                Student::insert($arr);
                 return back()->with('success', 'Insert Record successfully.');
 
            }
        }
    }

    public function edit_student($id)
    {

        $student = Student::where('id',$id)->first();
        $company = Company::where('id',$student->company_id)->first();
        $faculty = Faculty::get();
        $branch = Branch::where('id', $student->major)->first();
        return view('admin.student.edit_student',['student' => $student,'company' => $company, 'branch' => $branch, 'faculty' => $faculty]);
    }

    public function update_student(Request $request)
    {
       $update[] = ['term' => $request->term, 'year' => $request->year, 'activities' => $request->activities, 'institution' => $request->institution, 'campus' => $request->campus, 'faculty' => $request->faculty, 'major' => $request->major, 'student_id' => $request->student_id, 'identification_number' => $request->identification_number, 'name_student' => $request->name_student,
              'year_study' => $request->year_study, 'class_year' => $request->class_year, 'gpa_past' => $request->gpa_past, 'gpa' => $request->gpa, 'birthday' => $request->birthday, 'telephone' => $request->telephone, 'is_active' => 1];
        $update_student = Student::where('id',$request->student_ID)->first();
        $add_student->term = $request->term;
        $add_student->year = $request->year;
        $add_student->activities = $request->activities;
        $add_student->institution = $request->institution;
        $add_student->campus = $request->campus;
        $add_student->faculty_id = $request->faculty;
        $add_student->major = $request->major;
        $add_student->student_id = $request->student_id;
        $add_student->identification_number = $request->identification_number;
        $add_student->name_student = $request->name_student;
        $add_student->year_study = $request->year_study;
        $add_student->class_year = $request->class_year;
        $add_student->gpa_past = $request->gpa_past;
        $add_student->gpa = $request->gpa;
        $add_student->birthday = $request->birthday;
        $add_student->telephone = $request->telephone;
        $add_student->save();
        if ($update_student) {
            return back()->with('success', 'Update Record successfully');
        }


    }

    public function destroy($id)
    {
         $delete_user = Student::where('id',$id)->delete();
        if($delete_user){
          return back()->with('success', 'Delete Record successfully.');
        }else{
            return "error message..";
        }
    }
}
