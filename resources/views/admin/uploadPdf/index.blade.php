@extends('admin.layouts.master')
@section('title','uploadPdf')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>uploadPdf</h1>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" method="POST" action="{{ route('upload_file') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="exampleInputFile">File input</label>
        <input type="file" name="file">
        <p class="help-block">uploadPDF</p>
        <!-- <label for="exampleInputFile">File input</label>.
        <input type="text" name="text"> -->
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
      <br>
       <table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
       <thead>
        <tr>
          <th>#</th>
          <th>name</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th class="text-center">แก้ไขข้อมูล</th>
        </tr>
      </thead>
      <tbody>
        <tr>
           @foreach ($file as $index => $files)
          <td>{{$files->id}}</td>
          <td>{{$files->file_name}}</td>
          <td>{{$files->created_at}}</td>
          <td>{{$files->updated_at}}</td>
          <td style="align-content: center;">
            <button type="button" class="btn btn btn-default btn-xs"><i class="fa fa-cloud-download" aria-hidden="true"></i> <a href="{{ asset('upload/uploadPdf/'.$files->file_name) }}" download>{{$files->file_name}}</a></button>
            <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('Are you sure ?')) window.location.href = ''"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>

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
