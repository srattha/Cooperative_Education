@extends('layouts.download')
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
<div class="container panel-body">
   <div class="container-fluid panel panel-default">
      <div class="row">
         <div class="col-md-12">
            <h1 class="head-page-title" style="color: #3f51b5;">ดาวน์โหลด</h1>
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-md-12">
            <p>หน้าสำหรับการดาวน์โหลดโปรแกรม เอกสารต่างๆ&nbsp;</p>
            <p>&nbsp;</p>
            <table class="table table-bordered">
               <tbody>
                  <tr>
                     <td>
                        <p 18.5714px="" line-height:="">แบบฟอร์มสหกิจศึกษาต่างๆ<br />
                           <?php 
                              $array = [
                                 ['', ''], 
                                 ['เอกสาร', 'เอกสารหมายเลข 1'],
                                 ['เอกสาร', 'เอกสารหมายเลข 2'],
                                 ['เอกสาร', 'เอกสารหมายเลข 3'],
                                 ['เอกสาร', 'เอกสารหมายเลข 4'],
                                 ['เอกสาร', 'เอกสารหมายเลข 5'],
                                 ['เอกสาร', 'เอกสารหมายเลข 6'],
                                 ['เอกสาร', 'เอกสารหมายเลข 7'],
                                 ['เอกสาร', 'เอกสารหมายเลข 8'],
                                 ['เอกสาร', 'เอกสารหมายเลข 9'],
                                 ['เอกสาร', 'เอกสารหมายเลข 10'],
                                 ['เอกสาร', 'เอกสารแบบฟอร์มประเมินผลการฝึกงาน'],
                                 ['เอกสาร', 'เอกสารใบตอบรับ-คอบ.'],
                              ];
                              foreach ($file as $key => $value) {
                                 if($value->status_file != null){
                                    echo '&nbsp; &nbsp; '.$array[$value->status_file][0].'&nbsp;&nbsp;<a href="down/'.$value->name.'"style="text-decoration:none;target="_blank"><i class="fa fa-file-pdf-o " aria-hidden="true" id="pdf"></i>&nbsp;'.$array[$value->status_file][1].' </a><br />';
                                 }
                              }
                              ?>
                        </p>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
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
</div>
@endsection
@section('javascript')
@endsection