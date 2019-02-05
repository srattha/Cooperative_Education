<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\Student;
use App\File;
use mPDF;
use PDF;
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
public function mpdf_student($id) 
{
    //return $file;
    $Student = Student::where('user_id', $id)->first();
    $faculty = Faculty::where('id', $Student->faculty_id)->first();
    $branch = Branch::where('id', $Student->major)->first();
    
    $company = Company::where('id',$Student->company_id)->first();
   //return $faculty->name;
    //require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'default_font_size' => 16,
    'default_font' => 'sarabun'
]);
$mpdf->SetImportUse();

// Add First page
$mpdf->AddPage();

$pagecount = $mpdf->SetSourceFile('Temple.pdf');
$tplId = $mpdf->ImportPage($pagecount);
$actualsize = $mpdf->UseTemplate($tplId);
$html = "";
// The height of the template as it was printed is returned as $actualsize['h']
// The width of the template as it was printed is returned as $actualsize['w']
// row I Student
//name
$html .= '<p style="width: 270px;/*border: 1px solid black;*/ position: absolute;left: 110px;top: 245px;"><b>'.$Student->name_student.'</b></p>';
//identification_number
$html .= '<p style="width: 260px;/*border: 1px solid black;*/ position: absolute;left: 500px;top: 245px;"><b>'.$Student->identification_number.'</b></p>';
// row II user_id
$html .= '<p style="width: 160px;/*border: 1px solid black;*/ position: absolute;left: 120px;top: 279px;"><b>'.$Student->birthday.'</b></p>';
//institution
$html .= '<p style="width: 404px;/*border: 1px solid black;*/ position: absolute;left: 360px;top: 279px;"><b>'.$Student->institution.'</b></p>';
//row IIII student_id
$html .= '<p style="width: 135px;/*border: 1px solid black;*/ position: absolute;left: 155px;top: 311px;"><b>'.$Student->student_id.'</b></p>';
//campus
$html .= '<p style="width: 170px;/*border: 1px solid black;*/ position: absolute;left: 380px;top: 311px;"><b>'.$Student->campus.'</b></p>';
//term
$html .= '<p style="width: 100px;/*border: 1px solid black;*/ position: absolute;left: 650px;top: 311px;"><b>'.$Student->term.'</b></p>';
// row IIIII faculty
$html .= '<p style="width: 330px;/*border: 1px solid black;*/ position: absolute;left: 80px;top: 344px;"><b>'.$faculty->name.'</b></p>';
//major
$html .= '<p style="width: 300px;/*border: 1px solid black;*/ position: absolute;left: 470px;top: 344px;"><b>'.$branch->name.'</b></p>';
//row IIIIII number
$html .= '<p style="width: 270px;/*border: 1px solid black;*/ position: absolute;left: 150px;top: 378px;"><b>'.$Student->year.'</b></p>';
//activities
$html .= '<p style="width: 270px;/*border: 1px solid black;*/ position: absolute;left: 290px;top: 378px;"><b>'.$Student->activities.'</b></p>';
//year_study
$html .= '<p style="width: 270px;/*border: 1px solid black;*/ position: absolute;left: 490px;top: 378px;"><b>'.$Student->year_study.'</b></p>';
//class_year
$html .= '<p style="width: 270px;/*border: 1px solid black;*/ position: absolute;left: 680px;top: 379px;"><b>'.$Student->class_year.'</b></p>';
//row IIIIIII gpa
$html .= '<p style="width: 270px;/*border: 1px solid black;*/ position: absolute;left: 200px;top: 411px;"><b>'.$Student->gpa.'</b></p>';
//gpa_past
$html .= '<p style="width: 270px;/*border: 1px solid black;*/ position: absolute;left: 450px;top: 411px;"><b>'.$Student->gpa_past.'</b></p>';
//telephone
$html .= '<p style="width: 270px;/*border: 1px solid black;*/ position: absolute;left: 650px;top: 411px;"><b>'.$Student->telephone.'</b></p>';

// row I Company name
$html .= '<p style="width: 650px;/*border: 1px solid black;*/ position: absolute;left: 110px;top: 515px;"><b>'.$company->company_name.'</b></p>';
    //row II industrial_estate
$html .= '<p style="width: 348px;/*border: 1px solid black;*/ position: absolute;left: 160px;top: 550px;"><b>'.$company->industrial_estate.'</b></p>';
// row III home_number
$html .= '<p style="width: 200px;/*border: 1px solid black;*/ position: absolute;left: 580px;top: 550px;"><b>'.$company->home_number.'</b></p>';
//row IIII moo
$html .= '<p style="width: 169px;/*border: 1px solid black;*/ position: absolute;left: 100px;top: 580px;"><b>'.$company->moo.'</b></p>';
// row IIIII building
$html .= '<p style="width: 420px;/*border: 1px solid black;*/ position: absolute;left: 339px;top: 580px;"><b>'.$company->building.'</b></p>';
//row IIIIII soi
$html .= '<p style="width: 310px;/*border: 1px solid black;*/ position: absolute;left: 80px;top: 615px;"><b>'.$company->soi.'</b></p>';
// road
$html .= '<p style="width: 300px;/*border: 1px solid black;*/ position: absolute;left: 460px;top: 615px;"><b>'.$company->road.'</b></p>';
// row IIIIII district
$html .= '<p style="width: 260px;/*border: 1px solid black;*/ position: absolute;left: 140px;top: 650px;"><b>'.$company->district.'</b></p>';
//amphure
$html .= '<p style="width: 300px;/*border: 1px solid black;*/ position: absolute;left: 469px;top: 650px;"><b>'.$company->amphure.'</b></p>';
// IIIIIII province
$html .= '<p style="width: 279px;/*border: 1px solid black;*/ position: absolute;left: 95px;top: 683px;"><b>'.$company->province.'</b></p>';
//post_code
$html .= '<p style="width: 110px;/*border: 1px solid black;*/ position: absolute;left: 472px;top: 683px;"><b>'.$company->post_code.'</b></p>';
//tel
$html .= '<p style="width: 140px;/*border: 1px solid black;*/ position: absolute;left: 640px;top: 683px;"><b>'.$company->tel.'</b></p>';
//row IIIIIIII fax
$html .= '<p style="width: 180px;/*border: 1px solid black;*/ position: absolute;left: 90px;top: 715px;"><b>'.$company->fax.'</b></p>';
//email
$html .= '<p style="width: 450px;/*border: 1px solid black;*/ position: absolute;left: 320px;top: 715px;"><b>'.$company->email.'</b></p>';
//row IIIIIIIII coordinator
$html .= '<p style="width: 344px;/*border: 1px solid black;*/ position: absolute;left: 130px;top: 748px;"><b>'.$company->coordinator.'</b></p>';
//coordinator_number
$html .= '<p style="width: 190px;/*border: 1px solid black;*/ position: absolute;left: 580px;top: 748;"><b>'.$company->coordinator_number.'</b></p>';
$mpdf->WriteHTML ($html);
$mpdf->Output();
    //$mpdf = new \Mpdf\Mpdf();
    //$mpdf->SetImportUse();
    //$mpdf->SetDocTemplate('../../../temple.pdf', true);
//$mpdf->WriteHTML ('<h1>Hello world!</h1>');
//return $mpdf->Output();
    // $data = [
    //     'foo' => 'bar'
    // ]; 
    // $mpdf = new \Mpdf\Mpdf();
    // // return view('data_student.mpdf_student',['mpdf' => $mpdf]);
    // // $config = ['instanceConfigurator' => function($mpdf) {
    // //     $mpdf->SetImportUse();
    // //     $mpdf->SetDocTemplate('../../public/temple.pdf', true);
    // // }];
  // / $pdf = PDF::loadView('mpdf_student',$data , [], $config);
   //  return $pdf->stream('document.pdf');
   // ////  $pdf = new PDF;
        
   //  $mpdf->loadView('data_student.mpdf_student');
    // return $mpdf->stream('mpdf_student.pdf');
}

// public function __construct() 
// {
//     $this->middleware('auth'); 
// }
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
// return $request->all();
    if ($request->hasFile('file')) {
//                 $file = $request->file('file');
// $extension = $file->getClientOriginalExtension(); // you can also use file name
//  $fileName = time().'.'.$extension;
// $path = public_path().'/adminpdf';
// $uplaod = $file->move($path,$fileName);
// $fileModel = new File;
// $fileModel->user_id = $request->user_id;
// $fileModel->name = $fileName;
// $fileModel->save();
}

    $faculty = Faculty::get();
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
        $add_student->user_id = $request->user_id;
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
// $extension = $file->getClientOriginalExtension(); // you can also use file name
//  $fileName = time().'.'.$extension;
$fileName = $file->getClientOriginalName();
$path = public_path().'/adminpdf';
$uplaod = $file->move($path,$fileName);
$fileModel = new File;
$fileModel->user_id = $request->user_id;
$fileModel->name = $fileName;
$fileModel->save();
}

 $branch = Branch::where('id', $add_student->major)->first();
$company = Company::where('id',$request->company_id)->first();
return view('data_student.editdata_student',['data'=>$add_student, 'user'=> $user, 'company'=> $company,'companys'=> $companys,'faculty' => $faculty,'branch'=>$branch]);
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

//add_company
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
// $extension = $file->getClientOriginalExtension(); // you can also use file name
//  $fileName = time().'.'.$extension;
            $fileName = $file->getClientOriginalName();
$path = public_path().'/adminpdf';
$uplaod = $file->move($path,$fileName);
$fileModel = new File;
$fileModel->user_id = $user->id;
$fileModel->name = $fileName;
$fileModel->save();
}
$branch = Branch::where('id', $add_student->major)->first();

return view('data_student.editdata_student',['date'=>$add_student, 'user'=> $user, 'company'=> $add_company,'companys'=> $companys,'faculty' => $faculty,'branch'=>$branch]);

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
//return $request->all()
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
//$extension = $file->getClientOriginalExtensionName();  // you can also use file name
$fileName = $file->getClientOriginalName();
$path = public_path().'/adminpdf';
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
