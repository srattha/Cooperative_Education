@extends('student.master')
@section('title','จัดการข้อมูลสมาชิก')
@section('css')
<style type="text/css" media="screen">
   .input-group .form-control:last-child{
   background: none;
   border-top-width: 0px;
   border-right-width: 0px;
   border-bottom-width: 1px;
   border-left-width: 0px;
   box-shadow: none
   } 
   .input-group-addon:first-child {
   border-right: 0;
   border-top-width: 0;
   border-right-width: 0;
   border-bottom-width: 0;
   border-left-width: 0;
   background: none;
   }
   .panel-info>.panel-heading {
   /* color: #31708f; */
   /* background-color: #d9edf7; */
   /* border-color: #bce8f1; */
   color: #ffffff;
   background-color: #6bccb4;
   border-color: #58c5aa;
</style>
@endsection
@section('content')
<div class="row">
<h2 style="text-align:center; font-size:24px;margin:40px 0;">
   <p style="margin: 0 0 5px; color: #5e5e5e;
      font-size: 18px;
      line-height: 34px;">แบบแจ้งรายละเอียดข้อมูลนักศึกษา และข้อมูลสถานประกอบการโครงการสหกิจศึกษา</p>
</h2>
@if (count($errors) > 0)
<div class="alert alert-danger">
   <!--<strong>Whoops!</strong> There were some problems with your input.<br><br>-->
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
<div class="container-fluid">
   <div class="row">
      <div class="panel panel-info">
         <div class="panel-heading">ข้อมูลนักศึกษา และข้อมูลสถานประกอบการ</div>
         <div class="panel-body">
            <!-----------row student--------------------------------->
            <!----------- row I-------------------------------->
            <h3>ส่วนที่ 1 ข้อมูลนักศึกษา</h3>
            <div class="row">
               <!-- row-I -->
               <div class="col-sm-7" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ชื่อ-นามสกุล นาย/นางสาว</span>
                     <input type="text"name="name_student" class="form-control" id="name_student" placeholder=" นาย/นางสาว ชื่อ-นามสกุล" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-5" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">เลขบัตรประชาชน</span>
                     <input type="number"name="campus" class="form-control" id="campus" placeholder="เลขบัตรประชาชน" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <!-- row-II -->
            <div class="row">
               <div class="col-sm-6" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ว/ด/ป เกิด</span>
                     <input type='date' class="form-control"id="meeting" name="birthday" required title="ว/ด/ปี เกิด" value="{{ old('birthday') }}" />
                  </div>
               </div>
               <div class="col-sm-6" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ชื่อสถาบัน</span>
                     <input type="text"name="institution" class="form-control" id="institution" placeholder="ชื่อสถาบัน" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <!-- row-III -->
            <div class="row">
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">รหัสนักศึกษา</span>
                     <input type="number"name="student_id" class="form-control" id="student_id" placeholder="รหัสนักศึกษา" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">วิทยาเขต</span>
                     <input type="text"name="campus" class="form-control" id="campus" placeholder="วิทยาเขต" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ภาคเรียน</span>
                     <select id="inputState" class="form-control">
                        <option selected>-กรุณาเลือกภาคเรียน-</option>
                        <option>1</option>
                        <option>2</option>
                     </select>
                  </div>
               </div>
            </div>
            <br>
            <!-- row-IIII -->
            <div class="row">
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">คณะ</span>
                     <select id="inputState" class="form-control">
                        <option selected>-กรุณาเลือกคณะ-</option>
                        <option>คณะบริหารธุรกิจและศิลปศาสตร์</option>
                        <option>คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
                        <option>คณะวิศวกรรมศาสตร์ </option>
                        <option>คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
                     </select>
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">สาขาวิชา</span>
                     <select id="inputState" class="form-control">
                        <option selected>-กรุณาเลือกสาขาวิชา-</option>
                        <option>บช.บ. การบัญชี</option>
                        <option>บธ.บ. การจัดการ</option>
                        <option>บธ.บ. การตลาด</option>
                        <option>บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์</option>
                        <option>ศศ.บ การท่องเที่ยวและารโรงแรม</option>
                        <option>ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>
                        <option>วท.บ. เทคโนโลยีสารสนเทศ</option>
                        <option>คศ.บ. คหกรรมศาสตร์</option>
                        <option>วศ.บ. วิศวกรรมเคื่องกล</option>
                        <option>ค.อ.บ. วิศวกรรมเครื่องกล</option>
                        <option>วศ.บ. วิศวกรรมคอมพิงเตอร์</option>
                        <option>วศ.บ. วิศวกรรมไฟฟ้า</option>
                        <option>วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์</option>
                        <option>วศ.บ. วิศวกรรมโยธา</option>
                        <option>ค.อ.บ วิศวกรรมอุตสาหการ</option>
                        <option>วศ.บ. วิศวกรรมอุตสาหการ</option>
                        <option>ศบ.บ ออกแบบอุตสาหกรรม</option>
                        <option>ทล.บ. ออกแบบอุตสาหกรรม</option>
                     </select>
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ปีการศึกษา</span>
                     <input type="number"name="year" class="form-control" id="year" placeholder="ปีการศึกษา" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <!-- row-IIIII -->
            <div class="row">
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">กิจกรรม</span>
                     <input type="text"name="activities" class="form-control" id="activities" placeholder="สหกิจศึกษา" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
              <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ปีที่เข้าศึกษา</span>
                     <input type="number"name="fullname" class="form-control" id="fullname" placeholder="ปีที่เข้าศึกษา" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
                <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ปีที่รับการฝึก</span>
                     <input type="number"name="fullname" class="form-control" id="fullname" placeholder="ปีที่รับการฝึก" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <!-- row-IIIIII -->
            <div class="row">
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยที่ผ่านมา</span>
                     <input type="number"name="gpa" class="form-control" id="gpa" placeholder="เกรดเฉลี่ยที่ผ่านมา" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยสะสม</span>
                     <input type="number"name="gpa_past" class="form-control" id="gpa_past" placeholder="เกรดเฉลี่ยสะสม" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">เบอร์โทรศัพท์</span>
                     <input type="number"name="telephone" class="form-control" id="telephone" placeholder="เบอร์โทรศัพท์" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <div class="form-group">
                  <label for="upload_file" class="control-label col-sm-3">Upload File</label>
               <div class="col-sm-4">
                  <input class="form-control" type="file" name="upload_file" id="upload_file">
               </div>
            </div>
            <br>
            <!-- End row- -->
            <h3>ส่วนที่ 2 ข้อมูลสถานประกอบการ</h3>
            <div class="row">
               <!-- row-I -->
               <div class="col-sm-6" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ชื่อบริษัท</span>
                     <input type="text"name="company_name" class="form-control" id="company_name" placeholder=" ชื่อบริษัท" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-6" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">นิคมอุตสาหกรรม</span>
                     <input type="text"name="industrial_estate" class="form-control" id="industrial_estate" placeholder="นิคมอุตสาหกรรม" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <!-- row-II -->
            <div class="row">
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ที่อยู่</span>
                     <input type="text"name="home_number" class="form-control" id="home_number" placeholder=" ที่อยู่" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">หมู่</span>
                     <input type="text"name="moo" class="form-control" id="moo" placeholder="หมู่" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-6" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ตึก/อาคาร</span>
                     <input type="text"name="building" class="form-control" id="building" placeholder="ตึก/อาคาร" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <!-- row-III -->
            <div class="row">
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ซอย</span>
                     <input type="text"name="soi" class="form-control" id="soi" placeholder=" ซอย" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ถนน</span>
                     <input type="text"name="road" class="form-control" id="road" placeholder=" ถนน" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ตำบล/แขวง</span>
                     <input type="text"name="district" class="form-control" id="district" placeholder="ตำบล/แขวง" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">อำเภอ/เขต</span>
                     <input type="text"name="amphure" class="form-control" id="amphure" placeholder="อำเภอ/เขต" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <!-- row-IIII -->
            <div class="row">
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">จังหวัด</span>
                     <input type="text"name="province" class="form-control" id="province" placeholder=" จังหวัด" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">รหัสไปรษณีย์</span>
                     <input type="number"name="post_code" class="form-control" id="post_code" placeholder="รหัสไปรษณีย์" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">โทรศัพท์</span>
                     <input type="number"name="tel" class="form-control" id="tel" placeholder="โทรศัพท์" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-3" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">แฟกซ์</span>
                     <input type="number"name="fax" class="form-control" id="fax" placeholder="แฟกซ์" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
            </div>
            <br>
            <!-- row-IIIII -->
            <div class="row">
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">อีเมล</span>
                     <input type="text"name="email" class="form-control" id="email" placeholder=" อีเมล" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ชื่อผู้ติดต่อ</span>
                     <input type="text"name="coordinator" class="form-control" id="coordinator" placeholder="ชื่อผู้ติดต่อ" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">เบอร์โทรผู้ติดต่อ</span>
                     <input type="number"name="coordinator_number" class="form-control" id="coordinator_number" placeholder="เบอร์โทรผู้ติดต่อ" aria-describedby="sizing-addon1" required>  
                  </div>
               </div>
               <!-- END row -->
               <br>
               <div class="row">
                  <div class="col-md-12"></div>
                  <div class="container" style="padding-left: 440px;margin-top: 50px;">
                     <br>
                     <button type="submit" class="btn btn-info">
                     <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก</button>
                     <button class="btn btn-danger" type="button" onclick="location.href='/reports';"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button>
                     </br>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<footer class="footer">   
   <div class="col-md-12" style="margin-top: 50px"></div>
      <div class="container">
         <div class="col-sm-6">
            <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
               Deverloped By Patiphan Uthang And Yuwa Saewang 
         </div>
      </div>
   <div class="row" style="margin-top: 50px"></div>
</footer>
<script type="text/javascript">
   function myFunction() {
   window.print();
   }
</script>
@endsection
@section('javascript')
@endsection