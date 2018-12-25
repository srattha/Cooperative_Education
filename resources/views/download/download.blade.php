@extends('student.master')
@section('title','ดาวน์โหลด')
@section('css')
<style type="text/css">
   .a{
   text-decoration: none;
   color: #513300;
   }
   .body{
   color: #555;
   }
   .head-page-title{
   font-family: "kanit", sans-serif;
   font-size: 18px;
   font-weight: bold;
   color:#4e4e4e;
   }
</style>
@endsection
@section('content')
<div class="container-fluid panel panel-default" style="margin-top: -20px;">
   <h1 class="head-page-title" style="color:  #3F51B5;">ดาวน์โหลด</h1>
   <hr>
   <p>หน้าสำหรับการดาวน์โหลดโปรแกรม เอกสาร แบบฟอร์มสหกิจศึกษา </p>
   <table class="table table-bordered" style="background-color: #fff;">
      <tbody>
         <tr>
            <td class="well">
               <p 18.5714px line-height: style="color: rgb(0, 105, 214);">เอกสารสหกิจศึกษาต่างๆ </p>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 1 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 2 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 3 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 4 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 5 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 6 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 7 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 8 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 9 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 10 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 11 </a>
               <br>
               <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true" id="pdf"></i>เอกสารหมายเลข 12 </a>
            </td>
         </tr>
      </tbody>
   </table>
   <br>
</div>
<br>
<footer class="footer">
      <span class="footer-divider" style="height: 5px;
         display: block;
         background: #3F51B5;"></span>
      <div class="col-md-12" style="margin-top: 50px"></div>
      <div class="container">
         <div class="">
            <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
            Deverloped By Patiphan Uthang And Yuwa Saewang
         </div>
      </div>
      <div class="row" style="margin-top: 50px"></div>
   </footer>
@endsection
@section('javascript')
@endsection