<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Company; 
use App\User;
use App\Faculty;
use App\Branch;
use Excel;
//ini_set('memory_limit', '3000M');
ini_set('max_execution_time', '300000');
class ReportCooperativeEducationController extends Controller
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
        $student = Student::paginate(15);;
        foreach ($student as $key => $value) {
            $student[$key]['user'] = User::where('id',$value->user_id)->get();
            $student[$key]['company'] = Company::where('id',$value->company_id)->get();
            $student[$key]['faculty'] = Faculty::where('id',$value->faculty_id)->get();
            $student[$key]['branch'] = Branch::where('id',$value->major)->get();
            
        }
            //return $student;

        return view('admin.report_cooperative_education.index', ['student'=>$student]);
        break;

    }


}

// public function search_report(Request $request)
// {

//     $faculty = $request->faculty;
//     $major =  $request->major;
//     $year = $request->year;
//     $term = $request->term;
//     $student = Student::where('faculty', 'like', '%' . $faculty . '%')
//     ->Where('major', 'like', '%' . $major . '%')
//     ->Where('year', 'like', '%' . $year . '%')
//     ->Where('term', 'like', '%' . $term . '%')->paginate(15);

//    //return $student = Student::where('faculty', 'LIKE', '%' . $faculty . '%')->paginate(15);
//     foreach ($student as $key => $value) {
//         $student[$key]['user'] = User::where('id',$value->user_id)->get();
//         $student[$key]['company'] = Company::where('id',$value->company_id)->get();
//     }

//     return view('admin.report_cooperative_education.index', ['student'=>$student]); 

// }

public function view_report($id)
{
    $student = Student::where('id',$id)->first();
    $user = User::where('id',$student->user_id)->first();
    $company = Company::where('id',$student->company_id)->first();
    return view('admin.report_cooperative_education.view', ['student'=>$student, 'company'=>$company]);
}

public function downloadExcel($type)
    {
        
         $data = Student::get();
        foreach ($data as $key => $value) {
           $data[$key]['user'] = User::where('id',$value['user_id'])->get();
            $data[$key]['company'] = Company::where('id',$value['company_id'])->get();
            $data[$key]['faculty'] = Faculty::where('id',$value['faculty_id'])->get();
            foreach ($data[$key]['faculty'] as $key1 => $val1) {
            $data[$key]['branch'] = Branch::where('id',$val1->id)->get();
            }
            
        }
          $odata = $data;

        return Excel::create('รายงานข้อมูลนักศึกษาและสถานประกอบการ', function($excel) use ($odata) {
            $excel->sheet('mySheet', function($sheet) use ($odata)
            {
                $sheet->fromArray($odata);
            });
        })->download($type);
    }

public function downloadExcelFile($type)
{

   $student = Student::get()->toArray();
 
        foreach ($student as $key => $value) {
            //return $value;
            //$Student = Student::where('user_id', $value['id'])->first();
            $company = Company::where('id',$value['company_id'])->first();
            $company_name = $company['company_name'];
            $faculty = Faculty::where('id',$value['faculty_id'])->first();
            $faculty->name = $faculty['name'];
            $branch = Branch::where('id',$value['major'])->first();
           /// $branch->id = $branch['name'];
            $head[] = array(
                // 'id' => $value['id']
                'ภาคเรียน' => $value['term'],
                'ปีการศึกษา' => $value['year'],
                'กิจกรรม/ฝึกสหกิจ/ฝึกงาน/ฝึกสอน' => $value['activities'],
                'ชื่อสถาบันการศึกษา' => $value['institution'],
                'วิทยาเขต' => $value['campus'],
                'คณะ' =>$faculty['name'],
                'สาขาวิชา' => $branch['name'],
                'รหัสประจำตัวนักศึกษา' => $value['student_id'],
                'เลขประจำตัวบัตรประชาชน' => $value['identification_number'],
                'ชื่อ-สกุล' => $value['name_student'],
                'ปีที่เข้าศึกษา' => $value['year_study'],
                'ชั้นปีที่ (ขณะฝึก)' => $value['class_year'],
                'เกรดเฉลี่ยภาคการศึกษาที่ผ่านมา' => $value['gpa'],
                'เกรดเฉลี่ยสะสม' => $value['gpa_past'],
                'ปี พ.ศ./เดือน/วันเกิด' => $value['birthday'],
                'เบอร์โทรศัพท์นักศึกษา' =>$value['telephone'],
                'ชื่อสถานประกอบการ' => $company['company_name'],
                'ผู้ประสานงาน' =>$company['coordinator'],
                'เบอร์โทรศัพท์ผู้ประสานงาน' => $company['coordinator_number'],
                'อีเมล  ' => $company['email'],
                'เลขที่' => $company['home_number'],
                'หมู่' => $company['moo'],
                'นิคมอุตสาหกรรม' => $company['industrial_estate'],
                'ตึก/อาคาร' => $company['building'],
                'ซอย' => $company['soi'],
                'ถนน' => $company['road'],
                'ตำบล/แขวง' => $company['district'],
                'อำเภอ/เขต' => $company['amphure'],
                'จังหวัด' => $company['province'],
                'รหัส' => $company['post_code'],
                'โทรศัพท์' => $company['tel'],
                'แฟกซ์' => $company['fax'],
            );
        }
   
    $data = $head;
        return \Excel::create('expertphp_demo', function($excel) use ($data) {
            $excel->sheet('sheet name', function($sheet) use ($data)
            {
             $sheet->fromArray($data);
            });
        })->download($type);
}
}