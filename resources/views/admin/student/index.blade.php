 @extends('admin.layouts.master')
@section('title','จัดการข้อมูลนักศึกษา') 
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>จัดการข้อมูลนักศึกษา</h1>
    </div>
    <div class="panel-body">

      <a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download Excel xls</button></a>
      <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download Excel xlsx</button></a>
      <!-- <a href="{{ url('downloadExcel/csv') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download CSV</button></a> -->
      <!-- <button class="btn btn-success" onclick="location.href='{{ route('create_student') }}'"> <i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มผู้ใช้งาน</button> -->

      <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('create_student') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
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
          <th>term</th> 
          <th>year</th>
          <th>activities</th>
          <th>institution</th>
          <th>campus</th>
          <th>faculty</th>
          <th>major</th>
          <th>student_id</th>
          <th>identification_number</th>
          <th>name_student</th>
          <th>year_study</th>
          <th>class_year</th>
          <th>gpa_past</th>
          <th>gpa</th>
          <th>birthday</th>
          <th>telephone</th>
          <th class="text-center">แก้ไข</th>
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
         <td>{{$students->faculty}}</td>
         <td>{{$students->major}}</td>
         <td>{{$students->student_id}}</td>
         <td>{{$students->identification_number}}</td>
         <td>{{$students->name_student}}</td>
         <td>{{$students->year_study}}</td>
         <td>{{$students->class_year}}</td>
         <td>{{$students->gpa_past}}</td>
         <td>{{$students->gpa}}</td>
         <td>{{$students->birthday}}</td>
         <td>{{$students->telephone}}</td>

         <td style="align-content: center;">
            <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('edit_student',['id'=>$students->id]) }}'"><i class="fa fa-pencil-square-o"></i> แก้ไขข้อมูล</button>
         <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('delete_Student',['id'=>$students->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
         </td>
        </tr>
        @endforeach
      </tbody>
    </table>
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
