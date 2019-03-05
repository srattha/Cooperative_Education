@extends('admin.layouts.master')
@section('title','แก้ไขคณะ')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>แก้ไขคณะ</h1>
    </div>
    <div class="panel-body">
     @if (Session::has('success'))
     <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <p>{{ Session::get('success') }}</p>
    </div>
    @endif

    <form action="{{ url('edit_faculty') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
      @csrf
      <div> 
        <label for="text">คณะ</label>
        <input type="hidden" name="faculty_id" value="{{$faculty->id}}">
        <input type="text" name="name" value="{{$faculty->name}}" class="form-control">
      </div>
      <br>
      <button class="btn btn-primary">OK</button>
    </form>
  </div>
</div>
</div>
@endsection
@section('javascript')

@endsection
