@extends('student.master')
@section('title','นักศึกษา')
@section('css')
<style type="text/css" media="screen">
   .input-group .form-control:last-child{
   background: none;
   border-top-width: 0px;
   border-right-width: 0px;
   border-bottom-width: 1px;
   border-left-width: 0px;
   box-shadow: none;
   font-size: 13px;
   } 
   .input-group-addon:first-child {
   border-right: 0;
   border-top-width: 0;
   border-right-width: 0;
   border-bottom-width: 0;
   border-left-width: 0;
   background: none;
   font-size:13px;
   color: #4e4e4e;
   font-weight: 600;
   }
   .panel-info>.panel-heading {
   /* color: #31708f; */
   /* background-color: #d9edf7; */
   /* border-color: #bce8f1; */
   color: #ffffff;
   background-color: #6bccb4;
   border-color: #58c5aa;
   }
   .panel-default>.panel-heading {
   background-color: #3F51B5;
   border-color: #ddd;
   color:#fff;
   }
   /*#sizing-addon2{
   box-shadow: none;
   font-size: 13px;
   }*/
</style>
@endsection
@section('content')
<div class="container panel-body">
   <div class="row">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h3 style="color:#fff; font-weight:550; font-size: 20px;">แก้ไข แบบแจ้งรายละเอียดข้อมูลนักศึกษา และข้อมูลสถานประกอบการโครงการสหกิจศึกษา</h3>
         </div>
         <br>
         @if (Session::has('success'))
            <!-- <div class="alert alert-danger"> -->
               <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> -->
               <p class="alert alert-danger" align="center">{{ Session::get('success') }}</p>
           <!--  </div> -->
         @endif
         <div class="row"> 
            <div class="col-md-6 col-md-offset-4" >
               <a href="{{ '/mpdf_student/'.$user->id}}" class="btn btn-danger"><i class="fa fa-print"><span></span> ปริ้นข้อมูล </i></a>
               <a href="{{ '/mpdf_report/'.$user->id}}" class="btn btn-danger"><i class="fa fa-print"><span></span> ปริ้นรายงานการอัพไฟล์สหกิจศึกษา </i></a>
            </div>
         </div>
         
         <div class="panel-body">
            <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;">ส่วนที่ 1 ข้อมูลนักศึกษา</h3>
            <form class="form-horizontal" method="POST" action="{{ route('editdata_student') }}" enctype="multipart/form-data">
               {{ csrf_field() }} 
               <input type="hidden" name="user_id"  value="{{$user->id}}">
               <input type="hidden" name="update_company_id" value="{{$data->company_id}}">
               <input type="hidden" name="company_ID" value="{{$company->id}}">
               <div class="row">
                  <!-- row-I -->
                  <div class="col-sm-7" > 
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ชื่อ-สกุล</span>
                        <input type="text" name="name_student" class="form-control" placeholder=" นาย/นางสาว ชื่อ-นามสกุล" value="{{$user->name}}" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-5" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">เลขบัตรประชาชน</span>
                        <input type="text" name="identification_number" class="form-control" placeholder="เลขบัตรประชาชน" value="{{$data->identification_number}}" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <!-- row-II -->
               <div class="row">
                  <div class="col-sm-6" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ว/ด/ป เกิด</span>
                        <input type="date" class="form-control" name="birthday" required title="ว/ด/ปี เกิด" value="{{$data->birthday}}">
                        <!--  <input type='date' class="form-control" id="meeting"  placeholder="เลขบัตรประชาชน" value="dd" name="birthday" required title="ว/ด/ปี เกิด" /> -->
                     </div>
                  </div>
                  <div class="col-sm-6" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ชื่อสถาบัน</span>
                        <input type="text" name="institution"  class="form-control" id="institution" value="{{$data->institution}}" placeholder="ชื่อสถาบัน" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <!-- row-III -->
               <div class="row">
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">รหัสนักศึกษา</span>
                        <input type="text" name="student_id" class="form-control" id="student_id" value="{{$data->student_id}}" placeholder="รหัสนักศึกษา" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">วิทยาเขต</span>
                        <input type="text" name="campus"  class="form-control" id="campus" value="{{$data->campus}}" placeholder="วิทยาเขต" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ภาคเรียน</span>
                        <select id="inputState" name="term"  class="form-control">
                           <option selected>-กรุณาเลือกภาคเรียน-</option>
                           <option value="1" {{ 1 == $data->term ? 'selected="selected"' : '' }}">1</option>
                           <option value="2" {{ 2 == $data->term ? 'selected="selected"' : '' }}">2</option>
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
                        <select id="faculty" name="faculty" class="form-control">
                           <option selected>-กรุณาเลือกคณะ-</option>
                           @foreach ($faculty as $index => $f)
                           <option value="{{$f->id}}" {{ "$f->id" == $data->faculty_id ? 'selected="selected"' : '' }}>{{$f->name}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">สาขาวิชา</span>
                        <select id="major" name="major"
                           class="form-control">
                           <!-- <option selected>-กรุณาเลือกสาขาวิชา-</option> -->
                           <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        </select>
                     </div> 
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ปีการศึกษา</span>
                        <input type="number" name="year" class="form-control" id="year" value="{{$data->year}}"  placeholder="ปีการศึกษา" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <!-- row-IIIII -->
               <div class="row">
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">กิจกรรม</span>
                        <input type="text" name="activities" class="form-control" id="activities" value="{{$data->activities}}" placeholder="สหกิจศึกษา" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ปีที่เข้าศึกษา</span>
                        <input type="number" name="year_study"  class="form-control" id="year_study" value="{{$data->year_study}}" placeholder="ปีที่เข้าศึกษา" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ปีที่รับการฝึก</span>
                        <input type="number" name="class_year" class="form-control" id="class_year" value="{{$data->class_year}}" placeholder="ปีที่รับการฝึก" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <!-- row-IIIIII -->
               <div class="row">
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยที่ผ่านมา</span>
                        <input type="text" name="gpa"  class="form-control" id="gpa" placeholder="เกรดเฉลี่ยที่ผ่านมา" value="{{$data->gpa}}" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยสะสม</span>
                        <input type="text" name="gpa_past"  class="form-control" id="gpa_past" placeholder="เกรดเฉลี่ยสะสม" value="{{$data->gpa_past}}" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">เบอร์โทรศัพท์</span>
                        <input type="text" name="telephone"  class="form-control" id="telephone" placeholder="เบอร์โทรศัพท์" value="{{$data->telephone}}" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <br>
               <!-- file -->
               <div class="form-group">
                  <label for="upload_file" class="control-label col-sm-3" style="font-size: 18px;" > อัพโหลดไฟล์</label>ขนาดไฟล์ zip ไม่เกิน 200 MB
                  <div class="col-sm-5">
                  <input class="form-control" type="file" name="file" id="upload_file"></div>
               </div>
               <hr>
               <!-- company -->
               <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;">
                  <p>ส่วนที่ 2 ข้อมูลสถานประกอบการ</p>
                  <small style="font-size: 13px;">(นอกเหนือจากระบบให้นักศึกษากรอกข้อมูลเพิ่มเติม)</small>
               </h3>
               <br>
               <!-- row-I -->
               <div class="row">
                  <div class="col-sm-5">
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon2"></span>
                        <select id="companys" class="form-control">
                           <option selected>เลือกสถานประกอบการ</option>
                           @foreach ($companys as $index => $c)
                           <option value="{{$c->id}}">{{$c->company_name}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <br>
               <br>
               <div class="row">
                  <!-- row-II -->
                  <div class="col-sm-6" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ชื่อบริษัท </span>
                        <input type="hidden" name="company_id" id="id">
                        <input type="text" name="company_name" class="form-control" id="company_name" value="{{$company->company_name}}" placeholder=" ชื่อบริษัท"  aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-6" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">นิคมอุตสาหกรรม</span>
                        <input type="text" name="industrial_estate" class="form-control" id="industrial_estate" value="{{$company->industrial_estate}}" placeholder="นิคมอุตสาหกรรม" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <!-- row-III -->
               <div class="row">
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ที่อยู่</span>
                        <input type="text" name="home_number" class="form-control" id="home_number" value="{{$company->home_number}}" placeholder=" ที่อยู่" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">หมู่</span>
                        <input type="text" name="moo" class="form-control" id="moo" value="{{$company->moo}}" placeholder="หมู่" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-6" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ตึก/อาคาร</span>
                        <input type="text" name="building" class="form-control" id="building" value="{{$company->building}}"placeholder="ตึก/อาคาร" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <!-- row-IIII-->
               <div class="row">
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ซอย</span>
                        <input type="text" name="soi" class="form-control" id="soi" id="building" value="{{$company->soi}}" placeholder=" ซอย" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ถนน</span>
                        <input type="text" name="road" class="form-control" id="road" value="{{$company->road}}" placeholder=" ถนน" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ตำบล/แขวง</span>
                        <input type="text" name="district" class="form-control" id="district" value="{{$company->district}}" placeholder="ตำบล/แขวง" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">อำเภอ/เขต</span>
                        <input type="text" name="amphure" class="form-control" id="amphure" value="{{$company->amphure}}" placeholder="อำเภอ/เขต" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <!-- row-IIIII -->
               <div class="row">
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">จังหวัด</span>
                        <input type="text" name="province" class="form-control" id="province" value="{{$company->province}}" placeholder=" จังหวัด" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">รหัสไปรษณีย์</span>
                        <input type="number" name="post_code" class="form-control" id="post_code" value="{{$company->post_code}}" placeholder="รหัสไปรษณีย์" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">โทรศัพท์</span>
                        <input type="text" name="tel" class="form-control" id="tel" value="{{$company->tel}}" placeholder="โทรศัพท์" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-3" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">แฟกซ์</span>
                        <input type="text" name="fax" class="form-control" id="fax" value="{{$company->fax}}" placeholder="แฟกซ์" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
               </div>
               <br>
               <!-- row-IIIIII -->
               <div class="row">
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">อีเมล</span>
                        <input type="text" name="email" class="form-control" id="email" value="{{$company->email}}" placeholder=" อีเมล" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">ชื่อผู้ติดต่อ</span>
                        <input type="text" name="coordinator" class="form-control" id="coordinator" value="{{$company->coordinator}}" placeholder="ชื่อผู้ติดต่อ" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <div class="col-sm-4" >
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon1">เบอร์โทรผู้ติดต่อ</span>
                        <input type="text" name="coordinator_number" class="form-control" id="coordinator_number" value="{{$company->coordinator_number}}" placeholder="เบอร์โทรผู้ติดต่อ" aria-describedby="sizing-addon1" required>
                     </div>
                  </div>
                  <!-- END row -->
                  <br>
                  <br>
                  <!-- submit -->
               <div class="row" style="padding-left: 80px;">
                  <div class="col-md-6 col-md-offset-4">
                     <button type="submit" class="btn btn-info">
                     <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก</button>
                     <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalalert"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="modal in" id="modalalert">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">คำเตือน !</h4>
         </div>
         <div class="modal-body">
            <p>คุณแน่ใจหรือว่าต้องการยกเลิก  (สิ่งนี้)</p>
            <div class="row">
               <div class="col-12-xs text-center">
                  <button class="btn btn-success btn-md" data-dismiss="modal" onclick="$('form')[1].reset();$('form')[0].reset();">Yes</button>
                  <button class="btn btn-danger btn-md" data-dismiss="modal">No</button>
               </div>
            </div>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<footer class="footer">
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
<script type="text/javascript">
   $(document).ready(function() {
     $('#companys').change(function(){
      var value = $(this).val();
      $.post("/api/getcompany",{id:value}, function( res ) {
        if(res){
          document.getElementById("id").value = res.id;
          document.getElementById("company_name").value = res.company_name;
          document.getElementById("industrial_estate").value = res.industrial_estate;
          document.getElementById("home_number").value = res.home_number;
          document.getElementById("moo").value = res.moo;
          document.getElementById("soi").value = res.soi;
          document.getElementById("building").value = res.building;
          document.getElementById("road").value = res.road;
          document.getElementById("district").value = res.district;
          document.getElementById("amphure").value = res.amphure;
          document.getElementById("post_code").value = res.post_code;
          document.getElementById("tel").value = res.tel;
          document.getElementById("fax").value = res.fax;
          document.getElementById("province").value = res.province;
          document.getElementById("email").value = res.email;
          document.getElementById("coordinator").value = res.coordinator;
          document.getElementById("coordinator_number").value = res.coordinator_number;
       }else{
       }
    });
   });
     $('#faculty').change(function(){
      var faculty = $(this).val();
      $('#major').empty();
      $.post("/api/faculty",{id:faculty}, function( res ) {
        if(res){
         $.each(res, function(key, value) {
           console.log(value.id)
            $('#major')
            .append($("<option></option>")
              .attr("value",value.id)
              .text(value.name));
              $('#branch').hide();
         });
           console.log(res)
        }else{
   
        }
     });
   });
   
    //  $("#year").datepicker({
    //    format: "yyyy",
    //    viewMode: "years",
    //    minViewMode: "years"
    // });
    //  $("#year_study").datepicker({
    //    format: "yyyy",
    //    viewMode: "years",
    //    minViewMode: "years"
    // });
    //  $("#class_year").datepicker({
    //    format: "yyyy",
    //    viewMode: "years",
    //    minViewMode: "years"
    // });
   });
   
   
</script>
@endsection