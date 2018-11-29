@extends('layouts.app')
@section('title','หน้าหลัก')
@section('css')
@endsection
@section('content')
<div class="container">
   <div class="row " style="">
      <div class="col-md-7">
         <!--Carousel Wrapper-->
         <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
               <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-example-2" data-slide-to="1"></li>
               <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active">
                  <div class="view">
                     <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(105).jpg" alt="First slide">
                     <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                     <h3 class="h3-responsive">This is the first title</h3>
                     <p>First text</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <!--Mask color-->
                  <div class="view">
                     <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(115).jpg" alt="Second slide">
                     <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                     <h3 class="h3-responsive">Thir is the second title</h3>
                     <p>Secondary text</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <!--Mask color-->
                  <div class="view">
                     <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(108).jpg" alt="Third slide">
                     <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                     <h3 class="h3-responsive">This is the third title</h3>
                     <p>Third text</p>
                  </div>
               </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
         </div>
         <!--/.Carousel Wrapper-->
      </div>
       <div class="col-md-5">
         <div class="activity-header">
            <b class="font-detail-18">ปฏิทิน</b>
         </div>
         <div class="text-centet" style="margin: 20px; padding: 110px 50px;background-color: #f1f1f1;">
            
         </div>
          
       </div>
   </div>

<br>
   <div class="row">
      <form class="form-inline" action="/action_page.php">
         <div class="col-sm-3" >
            <h5>ค้นหาสถานประกอบการ</h5>
         </div>
         <div class="col-sm-3" >
            <div class="input-group input-group-sm">
               <span class="input-group-addon" id="sizing-addon1"></span>
               <select id="inputState" name="faculty" value="" class="form-control">
                  <option selected>-กรุณาเลือกคณะ-</option>
                  <option value="คณะบริหารธุรกิจและศิลปศาสตร์">คณะบริหารธุรกิจและศิลปศาสตร์</option>
                  <option value="คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร">คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
                  <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์ </option>
                  <option value="คณะศิลปกรรมและสถาปัตยกรรมศาสตร์">คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
               </select>
            </div>
         </div>
         <div class="col-sm-3" >
            <div class="input-group input-group-sm">
               <span class="input-group-addon" id="sizing-addon1"></span>
               <select id="inputState" name="major"
                  class="form-control">
                  <option selected>-กรุณาเลือกสาขาวิชา-</option>
                  <option value="บช.บ. การบัญชี" >บช.บ. การบัญชี</option>
                  <option value="บธ.บ. การจัดการ">บธ.บ. การจัดการ</option>
                  <option value="บธ.บ. การตลาด">บธ.บ. การตลาด</option>
                  <option value="บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์">บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์</option>
                  <option value="ศศ.บ การท่องเที่ยวและารโรงแรม">ศศ.บ การท่องเที่ยวและารโรงแรม</option>
                  <option value="ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล">ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>
                  <option value="วท.บ. เทคโนโลยีสารสนเทศ">วท.บ. เทคโนโลยีสารสนเทศ</option>
                  <option value="คศ.บ. คหกรรมศาสตร์">คศ.บ. คหกรรมศาสตร์</option>
                  <option value="ค.อ.บ. วิศวกรรมเครื่องกล">ค.อ.บ. วิศวกรรมเครื่องกล</option>
                  <!--<option value="วศ.บ. วิศวกรรมเคื่องกล">วศ.บ. วิศวกรรมเคื่องกล</option> -->
                  <option value="ค.อ.บ. วิศวกรรมเครื่องกล">ค.อ.บ. วิศวกรรมเครื่องกล</option>
                  <option value="วศ.บ. วิศวกรรมคอมพิงเตอร์">วศ.บ. วิศวกรรมคอมพิงเตอร์</option>
                  <option value="วศ.บ. วิศวกรรมไฟฟ้า">วศ.บ. วิศวกรรมไฟฟ้า</option>
                  <option value="วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์">วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์</option>
                  <option value="วศ.บ. วิศวกรรมโยธา">วศ.บ. วิศวกรรมโยธา</option>
                  <option value="ค.อ.บ วิศวกรรมอุตสาหการ">ค.อ.บ วิศวกรรมอุตสาหการ</option>
                  <option value="วศ.บ. วิศวกรรมอุตสาหการ">วศ.บ. วิศวกรรมอุตสาหการ</option>
                  <option value="ศบ.บ ออกแบบอุตสาหกรรม">ศบ.บ ออกแบบอุตสาหกรรม</option>
                  <option value="ทล.บ. ออกแบบอุตสาหกรรม">ทล.บ. ออกแบบอุตสาหกรรม</option>
               </select>
            </div>
         </div>
         <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">ค้นหา</button>
         </div>
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
   <footer class="footer">
   <div class="col-md-12" style="margin-top: 50px">
   <div class="container">
      <div class="col-sm-6">
         <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
         Deverloped By Patiphan Uthang And Yuwa Saewang 
      </div>
   </div>
   <div class="row" style="margin-top: 50px"></div>
</footer>


@endsection
@section('javascript')
@endsection