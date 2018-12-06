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
              <option selected value="">-กรุณาเลือกคณะ-</option>
              <option value="คณะบริหารธุรกิจและศิลปศาสตร์">คณะบริหารธุรกิจและศิลปศาสตร์</option>
              <option value="คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร">คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
              <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์ </option>
              <option value="คณะศิลปกรรมและสถาปัตยกรรมศาสตร์">คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
            </select>
          </div>
        </div>
        <div class="col-sm-3 col-md-3" >
          <div class="input-group input-group-sm">
           <span class="input-group-addon">สาขาวิชา</span>
           <select name="major" class="form-control">
            <option selected value="">-กรุณาเลือกสาขาวิชา-</option>
            <option value="บช.บ. การบัญชี">บช.บ. การบัญชี</option>
            <option value="บธ.บ. การจัดการ">บธ.บ. การจัดการ</option>
            <option value="บธ.บ. การตลาด">บธ.บ. การตลาด</option>
            <option value="บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์">บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์</option>
            <option value="ศศ.บ การท่องเที่ยวและารโรงแรม">ศศ.บ การท่องเที่ยวและารโรงแรม</option>
            <option value="ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล">ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>
            <option value="วท.บ. เทคโนโลยีสารสนเทศ">วท.บ. เทคโนโลยีสารสนเทศ</option>
            <option value="คศ.บ. คหกรรมศาสตร์">คศ.บ. คหกรรมศาสตร์</option>
            <option value="วศ.บ. วิศวกรรมเคื่องกล">วศ.บ. วิศวกรรมเคื่องกล</option>
            <option value="ค.อ.บ. วิศวกรรมเครื่องกล">ค.อ.บ. วิศวกรรมเครื่องกล</option>
            <option value="วศ.บ. วิศวกรรมคอมพิงเตอร์">วศ.บ. วิศวกรรมคอมพิงเตอร์</option>
            <option value="วศ.บ. วิศวกรรมไฟฟ้า">วศ.บ. วิศวกรรมไฟฟ้า</option>
            <option value="วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์">วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์</option>
            <option value="วศ.บ. วิศวกรรมโยธา">วศ.บ. วิศวกรรมโยธา</option>
            <option value="ค.อ.บ วิศวกรรมอุตสาหการ">ค.อ.บ วิศวกรรมอุตสาหการ</option>
            <option value="วศ.บ. วิศวกรรมอุตสาหการ">วศ.บ. วิศวกรรมอุตสาหการ</option>
            <option value="ศบ.บ ออกแบบอุตสาหกรรม">ศบ.บ ออกแบบอุตสาหกรรม</option>
            <option value="ทล.บ. ออกแบบอุตสาหกรรม">ทล.บ. ออกแบบอุตสาหกรรม</option>
          </select>
        </div>
      </div>
      <div class="col-sm-3 col-md-3" >
        <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ปีการศึกษา</span>

         <input type="text" id="datepicker" / name="year" class="form-control"  placeholder="ปีการศึกษา" aria-describedby="sizing-addon1">
       </div>
     </div>
     <div class="col-sm-2 col-md-2">
      <div class="input-group input-group-sm">
       <span class="input-group-addon">ภาคเรียน</span>
       <select name="term" class="form-control">
        <option selected value="">-กรุณาเลือกภาคเรียน-</option>
        <option value="1">1</option>
        <option value="2">2</option>
      </select>
    </div>

  </div>
  <div class="col-sm-1 col-md-1">
    <div class="input-group input-group-sm">
      <button type="submit" class="btn btn-info">
       <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก</button>
     </div>

   </div>
 </form>
</div>
<br>
<br>

<table   class="table table-striped table-bordered table-hover" style="width:100%;">
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
  <td>{{$students->created_at}}</td>
  <td>{{$students->updated_at}}</td>

  <td style="text-align: center;"><button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('view_report',['id'=>$students->id]) }}'"><i class="fa fa-eye" aria-hidden="true"></i> View</button></td>

</tr>
  @endforeach
</tbody>
</table>

{{ $student->links() }}


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
   $("#datepicker").datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
});
  });
</script>
@endsection
