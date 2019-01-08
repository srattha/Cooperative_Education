<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\Student;
use App\File;
use App\Branch;
use Session;
use App\Faculty;
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
    $data = Student::where('user_id',$user->id)->first();

    $companys = Company::get();
    switch ($users_type_id ) {
        case '1':
        if ($data) {

         return $this->edit_data_student();
     }
     $faculty = Faculty::get();
     return view('data_student.data_student', ['user'=> $user, 'companys'=> $companys, 'faculty' => $faculty]);
     break;
     case '2':
     return redirect("/user");
     break;
 }
}
public function add_data_student(Request $request)
{

//return $request->all();
    $companys = Company::get();
    if(isset($request->identification_number)){
        $id = $request->identification_number;
        if (strlen($id)!= 13) {
            Session::flash('error', 'Invalid Id card number.');
            return redirect()->back()->withInput();
        }
        $rev = strrev($id);
        $total = 0;
        for($i=1;$i<13;$i++)
        {
            $mul = $i +1;
            $count = $rev[$i]*$mul;
            $total = $total + $count;
        }
        $mod = $total % 11;
        $sub = 11 - $mod;
        $check_digit = $sub % 10;
        if($rev[0] != $check_digit)
        {
            Session::flash('error', 'Invalid Id card number.');
            return redirect()->back()->withInput();
        }

    }
    $user = Auth::user();

    if ($request->company_id) {
        $add_student = new Student;
        $add_student->user_id = $user->id;
        $add_student->company_id = $request->company_id;
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
// upload file PDF
        if ($add_student) {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
$extension = $file->getClientOriginalExtension(); // you can also use file name
$fileName = time().'.'.$extension;
$path = public_path().'/upload/documentPFD';
$uplaod = $file->move($path,$fileName);
$fileModel = new File;
$fileModel->user_id = $user->id;
$fileModel->name = $fileName;
$fileModel->save();
}
$company = Company::where('id',$request->company_id)->first();
return view('data_student.editdata_student',['date'=>$add_student, 'user'=> $user, 'company'=> $company,'companys'=> $companys ]);
//return redirect()->route('data_student.editdata_student',['date'=>$add_student, 'user'=> $user, 'company'=> $company,'companys'=> $companys ]);

}
}
// data company
$add_company = new Company;
$add_company->company_name = $request->company_name;
$add_company->coordinator = $request->coordinator;
$add_company->coordinator_number = $request->coordinator_number;
$add_company->email = $request->email;
$add_company->home_number = $request->home_number;
$add_company->moo = $request->moo;
$add_company->industrial_estate = $request->industrial_estate;
$add_company->building = $request->building;
$add_company->soi = $request->soi;
$add_company->road = $request->road;
$add_company->district = $request->district;
$add_company->amphure = $request->amphure;
$add_company->province = $request->province;
$add_company->post_code = $request->post_code;
$add_company->tel = $request->tel;
$add_company->fax = $request->fax;
$add_company->save();


$company_id = $add_company->id;
if($add_company){
    $add_student = new Student;
    $add_student->user_id = $user->id;
    $add_student->company_id = $company_id;
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
    if ($add_student) {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
$extension = $file->getClientOriginalExtension(); // you can also use file name
$fileName = time().'.'.$extension;
$path = public_path().'/upload/documentPFD';
$uplaod = $file->move($path,$fileName);
$fileModel = new File;
$fileModel->user_id = $user->id;
$fileModel->name = $fileName;
$fileModel->save();
}

return view('data_student.editdata_student',['date'=>$add_student, 'user'=> $user, 'company'=> $add_company,'companys'=> $companys ]);

}
}


}

public function edit_data_student()
{

    $user = Auth::user();
    $companys = Company::get();
 $data = Student::where('user_id',$user->id)->first();
$branch = Branch::where('id', $data->major)->first();
    $company = Company::where('id',$data->company_id)->first();
    $faculty = Faculty::get();
    return view('data_student.editdata_student', ['user'=> $user, 'companys'=> $companys, 'data'=> $data, 'company'=> $company, 'faculty' => $faculty, 'branch' => $branch]);

}
public function updatedata_student(Request $request){
//return $request->all();
    $user = Auth::user();
    if(isset($request->identification_number)){
        $id = $request->identification_number;
        if (strlen($id)!= 13) {
            Session::flash('error', 'Invalid Id card number.');
            return redirect()->back()->withInput();
        }
        $rev = strrev($id);
        $total = 0;
        for($i=1;$i<13;$i++)
        {
            $mul = $i +1;
            $count = $rev[$i]*$mul;
            $total = $total + $count;
        }
        $mod = $total % 11;
        $sub = 11 - $mod;
        $check_digit = $sub % 10;
        if($rev[0] != $check_digit)
        {
            Session::flash('error', 'Invalid Id card number.');
            return redirect()->back();
        }

    }
    if (!$request->company_id) {
     $company_id = $request->company_ID;
 }else{
    $company_id = $request->company_id;
}

$update_data_student = Student::where('user_id',$request->user_id)->first();
$update_data_student->user_id = $request->user_id;
$update_data_student->company_id = $company_id;
$update_data_student->term = $request->term;
$update_data_student->year = $request->year;
$update_data_student->activities = $request->activities;
$update_data_student->institution = $request->institution;
$update_data_student->campus = $request->campus;
$update_data_student->faculty_id = $request->faculty;
$update_data_student->major = $request->major;
$update_data_student->student_id = $request->student_id;
$update_data_student->identification_number = $request->identification_number;
$update_data_student->name_student = $request->name_student;
$update_data_student->year_study = $request->year_study;
$update_data_student->class_year = $request->class_year;
$update_data_student->gpa_past = $request->gpa_past;
$update_data_student->gpa = $request->gpa;
$update_data_student->birthday = $request->birthday;
$update_data_student->telephone = $request->telephone;
$update_data_student->save();
if ($update_data_student) {
   if ($request->hasFile('file')) {
       $file = $request->file('file');
$extension = $file->getClientOriginalExtension(); // you can also use file name
$fileName = time().'.'.$extension;
$path = public_path().'/upload/documentPFD';
$fileModel = new File;
$fileModel->user_id = $user->id;
$fileModel->name = $fileName;
$fileModel->save();
}
$update_company = Company::where('id',$request->update_company_id)->first();
$update_company->company_name = $request->company_name;
$update_company->coordinator = $request->coordinator;
$update_company->coordinator_number = $request->coordinator_number;
$update_company->email = $request->email;
$update_company->home_number = $request->home_number;
$update_company->moo = $request->moo;
$update_company->industrial_estate = $request->industrial_estate;
$update_company->building = $request->building;
$update_company->soi = $request->soi;
$update_company->road = $request->road;
$update_company->district = $request->district;
$update_company->amphure = $request->amphure;
$update_company->province = $request->province;
$update_company->post_code = $request->post_code;
$update_company->tel = $request->tel;
$update_company->fax = $request->fax;
$update_company->save();
return back();

}

}

}
