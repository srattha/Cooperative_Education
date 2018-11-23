@extends('admin.layouts.master')
@section('title','CreateUser')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>CreateUser</h1>
    </div>
    <div class="panel-body">
       @if (Session::has('success'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <p>{{ Session::get('success') }}</p>
        </div>
        @endif
      <form action="{{ url('CreateUser') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div>
          <label for="text">ชื่อ-นามสกุน</label>
          <input type="text" name="name" class="form-control" id="pwd">
        </div>
        <br>

        <div>
         <label>กำหนดระดับผู้ใช้งาน</label>
         <select name="user_type_id"  class="form-control" required>
          <option value="1">นักศึกษา</option>
          <option value="2">ผู้ดูแลระบบ</option>
        </select>
      </div>
      <br>
      <div>
        <label for="pwd">รหัสผ่าน</label>
        <input type="password" name="password" class="form-control" id="email">
      </div>

      <br>
      <button class="btn btn-primary">OK</button>
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
