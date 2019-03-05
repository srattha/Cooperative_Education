@extends('admin.layouts.master')
@section('title','จัดการข้อมูลผู้ใช้')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>จัดการข้อมูลผู้ใช้</h1>
    </div>
    <div class="panel-body">

        @if (Session::has('success'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <p>{{ Session::get('success') }}</p>
        </div>
        @endif

        <!-- <input type="file" name="import_file" />
        <br>
        <button class="btn btn-primary"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Import File</button> -->
      </form>
      <br>
      <button class="btn btn-primary" onclick="location.href='{{ route('createuser') }}'"> <i class="fa fa-plus-circle" aria-hidden="true"></i>เพิ่มผู้ใช้งาน</button>
      <br>
      <br>
      <table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
       <thead>
        <tr>
          <th>#</th>
          <th>ชื่อ-นามสกุล</th>
          <th>ประเภทผู้ไช้</th>
          <th>เวลาสร้างข้อมูล</th>
          <th>เวลาแก้ไขข้ัอมูล</th>
          <th class="text-center">แก้ไขข้อมูล</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($user as $index => $users)
          <td>{{$index+1}}</td>
          <td>{{$users->name}}</td>
          <td>
           @if($users->user_type_id == 1)
           <span class="label label-default">นักศึกษา</span>
           @elseif ($users->user_type_id == 2)
           <span class="label label-primary">ผู้ดูแลระบบ</span>
           @elseif ($users->user_type_id == 3)
           <span class="label label-success">พนักงานเคาน์เตอร์</span>
           @else
           <span class="label label-warning">กุ๊ก</span>
           @endif
         </td>
         <td>{{$users->created_at}}</td>
         <td>{{$users->updated_at}}</td>

         <td style="align-content: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('edituser',['id'=>$users->id]) }}'"><i class="fa fa-pencil-square-o"></i> แก้ไขข้อมูล</button>
            <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('deleteuser',['id'=>$users->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
          </div>
        </tr>
         @endforeach
       </tbody>
     </table>
   </div>
 </div>
</div>
<hr> 
<footer id="footer">
  <div class="col-md-12" style="margin-top: 20px">
    <div class="container-fluid">
      <div class="row">           
        <div class="col-sm-6">
          <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
            Deverloped By Patiphan Uthang And Yuwa Saewang
        </div>
      </div>
    </div>
  <div class="col-md-12" style="margin-top: 20px">
</footer>
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
