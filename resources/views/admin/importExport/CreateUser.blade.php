@extends('admin.layouts.master')
@section('title','Import Export to Excel and CS')
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
      <form  action="{{ url('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div>
          <label for="usr">รหัสนักศึกษา:</label>
          <input type="text" class="form-control" id="usr">
        </div>
        <div>
          <label for="pwd">ชื่อ:</label>
          <input type="text" class="form-control" id="pwd">
        </div>
        <button class="btn btn-primary">OK</button>
      </form>
    </div>
  </div>
</div>
@endsection
@section('javascript')

@endsection
