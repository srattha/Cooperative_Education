@extends('admin.layouts.master')
@section('title','แก้ไขสาขา')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>แก้ไขสาขา</h1>
    </div>
    <div class="panel-body">
     @if (Session::has('success'))
     <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <p>{{ Session::get('success') }}</p>
    </div>
    @endif

    <form action="{{ url('edit_branch') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
      @csrf
      <div>
        <label for="text">สาขา</label>
        <input type="hidden" name="branch_id" value="{{$branch->id}}">
        <input type="text" name="name" value="{{$branch->name}}" class="form-control">
      </div>
       <div>
         <label for="text">คณะ</label>
        <select class="form-control" name="faculty_id">
         <option selected>เลือกคณะ</option>
         @foreach ($faculty as $index => $f)
         <option value="{{$f->id}}" {{ $f->id == $branch->faculty_id ? 'selected="selected"' : '' }}>{{$f->name}}</option>
         @endforeach
       </select>
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
