@extends('admin.layouts.master')
@section('title','จัดการเอกสารไฟล์ PDF')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>จัดการเอกสารไฟล์ PDF</h1>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" method="POST" action="{{ route('upload_file') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="exampleInputFile">File input</label>
        <input type="file" name="file">
        <p class="help-block">uploadPDF</p>
        <!-- <label for="exampleInputFile">File input</label>.
        <input type="text" name="text"> -->
        <div class="col-sm-4" >
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon1">สเตตัสไฟล์</span>
            <select id="inputState" name="status"  class="form-control">
            <option selected>-กรุณาเลือก-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <!-- <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option> -->
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-info">บันทึก</button>
      </form>
      <br>
       <table  id="dataTables-example" class="table table-striped table-bordered table-hover" style="width:100%;">
       <thead>
        <tr>
          <th>#</th>
          <th>Uplaod</th>
          <th>FileName</th>
          <th>Created_at</th>
          <th>Updated_at</th>
          <th class="text-center">แก้ไขข้อมูล</th>
        </tr>
      </thead>
      <tbody>
        <tr>
           @foreach ($file as $index => $files)
          <td>{{$files->id}}</td>
          <td>{{$files->name}}</td>
          <td>{{$files->name}}</td>
          <td>{{$files->created_at}}</td>
          <td>{{$files->updated_at}}</td>
          <td style="align-content: center;">
            <button type="button" class="btn btn btn-default btn-xs"><i class="fa fa-cloud-download" aria-hidden="true"></i> <a href="{{ asset('upload/uploadPdf/'.$files->file_name) }}" download>{{$files->file_name}}</a></button>
            <button type="button" class="btn btn btn-danger btn-xs" onclick="if(confirm('คุณต้องลบข้อมูล หรือ ไม่')) window.location.href = '/deletePDF/{{$files->name}}/{{$files->id}}'"><i class="fa fa-trash-o"></i> ลบข้อมูล</button>
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
