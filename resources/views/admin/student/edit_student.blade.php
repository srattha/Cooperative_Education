@extends('admin.layouts.master')
@section('title','แก้ไขข้อมูลนักศึกษา')
@section('css')
@endsection
@section('content')  
<br>
<div class="row">
<div class="panel panel-default">
<div class="panel-heading">
   <h1>จัดการข้อมูลนักศึกษา</h1>
</div>
<div class="panel-body">
   @if (Session::has('success')) 
   <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <p>{{ Session::get('success') }}</p>
   </div>
   @endif
   <div class="panel-body">
      <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;">ส่วนที่ 1 ข้อมูลนักศึกษา</h3>
      <form  action="{{ url('edit_student') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
         <input type="hidden" name="student_id"  value="{{$student->id}}">
         <input type="hidden" name="update_student_id" value="{{$student->student_id}}">
         <div class="row">
            <!-- row-I -->
            <div class="col-sm-7" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ชื่อ-สกุล</span>
                  <input type="text" name="name_student" class="form-control" id="name_student" placeholder=" นาย/นางสาว ชื่อ-นามสกุล" value="{{$student->name_student}}"  aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-5" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">เลขบัตรประชาชน</span>
                  <input type="text" name="identification_number" class="form-control" id="identification_number" placeholder="เลขบัตรประชาชน" value="{{$student->identification_number}}" aria-describedby="sizing-addon1" required>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-6" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ว/ด/ป เกิด</span>
                  <input type="hidden" name="user_id">
                  <input type="date" " class="form-control" name="birthday" required title="ว/ด/ปี เกิด" value="{{$student->birthday}}" > 
                  <!--  <input type='date' class="form-control" id="meeting"  placeholder="เลขบัตรประชาชน" value="dd" name="birthday" required title="ว/ด/ปี เกิด" /> -->
               </div>
            </div>
            <div class="col-sm-6" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ชื่อสถาบัน</span>
                  <input type="text" name="institution"  class="form-control" id="institution" placeholder="ชื่อสถาบัน" aria-describedby="sizing-addon1" required value="{{$student->institution}}" >
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">รหัสนักศึกษา</span>
                  <input type="text" name="student_id" required value="{{$student->student_id}}" class="form-control" id="student_id" placeholder="รหัสนักศึกษา" aria-describedby="sizing-addon1" >
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">วิทยาเขต</span>
                  <input type="text" name="campus"  class="form-control" id="campus" placeholder="วิทยาเขต" aria-describedby="sizing-addon1" required value="{{$student->campus}}" >
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ภาคเรียน</span>
                  <select id="inputState" name="term"  class="form-control">
                     <option selected>-กรุณาเลือกภาคเรียน-</option>
                     <option value="1" {{ 1 == $student->term ? 'selected="selected"' : '' }}">1</option>
                     <option value="2" {{ 2 == $student->term ? 'selected="selected"' : '' }}">2</option>
                  </select>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">คณะ</span>
                  <select id="faculty" name="faculty" class="form-control">
                     <option selected>-กรุณาเลือกคณะ-</option>
                           @foreach ($faculty as $index => $f)
                           <option value="{{$f->id}}" {{ "$f->id" == $student->faculty_id ? 'selected="selected"' : '' }}>{{$f->name}}</option>
                           @endforeach
                  </select>
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">สาขาวิชา</span>
                  <select id="major" name="major"class="form-control">
                  <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                  <!--
                     <option value="บช.บ. การบัญชี" >บช.บ. การบัญชี</option>
                     <option value="บธ.บ. การจัดการ">บธ.บ. การจัดการ</option>
                     <option value="บธ.บ. การตลาด">บธ.บ. การตลาด</option>
                     <option value="บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์">บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์</option>
                     <option value="ศศ.บ การท่องเที่ยวและการโรงแรม">ศศ.บ การท่องเที่ยวและารโรงแรม</option>
                     <option value="ศศ.บ ภาษาอังกฤษเพื่อการสื่อสารสากล">ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>
                     <option value="วท.บ. เทคโนโลยีสารสนเทศ">วท.บ. เทคโนโลยีสารสนเทศ</option>
                     <option value="คศ.บ. คหกรรมศาสตร์">คศ.บ. คหกรรมศาสตร์</option>
                     <option value="ค.อ.บ. วิศวกรรมเครื่องกล">ค.อ.บ. วิศวกรรมเครื่องกล</option>
                     <option value="วศ.บ. วิศวกรรมเครื่องกล">วศ.บ. วิศวกรรมเคื่องกล</option>
                     <option value="ค.อ.บ. วิศวกรรมเครื่องกล">ค.อ.บ. วิศวกรรมเครื่องกล</option>
                     <option value="วศ.บ. วิศวกรรมคอมพิวเตอร์">วศ.บ. วิศวกรรมคอมพิงเตอร์</option>
                     <option value="วศ.บ. วิศวกรรมไฟฟ้า">วศ.บ. วิศวกรรมไฟฟ้า</option>
                     <option value="วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์">วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์</option>
                     <option value="วศ.บ. วิศวกรรมโยธา">วศ.บ. วิศวกรรมโยธา</option>
                     <option value="ค.อ.บ วิศวกรรมอุตสาหการ">ค.อ.บ วิศวกรรมอุตสาหการ</option>
                     <option value="วศ.บ. วิศวกรรมอุตสาหการ">วศ.บ. วิศวกรรมอุตสาหการ</option>
                     <option value="ศบ.บ ออกแบบอุตสาหกรรม">ศบ.บ ออกแบบอุตสาหกรรม</option>
                     <option value="ทล.บ. ออกแบบอุตสาหกรรม">ทล.บ. ออกแบบอุตสาหกรรม</option> -->
                  </select>
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ปีการศึกษา</span>
                  <input type="number" name="year"  class="form-control" id="year" placeholder="ปีการศึกษา" value="{{$student->year}}" aria-describedby="sizing-addon1" required>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">กิจกรรม</span>
                  <input type="text" name="activities" class="form-control" id="activities" placeholder="สหกิจศึกษา" value="{{$student->activities}}" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ปีที่เข้าศึกษา</span>
                  <input type="number" name="year_study" value="{{$student->year_study}}"  class="form-control" id="year_study" placeholder="ปีที่เข้าศึกษา" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">ปีที่รับการฝึก</span>
                  <input type="number" name="class_year"  value="{{$student->class_year}}" class="form-control" id="class_year" placeholder="ปีที่รับการฝึก" aria-describedby="sizing-addon1" required>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยที่ผ่านมา</span>
                  <input type="text" name="gpa" value="{{$student->gpa}}"class="form-control" id="gpa" placeholder="เกรดเฉลี่ยที่ผ่านมา" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยสะสม</span>
                  <input type="text" name="gpa_past"  class="form-control" id="gpa_past" placeholder="เกรดเฉลี่ยสะสม" value="{{$student->gpa_past}}" aria-describedby="sizing-addon1" required>
               </div>
            </div>
            <div class="col-sm-4" >
               <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">เบอร์โทรศัพท์</span>
                  <input type="text" name="telephone"  value="{{$student->telephone}}" class="form-control" id="telephone" placeholder="เบอร์โทรศัพท์" aria-describedby="sizing-addon1" required>
               </div>
            </div>
         </div>
            <br>
            <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;">
               <p>ส่วนที่ 2 ข้อมูลสถานประกอบการ</p>
            </h3>
            <div class="row">
               <!-- row-I -->
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
               <div class="row">
                  <div class="col-sm-6 col-md-5"></div>
                     <button type="submit" class="btn btn-info">
                     <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก</button>
                     <!-- <button class="btn btn-danger" type="button"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button> -->
                  </div>
               </div>
            </div>
         </form>
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
@endsection
@section('javascript')
<script>
   $(document).ready(function() {
   
   });
</script>
@endsection