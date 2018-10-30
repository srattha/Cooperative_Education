@extends('layouts.master')
@section('title','หน้าแรก')
@section('css')
@endsection
<style type="text/css">
   .panel-heading {
   padding: 5px 15px;
   }
   .panel-footer {
   padding: 1px 15px;
   color: #A0A0A0;
   }
   .profile-img {
   width: 96px;
   height: 96px;
   margin: 0 auto 10px;
   display: block;
   -moz-border-radius: 50%;
   -webkit-border-radius: 50%;
   border-radius: 50%;
   }
</style>
@section('content')
<!--<div class="container">
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
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
   
      <footer class="container-fluid text-center bg-lightgray">
        <div class="col-md-12" style="margin-top: 50px"></div>
        <div class="container" >
              <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
              Deverloped By Patiphan Uthang and Yuwa Sawang 
        </div>
        <div class="row" style="margin-top: 50px"></div>
      </footer>
   </div>
   </div> -->
<div class="container" style="margin: 100px;">
   <h2 style="text-align:center; font-size:24px;margin:40px 0;">
      <p style="margin: 0 0 5px;">สหกิจศึกษา</p>
      <br>
      <small>มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</small>
      <br>
      <small>(สำหรับนักศึกษา)</small>
   </h2>
   <div class="container" style="margin-top:40px">
      <div class="row">
         <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <strong> เข้าสู่ระบบ</strong>
               </div>
               <div class="panel-body">
                  <form role="form" action="#" method="POST">
                     <fieldset>
                        <div class="row">
                           <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                              <div class="form-group">
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                    </span> 
                                    <input class="form-control" placeholder="ชื่อ-นามสกุล" name="loginname" type="text" autofocus>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input class="form-control" placeholder="รหัสผ่าน" name="password" type="password" value="">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <input type="submit" class="btn btn-lg btn-primary btn-block" value="เข้าสู่ระบบ" style="color: #ffffff;background-color: #6bccb4;border-color: #60c8ae;">
                              </div>
                           </div>
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('javascript')
@endsection
<span class="group-btn">     
<a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a>
</span>
</div>