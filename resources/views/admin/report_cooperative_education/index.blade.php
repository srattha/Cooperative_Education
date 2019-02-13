@extends('admin.layouts.master')
@section('title','รายงานรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h1>รายงานข้อมูลนักศึกษาและสถานประกอบการ</h1>
      </div>
   </div>
<!-- <input type="button" onclick="tableToExcel('testTable', 'ข้อมูลนักศึกษาและสถานประกอบการ')" value="ดาวน์โหลด Excel"> -->
 <a href="{{ url('downloadcooperative_education/xls') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download Excel xls</button></a>
      <a href="{{ url('downloadcooperative_education/xlsx') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download Excel xlsx</button></a>
      <!-- <a href="{{ url('downloadcooperative_education/csv') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download CSV</button></a> -->
<div class="table-responsive">
  <table id="testTable" class="table table-striped table-bordered table-hover" style="width:100%;">
 <thead>
  <tr>
    <th>รวมทุกสาขา</th>
    <th>ภาคเรียน</th>
    <th>ปีการศึกษา</th>
    <th>กิจกรรม/ฝึกสหกิจ/ฝึกงาน/ฝึกสอน</th>
    <th>ชื่อสถาบันการศึกษา</th>
    <th>วิทยาเขต</th>
    <th>คณะ</th>
    <th>สาขาวิชา</th>
    <th>รหัสประจำตัวนักศึกษา</th>
    <th>เลขประจำตัวบัตรประชาชน</th>
    <th>ชื่อ-สกุล</th>
    <th>ปีที่เข้าศึกษา</th>
    <th>ชั้นปีที่ (ขณะฝึก)</th>
    <th>เกรดเฉลี่ยภาคการศึกษาที่ผ่านมา</th>
    <th>เกรดเฉลี่ยสะสม</th>
    <th>ปี พ.ศ./เดือน/วันเกิด</th>
    <th>ชื่อสถานประกอบการ</th>
    <th>ผู้ประสานงาน</th>
    <th>เบอร์โทรศัพท์ผู้ประสานงาน</th>
    <th>อีเมล</th>
    <th>เลขที่</th>
    <th>หมู่</th>
    <th>นิคมอุตสาหกรรม</th>
    <th>ตึก/อาคาร</th>
    <th>ซอย</th>
    <th>ถนน</th>
    <th>ตำบล/แขวง</th>
    <th>อำเภอ/เขต</th>
    <th>จังหวัด</th>
    <th>รหัส</th>
    <th>โทรศัพท์ </th>
    <th>แฟกซ์</th>
    <!-- <th>แก้ไข</th> -->
   </tr>
</thead>
<tbody>
  <tr>
   @foreach ($student as $index => $students)
   <td>{{$index+1}}</td>
   <td>{{$students->term}}</td>
   <td>{{$students->year}}</td> 
   <td>{{$students->activities}}</td>
   <td>{{$students->institution}}</td>
   <td>{{$students->campus}}</td>
   <td>
    @foreach ($students->faculty as $s)
    {{$s->name}}
    @endforeach
  </td>
  <td>
    @foreach ($students->branch as $s)
    {{$s->name}}
    @endforeach
  </td>
   <td>{{$students->student_id}}</td>
   <td>{{$students->identification_number}}</td>
   <td>{{$students->name_student}}</td>
   <td>{{$students->year_study}}</td>
   <td>{{$students->class_year}}</td>
   <td>{{$students->gpa}}</td>
   <td>{{$students->gpa_past}}</td>
   <td>{{$students->birthday}}</td>
 <!--  company -->
 <td>
    @foreach ($students->company as $c)
    {{$c->company_name}}
    @endforeach
  </td>
 <td>
    @foreach ($students->company as $c)
    {{$c->coordinator}}
    @endforeach
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->coordinator_number}}
    @endforeach
  </td>
   <td>
    @foreach ($students->company as $c)
    {{$c->email}}
    @endforeach
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->home_number}}
    @endforeach
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->moo}}
    @endforeach
  </td>
 <td>
    @foreach ($students->company as $c)
    {{$c->industrial_estate}}
    @endforeach
  </td>
 <td>
    @foreach ($students->company as $c)
    {{$c->building}}
    @endforeach
  </td>
 <td>
    @foreach ($students->company as $c)
    {{$c->soi}}
    @endforeach
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->road}}
    @endforeach
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->district}}
    @endforeach
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->amphure}}
    @endforeach
  </td>
   <td>
    @foreach ($students->company as $c)
    {{$c->province}}
    @endforeach
  </td>
   <td>
    @foreach ($students->company as $c)
    {{$c->post_code}} 
    @endforeach
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->tel}}
    @endforeach 
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->fax}}
    @endforeach
  </td>
  <!-- <td style="text-align: center;"><button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('view_report',['id'=>$students->id]) }}'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></td> -->
  </tr>
  @endforeach
</tbody>
</table>
</div>


{{ $student->links() }}

</dvi>
</dvi>
</dvi>
@endsection
@section('javascript')
<script>
   $(document).ready(function() {
     $('#dataTables-example').DataTable({
       responsive: true
     });
    $("#datepicker").datepicker({
     format: "yyyy",
     viewMode: "years",
     minViewMode: "years"
    });
});
</script>
@endsection