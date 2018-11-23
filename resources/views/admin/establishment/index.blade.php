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

      <a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download Excel xls</button></a>
      <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download Excel xlsx</button></a>
      <a href="{{ url('downloadExcel/csv') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download CSV</button></a>
      <button class="btn btn-success" onclick="location.href='{{ route('CreateUser') }}'"> <i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มผู้ใช้งาน</button>

      <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if (Session::has('success'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <p>{{ Session::get('success') }}</p>
        </div>
        @endif

        <input type="file" name="import_file" />
        <br>
        <button class="btn btn-primary"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Import File</button>
      </form>
      <br>
      <!-- <button class="btn btn-primary" onclick="location.href='{{ route('CreateUser') }}'">Create User</button> -->
      <br>
      <br>
      <table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
       <thead>
        <tr>
          <th>#</th>
          <th>รหัสนักศึกษา</th>
          <th>ชื่อ-นามสกุน</th>
          <th>ประเภทผู้ไช้</th>
          <th>เวลาสร้างข้อมูล</th>
          <th>เวลาแก้ไขข้ัอมูล</th>
          <th class="text-center">แก้ไขข้อมูล</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
         <td></td>
         <td></td>
         <td style="align-content: center;">
          <div class="btn-group">
            <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('EditUser',['id'=>$students->id]) }}'"><i class="fa fa-pencil-square-o"></i> แก้ไขข้อมูล</button>
            <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('DeleteUser',['id'=>$students->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
          </div>
        </tr>
         @endforeach
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
