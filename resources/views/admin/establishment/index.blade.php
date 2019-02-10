@extends('admin.layouts.master')
@section('title','จัดการข้อมูลสถานประกอบการ') 
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>จัดการข้อมูลสถานประกอบการ</h1>
    </div>
    <div class="panel-body">

      <a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download Excel xls</button></a>
      <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download Excel xlsx</button></a>
      <a href="{{ url('downloadExcel/csv') }}"><button class="btn btn-success"> <i class="fa fa-download" aria-hidden="true"></i> Download CSV</button></a>
      <button class="btn btn-success" onclick="location.href='{{ route('create_establishment') }}'"> <i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มสถานประกอบ</button>

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
          <th>company_name</th>
          <th>coordinator</th>
          <th>coordinator_number</th>
          <th>email</th>
          <th>home_number</th>
          <th>moo</th>
          <th>industrial_estate</th>
          <th>building</th>
          <th>soi</th>
          <th>road</th>
          <th>district</th>
          <th>amphure</th>
          <th>province</th>
          <th>post_code</th>
          <th>tel</th>
          <th>fix</th>
          <th class="text-center">ลบข้อมูล</th>
        </tr>
      </thead>
      <tbody>
        <tr>
         @foreach ($company as $index => $companys)
         <td>{{$index+1}}</td>
         <td>{{$companys->company_name}}</td>
         <td>{{$companys->coordinator}}</td>
         <td>{{$companys->coordinator_number}}</td>
         <td>{{$companys->email}}</td>
         <td>{{$companys->home_number}}</td>
         <td>{{$companys->moo}}</td>
         <td>{{$companys->industrial_estate}}</td>
         <td>{{$companys->building}}</td>
         <td>{{$companys->soi}}</td>
         <td>{{$companys->road}}</td>
         <td>{{$companys->district}}</td>
         <td>{{$companys->amphure}}</td>
         <td>{{$companys->province}}</td>
         <td>{{$companys->post_code}}</td>
         <td>{{$companys->tel}}</td>
         <td>{{$companys->fax}}</td>

         <td style="align-content: center;">
           <!--  <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('edit_establishment',['id'=>$companys->id]) }}'"><i class="fa fa-pencil-square-o"></i> แก้ไขข้อมูล</button> -->
         <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('delete_establishment',['id'=>$companys->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
         </td>
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
