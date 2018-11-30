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
#sizing-addon2{
   box-shadow: none;
   font-size: 13px;
}
#inputState1{
   border-top-width: 1px;
   border-right-width: 1px;
   border-bottom-width: 1px;
   border-left-width: 1px;
   background: none;
   font-size:14px;
}
</style>
@endsection
@section('content')
<br>
<div class="row">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 style="color:#fff; font-weight:550; font-size: 20px;">แก้ไข แบบแจ้งรายละเอียดข้อมูลนักศึกษา และข้อมูลสถานประกอบการโครงการสหกิจศึกษา</h3>
      </div>
      <div class="panel-body">
         <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;">ส่วนที่ 1 ข้อมูลนักศึกษา</h3>
         <form class="form-horizontal" method="POST" action="{{ route('data_student') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
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
                        <option value="{{ $data->term }}" {{ 1 == $data->term ? 'selected="selected"' : '' }}">1</option>
                        <option value="{{ $data->term }}" {{ 2 == $data->term ? 'selected="selected"' : '' }}">2</option>
                     </select>
                  </div>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">คณะ</span>
                     <select id="inputState" name="faculty" class="form-control">
                        <option selected>-กรุณาเลือกคณะ-</option>
                        <option value="{{ $data->faculty }}" {{ "คณะบริหารธุรกิจและศิลปศาสตร์" == $data->faculty ? 'selected="selected"' : '' }}">คณะบริหารธุรกิจและศิลปศาสตร์</option>
                        <option value="{{ $data->faculty }}" {{ "คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร" == $data->faculty ? 'selected="selected"' : '' }}">คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
                        <option value="{{ $data->faculty }}" {{ "คณะวิศวกรรมศาสตร์" == $data->faculty ? 'selected="selected"' : '' }}">คณะวิศวกรรมศาสตร์</option>
                        <option value="{{ $data->faculty }}" {{ "คณะศิลปกรรมและสถาปัตยกรรมศาสตร์" == $data->faculty ? 'selected="selected"' : '' }}">คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
                     </select>
                  </div>
               </div>
               <div class="col-sm-4" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">สาขาวิชา</span>
                     <select id="inputState" name="major"
                     class="form-control">
                     <option selected>-กรุณาเลือกสาขาวิชา-</option>
                     <option value="{{ $data->major }}" {{ "ช.บ. การบัญชี" == $data->major ? 'selected="selected"' : '' }}">ช.บ. การบัญชี</option>
                     <option value="{{ $data->major }}" {{ "บธ.บ. การจัดการ" == $data->major ? 'selected="selected"' : '' }}">บธ.บ. การจัดการ</option>
                     <option value="{{ $data->major }}" {{ "การตลาด" == $data->major ? 'selected="selected"' : '' }}">การตลาด</option>
                     <option value="{{ $data->major }}" {{ "บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์" == $data->major ? 'selected="selected"' : '' }}">บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์</option>
                     <option value="{{ $data->major }}" {{ "ศศ.บ การท่องเที่ยวและารโรงแรม" == $data->major ? 'selected="selected"' : '' }}">ศศ.บ การท่องเที่ยวและารโรงแรม</option>
                     <option value="{{ $data->major }}" {{ "ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล" == $data->major ? 'selected="selected"' : '' }}">ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>

                     <option value="{{ $data->major }}" {{ "วท.บ. เทคโนโลยีสารสนเทศ" == $data->major ? 'selected="selected"' : '' }}">วท.บ. เทคโนโลยีสารสนเทศ</option>
                     <option value="{{ $data->major }}" {{ "คศ.บ. คหกรรมศาสตร์" == $data->major ? 'selected="selected"' : '' }}">คศ.บ. คหกรรมศาสตร์</option>
                     <option value="{{ $data->major }}" {{ "ค.อ.บ. วิศวกรรมเครื่องกล" == $data->major ? 'selected="selected"' : '' }}">ค.อ.บ. วิศวกรรมเครื่องกล</option>
                     <option value="{{ $data->major }}" {{ "วศ.บ. วิศวกรรมเคื่องกล" == $data->major ? 'selected="selected"' : '' }}">วศ.บ. วิศวกรรมเคื่องกล</option>
                     <option value="{{ $data->major }}" {{ "วศ.บ. วิศวกรรมเคื่องกล" == $data->major ? 'selected="selected"' : '' }}">วศ.บ. วิศวกรรมเคื่องกล</option>
                     <option value="{{ $data->major }}" {{ "ทล.บ. ออกแบบอุตสาหกรรม" == $data->major ? 'selected="selected"' : '' }}">ทล.บ. ออกแบบอุตสาหกรรม</option>
                     <option value="{{ $data->major }}" {{ "วศ.บ. วิศวกรรมคอมพิงเตอร์" == $data->major ? 'selected="selected"' : '' }}">วศ.บ. วิศวกรรมคอมพิงเตอร์</option>
                     <option value="{{ $data->major }}" {{ "วศ.บ. วิศวกรรมไฟฟ้า" == $data->major ? 'selected="selected"' : '' }}">วศ.บ. วิศวกรรมไฟฟ้า</option>
                     <option value="{{ $data->major }}" {{ "วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์" == $data->major ? 'selected="selected"' : '' }}">วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์</option>
                     <option value="{{ $data->major }}" {{ "วศ.บ. วิศวกรรมโยธา" == $data->major ? 'selected="selected"' : '' }}">วศ.บ. วิศวกรรมโยธา</option>
                     <option value="{{ $data->major }}" {{ "ค.อ.บ วิศวกรรมอุตสาหการ" == $data->major ? 'selected="selected"' : '' }}">ค.อ.บ วิศวกรรมอุตสาหการ</option>
                     <option value="{{ $data->major }}" {{ "วศ.บ. วิศวกรรมอุตสาหการ" == $data->major ? 'selected="selected"' : '' }}">ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>
                     <option value="{{ $data->major }}" {{ "ศบ.บ ออกแบบอุตสาหกรรม" == $data->major ? 'selected="selected"' : '' }}">ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>
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
         <div class="form-group" style="padding-left: 250px;">
            <label for="upload_file" class="control-label col-sm-3" style="font-size: 18px;" >Upload File Project</label>
            <div class="col-sm-5">
               <input class="form-control" type="file" name="file" id="upload_file">
            </div>
         </div>
         <br>
         <hr>
         <br>
         <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;"><p>ส่วนที่ 2 ข้อมูลสถานประกอบการ</p>
           <small style="font-size: 13px;">(นอกเหนือจากระบบให้นักศึกษากรอกข้อมูลเพิ่มเติม)</small></h3>
           <br>
           <div class="row">
            <div class="col-sm-5">
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon2"></span>
                  <select id="inputState1" class="form-control"  onchange="getval(this);">
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
            <!-- row-I -->
            <div class="col-sm-6" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ชื่อบริษัท</span>
                  <input type="hidden" name="company_id" id="id">
                  <input type="text" name="company_name" class="form-control" id="company_name" value="{{$company->company_name}}" placeholder=" ชื่อบริษัท"  aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-6" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">นิคมอุตสาหกรรม</span>
                  <input type="text" name="industrial_estate" class="form-control" id="industrial_estate" placeholder="นิคมอุตสาหกรรม" aria-describedby="sizing-addon1" required>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ที่อยู่</span>
                  <input type="text" name="home_number" class="form-control" id="home_number" placeholder=" ที่อยู่" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">หมู่</span>
                  <input type="text" name="moo" class="form-control" id="moo" placeholder="หมู่" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-6" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ตึก/อาคาร</span>
                  <input type="text" name="building" class="form-control" id="building" placeholder="ตึก/อาคาร" aria-describedby="sizing-addon1" required>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ซอย</span>
                  <input type="text" name="soi" class="form-control" id="soi" placeholder=" ซอย" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ถนน</span>
                  <input type="text" name="road" class="form-control" id="road" placeholder=" ถนน" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ตำบล/แขวง</span>
                  <input type="text" name="district" class="form-control" id="district" placeholder="ตำบล/แขวง" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">อำเภอ/เขต</span>
                  <input type="text" name="amphure" class="form-control" id="amphure" placeholder="อำเภอ/เขต" aria-describedby="sizing-addon1" required>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">จังหวัด</span>
                  <input type="text" name="province" class="form-control" id="province" placeholder=" จังหวัด" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">รหัสไปรษณีย์</span>
                  <input type="number" name="post_code" class="form-control" id="post_code" placeholder="รหัสไปรษณีย์" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">โทรศัพท์</span>
                  <input type="text" name="tel" class="form-control" id="tel" placeholder="โทรศัพท์" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-3" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">แฟกซ์</span>
                  <input type="text" name="fax" class="form-control" id="fax" placeholder="แฟกซ์" aria-describedby="sizing-addon1" required>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">อีเมล</span>
                  <input type="text" name="email" class="form-control" id="email" placeholder=" อีเมล" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ชื่อผู้ติดต่อ</span>
                  <input type="text" name="coordinator" class="form-control" id="coordinator" placeholder="ชื่อผู้ติดต่อ" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">เบอร์โทรผู้ติดต่อ</span>
                  <input type="text" name="coordinator_number" class="form-control" id="coordinator_number" placeholder="เบอร์โทรผู้ติดต่อ" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <!-- END row -->
            <br>
            <div class="row">
               <div class="col-md-12"></div>
               <div class="container" style="padding-left: 520px;margin-top: 50px;">
                  <br>
                  <button type="submit" class="btn btn-info">
                     <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก</button>
                     <button class="btn btn-danger" type="button" onclick="location.href='/reports';"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button>
                  </div>
               </div>
            </div>
         </form>
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
   <script type="text/javascript">
      function getval(sel)
      {

         var value = sel.value;
         var company_id = {
           "id": value,
        };

        $.ajax({
          url: "api/getcompany",
          xhrFields: 'withCredentials:true',
          type: "POST",
          data: {
             "id": sel.value,
          },
          contentType: 'application/x-www-form-urlencoded',
          success: function (data) {
             document.getElementById("id").value = data.id;
             document.getElementById("company_name").value = data.company_name;
             document.getElementById("industrial_estate").value = data.industrial_estate;
             document.getElementById("home_number").value = data.home_number;
             document.getElementById("moo").value = data.moo;
             document.getElementById("soi").value = data.soi;
             document.getElementById("building").value = data.building;
             document.getElementById("road").value = data.road;
             document.getElementById("district").value = data.district;
             document.getElementById("amphure").value = data.amphure;
             document.getElementById("post_code").value = data.post_code;
             document.getElementById("tel").value = data.tel;
             document.getElementById("fax").value = data.fax;
             document.getElementById("province").value = data.province;
             document.getElementById("email").value = data.email;
             document.getElementById("coordinator").value = data.coordinator;
             document.getElementById("coordinator_number").value = data.coordinator_number;
             console.log(data.tel);
          },
          error: function (xhRequest, ErrorText, thrownError) {
            alert("Failed to process correctly, please try again");
         }
      });
     }
  </script>
  @endsection
