@extends('admin.layouts.master')
@section('title','รายงานรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>รายงานรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา</h1>
    </div>
    <div class="panel-body">
      <div class="row">
        <form action="{{ route('search_report') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
          @csrf
          <div class="col-sm-3 col-md-3">
            <div class="input-group input-group-sm">
             <span class="input-group-addon">คณะ</span>
             <select  name="faculty" class="form-control">
              <option selected>-กรุณาเลือกคณะ-</option>
              <option>คณะบริหารธุรกิจและศิลปศาสตร์</option>
              <option>คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
              <option>คณะวิศวกรรมศาสตร์ </option>
              <option>คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
            </select>
          </div>
        </div>
        <div class="col-sm-3 col-md-3" >
          <div class="input-group input-group-sm">
           <span class="input-group-addon">สาขาวิชา</span>
           <select name="major" class="form-control">
            <option selected>-กรุณาเลือกสาขาวิชา-</option>
            <option>บช.บ. การบัญชี</option>
            <option>บธ.บ. การจัดการ</option>
            <option>บธ.บ. การตลาด</option>
            <option>บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์</option>
            <option>ศศ.บ การท่องเที่ยวและารโรงแรม</option>
            <option>ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>
            <option>วท.บ. เทคโนโลยีสารสนเทศ</option>
            <option>คศ.บ. คหกรรมศาสตร์</option>
            <option>วศ.บ. วิศวกรรมเคื่องกล</option>
            <option>ค.อ.บ. วิศวกรรมเครื่องกล</option>
            <option>วศ.บ. วิศวกรรมคอมพิงเตอร์</option>
            <option>วศ.บ. วิศวกรรมไฟฟ้า</option>
            <option>วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์</option>
            <option>วศ.บ. วิศวกรรมโยธา</option>
            <option>ค.อ.บ วิศวกรรมอุตสาหการ</option>
            <option>วศ.บ. วิศวกรรมอุตสาหการ</option>
            <option>ศบ.บ ออกแบบอุตสาหกรรม</option>
            <option>ทล.บ. ออกแบบอุตสาหกรรม</option>
          </select>
        </div>
      </div>
      <div class="col-sm-3 col-md-3" >
        <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ปีการศึกษา</span>
         <input type="number" name="year" class="form-control"  placeholder="ปีการศึกษา" aria-describedby="sizing-addon1" required>
       </div>
     </div>
     <div class="col-sm-3 col-md-2">
      <div class="input-group input-group-sm">
       <span class="input-group-addon">ภาคเรียน</span>
       <select name="term" class="form-control">
        <option selected>-กรุณาเลือกภาคเรียน-</option>
        <option>1</option>
        <option>2</option>
      </select>
    </div>

  </div>
  <div class="col-sm-3 col-md-1">
    <div class="input-group input-group-sm">
      <button type="submit" class="btn btn-info">
       <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก</button>
     </div>

   </div>
 </form>
</div>
<br>
<br>
<div class="row">
  <div class="col-sm-3 col-md-3">
    <label>คณะ</label>
  </div>
  <div class="col-sm-3 col-md-3">
    <label>สาขาวิชา</label>
  </div>
  <div class="col-sm-3 col-md-3">
    <label>ปีการศึกษา</label>
  </div>
  <div class="col-sm-3 col-md-3">
    <label>ปีการศึกษา</label>
  </div>

</div>
<table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
 <thead>
  <tr>
    <th>#</th>
    <th>รหัสนักศึกษา</th>
    <th>ชื่อ-นามสกุน</th>
    <th>ชื่อ-สถานประกอบการ</th>
    <th>เวลาสร้างข้อมูล</th>
    <th>เวลาแก้ไขข้ัอมูล</th>
    <th class="text-center">แก้ไขข้อมูล</th>
  </tr>
</thead>
<tbody>
  <tr>
   @foreach ($student as $index => $students)
   <td>{{$index+1}}</td>
   <td>{{$students->student_id}}</td>
   <td>
    @foreach ($students->user as $u)
    {{$u->name}}
    @endforeach
  </td>
  <td>
    @foreach ($students->company as $c)
    {{$c->company_name}}
    @endforeach
  </td>
  <td></td>
  <td></td>

  <td ></td>
  @endforeach

</tr>
</tbody>
</table>



</div>
</div>
</div>
@endsection
@section('javascript')
<script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
</script>
@endsection
