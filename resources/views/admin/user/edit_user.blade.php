@extends('admin.layouts.master')
@section('title','แก้ไข')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>แก้ไขผู้ใช้งาน</h1>
    </div> 
    <div class="panel-body">
       @if (Session::has('success'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <p>{{ Session::get('success') }}</p>
        </div>
        @endif
      <form action="{{ url('edituser') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div>
          <input type="hidden" name="id"value="{{$edit_user->id}}">
          <label for="text">ชื่อ-นามสกุล</label>
          <input type="text" name="name" class="form-control" value="{{$edit_user->name}}">
        </div>
        <br>

        <div>
         <label>กำหนดระดับผู้ใช้งาน</label>
         <select name="user_type_id"  class="form-control" required>
          <option value="1" {{ $edit_user->user_type_id === 1 ? 'selected' : '' }}>นักศึกษา</option>
          <option value="2" {{ $edit_user->user_type_id === 2 ? 'selected' : '' }}>ผู้ดูแลระบบ</option>
        </select>
      </div>
      <br>
      <div>
        <label for="pwd">รหัสผ่าน</label>
        <input type="password" name="password" class="form-control" id="email">
      </div>

      <br>
      <button  class="btn btn-primary">OK</button>
    </form>

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
