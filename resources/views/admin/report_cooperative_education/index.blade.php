@extends('admin.layouts.master')
@section('title','รายงานรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>รายงานรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา</h1>
    </div>
    <div class="panel-body">


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
