@extends('admin.layouts.master')
@section('title','รายงานรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา')
@section('css')
<style type="text/css">
  .fontstudent{
    color:#4e4e4e; font-weight:600; font-size: 30px;
  }
</style>
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>รายงานรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา</h1>
    </div>
    <div class="panel-body">
      <div class="col-md-6">
        <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;">ส่วนที่ 1 ข้อมูลนักศึกษา</h3>
        <label>ชื่อ-สกุล:</label> <span class="fontstudent">{{$student->name_student}}</span>
        <br>
        <label>เลขบัตรประชาชน:</label> <span class="fontstudent">{{$student->identification_number}}</span>
        <br>
        <label>ว/ด/ป เกิด:</label> <span class="fontstudent">{{$student->birthday}}</span>
        <br>
        <label>ชื่อสถาบัน:</label> <span class="fontstudent">{{$student->institution}}</span>
        <br>
        <label>รหัสนักศึกษา:</label> <span class="fontstudent">{{$student->student_id}}</span>
        <br>
        <label>วิทยาเขต:</label> <span class="fontstudent">{{$student->campus}}</span>
        <br>
        <label>ภาคเรียน:</label> <span class="fontstudent">{{$student->term}}</span>
        <br>
        <label>คณะ:</label> <span class="fontstudent">{{$student->faculty}}</span>
        <br>
        <label>สาขาวิชา:</label> <span class="fontstudent">{{$student->major}}</span>
        <br>
        <label>ปีการศึกษา:</label> <span class="fontstudent">{{$student->year}}</span>
        <br>
        <label>กิจกรรม:</label> <span class="fontstudent">{{$student->activities}}</span>
        <br>
        <label>ปีที่เข้าศึกษา:</label> <span class="fontstudent">{{$student->year_study}}</span>
        <br>
        <label>เกรดเฉลี่ยที่ผ่านมา:</label> <span class="fontstudent">{{$student->gpa}}</span>
        <br>
        <label>เกรดเฉลี่ยสะสม:</label> <span class="fontstudent">{{$student->gpa_past}}</span>
        <br>
        <label>เบอร์โทรศัพท์:</label> <span class="fontstudent">{{$student->telephone}}</span>
      </div>

      <div class="col-md-6">
         <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;">ส่วนที่ 2 ข้อมูลสถานประกอบการ</h3>
         <label>ชื่อบริษัท:</label> <span class="fontstudent">{{$company->company_name}}</span>
        <br>
        <label>นิคมอุตสาหกรรม:</label> <span class="fontstudent">{{$company->industrial_estate}}</span>
        <br>
        <label>ที่อยู่:</label> <span class="fontstudent">{{$company->home_number}}</span>
        <br>
        <label>หมู่:</label> <span class="fontstudent">{{$company->moo}}</span>
        <br>
        <label>ตึก/อาคาร:</label> <span class="fontstudent">{{$company->building}}</span>
        <br>
        <label>ซอย:</label> <span class="fontstudent">{{$company->soi}}</span>
        <br>
        <label>ถนน:</label> <span class="fontstudent">{{$company->road}}</span>
        <br>
        <label>ตำบล/แขวง:</label> <span class="fontstudent">{{$company->district}}</span>
        <br>
        <label>อำเภอ/เขต:</label> <span class="fontstudent">{{$company->amphure}}</span>
        <br>
        <label>จังหวัด:</label> <span class="fontstudent">{{$company->province}}</span>
        <br>
        <label>รหัสไปรษณีย์:</label> <span class="fontstudent">{{$company->post_code}}</span>
        <br>
        <label>โทรศัพท์:</label> <span class="fontstudent">{{$company->tel}}</span>
        <br>
        <label>แฟกซ์:</label> <span class="fontstudent">{{$company->fax}}</span>
        <br>
        <label>อีเมล:</label> <span class="fontstudent">{{$company->email}}</span>
        <br>
        <label>ชื่อผู้ติดต่อ:</label> <span class="fontstudent">{{$company->coordinator}}</span>
        <br>
        <label>เบอร์โทรผู้ติดต่อ:</label> <span class="fontstudent">{{$company->coordinator_number}}</span>
      </div>

    </div>
  </div>
</div>

@endsection
@section('javascript')

@endsection
