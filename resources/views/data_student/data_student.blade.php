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
</style>
@endsection
@section('content')
<div class="row">
<h2 style="text-align:center; font-size:24px;margin:40px 0;">
   <p style="margin: 0 0 5px;">แบบแจ้งรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา</p>
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
<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<h3>ส่วนที่ 1 ข้อมูลนักศึกษา</h3>
<!-----------row student--------------------------------->
<!----------- row I-------------------------------->
<div class="row">
   <!-- row-I -->
   <div class="col-sm-7" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ชื่อ-นามสกุล นาย/นางสาว</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder=" นาย/นางสาว ชื่อ-นามสกุล" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-5" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">เลขบัตรประชาชน</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="เลขบัตรประชาชน" aria-describedby="sizing-addon1" required>  
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
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="ชื่อสถาบัน" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
</div>
<br>
 <!-- row-III -->
<div class="row">
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">รหัสนักศึกษา</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="รหัสนักศึกษา" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">วิทยาเขต</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="วิทยาเขต" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ภาคเรียน</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="ภาคเรียน" aria-describedby="sizing-addon1" required>  
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
            <option>คณะบริหารธุรกิจและศิลปศาสตร์</option>
            <option>คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
            <option>คณะวิศวกรรมศาสตร์ </option>
            <option>คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
         </select>
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ปีการศึกษา</span>
         <select id="inputState" class="form-control">
            <option selected>-กรุณาเลือกปีการศึกษา-</option>
            <option>2562</option>
            <option>2563</option>
            <option>2564</option>
            <option>2565</option>
            <option>2566</option>
            <option>2567</option>
            <option>2568</option>
            <option>2569</option>
            <option>2570</option>
            <option>2571</option>
         </select>
      </div>
   </div>
</div>
<br>
 <!-- row-IIIII -->
<div class="row">
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">กิจกรรม</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="กิจกรรม" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ปีที่เข้าศึกษา</span>
         <select id="inputState" class="form-control">
            <option selected>-กรุณาเลือกปีที่เข้าศึกษา-</option>
            <option>2559</option>
            <option>2560</option>
            <option>2561</option>
            <option>2562</option>
            <option>2563</option>
            <option>2564</option>
            <option>2565</option>
            <option>2566</option>
            <option>2567</option>
            <option>2568</option>
            <option>2569</option>
            <option>2570</option>
            <option>2571</option>
         </select>
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ปีที่รับการฝึก</span>
         <select id="inputState" class="form-control">
         <option selected>-กรุณาเลือกปีที่รับการฝึก-</option>
         <option>2562</option>
         <option>2563</option>
         <option>2564</option>
         <option>2565</option>
         <option>2566</option>
         <option>2567</option>
         <option>2568</option>
         <option>2569</option>
         <option>2570</option>
         <option>2571</option>
         </select>
      </div>
   </div>
</div>
<br>
 <!-- row-IIIIII -->
<div class="row">
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยที่ผ่านมา</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="เกรดเฉลี่ยที่ผ่านมา" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยสะสม</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="เกรดเฉลี่ยสะสม" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">เบอร์โทรศัพท์</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="เบอร์โทรศัพท์" aria-describedby="sizing-addon1" required>  
      </div>
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
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder=" ชื่อบริษัท" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-6" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">นิคมอุตสาหกรรม</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="นิคมอุตสาหกรรม" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
</div>
<br>
 <!-- row-II -->
<div class="row">
   <div class="col-sm-3" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ที่อยู่</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder=" ที่อยู่" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-3" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">หมู</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="หมู" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-6" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ตึก/อาคาร</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="ตึก/อาคาร" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
</div>
<br>
 <!-- row-III -->
<div class="row">
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ซอย/ถนน</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder=" ซอย/ถนน" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ตำบล/แขวง</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="ตำบล/แขวง" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">อำเภอ/เขต</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="อำเภอ/เขต" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
</div>
<br>
 <!-- row-IIII -->
<div class="row">
   <div class="col-sm-3" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">จังหวัด</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder=" จังหวัด" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-3" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">รหัสไปรษณีย์</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="รหัสไปรษณีย์" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-3" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">โทรศัพท์</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="โทรศัพท์" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-3" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">แฟกซ์</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="แฟกซ์" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
</div>
<br>
<!-- row-IIIII -->
<div class="row">
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">อีเมล</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder=" อีเมล" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">ชื่อผู้ติดต่อ</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="ชื่อผู้ติดต่อ" aria-describedby="sizing-addon1" required>  
      </div>
   </div>
   <div class="col-sm-4" >
      <div class="input-group input-group-sm">
         <span class="input-group-addon" id="sizing-addon1">เบอร์โทรผู้ติดต่อ</span>
         <input type="text"name="fullname" class="form-control" id="fullname" placeholder="เบอร์โทรผู้ติดต่อ" aria-describedby="sizing-addon1" required>  
      </div>
   </div>

   <!-- END row -->
@endsection
@section('javascript')
@endsection
