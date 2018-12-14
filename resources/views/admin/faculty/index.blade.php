@extends('admin.layouts.master')
@section('title','จัดการข้อมูลคณะ')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>จัดการข้อมูลคณะ</h1>
    </div>
    <div class="panel-body">
      <button class="btn btn-success" onclick="location.href='{{ route('create_faculty') }}'"> <i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มคณะ</button> 
      <br>
      <br>
      <table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
       <thead>
        <tr>
          <th>#</th>
          <th>คณะ</th>
          <th>เวลาสร้างข้อมูล</th>
          <th>เวลาแก้ไขข้ัอมูล</th>
          <th class="text-center">แก้ไขข้อมูล</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($faculty as $index => $facultys)
          <td>{{$index+1}}</td>
          <td>{{$facultys->name}}</td>
          <td>{{$facultys->created_at}}</td>
          <td>{{$facultys->updated_at}}</td>
          <td style="align-content: center;">
            <div class="btn-group">
              <button type="button" class="btn btn-info btn-xs" onclick="location.href='{{ route('edit_faculty',['id'=>$facultys->id]) }}'"><i class="fa fa-pencil-square-o"></i> แก้ไขข้อมูล</button>
              <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = '{{ route('delete_faculty',['id'=>$facultys->id]) }}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
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
