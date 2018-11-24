@extends('layouts.app')
@section('title','หน้าหลัก')
@section('css')
@endsection
@section('content')
<div class="container">
   <div class="row">
      <h6>ค้นหาสถานประกอบการ</h6>
      <form class="form-inline" action="/action_page.php">
         <div class="form-group">
            <label for="email">คณะ</label>
            <input type="text" class="form-control" id="email" placeholder="คณะ" name="email">
         </div>
         <div class="form-group">
            <label for="pwd">สาขา</label>
            <input type="text" class="form-control" id="pwd" placeholder="สาขา" name="pwd">
         </div>
         <button type="submit" class="btn btn-default">ค้นหา</button>
      </form>
   </div>
   <br>
   <div class="row">
      <div class="table-responsive">
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>พ.ศ.</th>
                  <th>บริษัท</th>
                  <th>นักศึกษา</th>
                  <th>จังหวัด</th>
                  <th>เบอร์โทรบริษัท</th>
                  <th>ผลงานนักศึกษา</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>John</td>
                  <td>Doed</td>
                  <td>john@example.com</td>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
               </tr>
               <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
               </tr>
               <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
               </tr>
               <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection
@section('javascript')
@endsection