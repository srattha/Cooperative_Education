<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\Student;
use App\File;
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
$company = Company::get();
switch ($users_type_id) {
case '1':
return view('data_student.data_student', ['user'=> $user, 'company' => $company, 'data' => $data]);
break;
case '2':
return redirect("/user");
break;
}
}
public function add_data_student(Request $request)
{
    //data student
//return $request->all();
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
$add_student->faculty = $request->faculty;
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
 return redirect()->route('data_student.data_student',['date'=>$add_student, 'user'=> $user,]);

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
$add_student->faculty = $request->faculty;
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
return "[ันทึกสำเร็จ";
}

}
}
}