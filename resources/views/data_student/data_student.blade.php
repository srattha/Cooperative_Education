@extends('student.master')
@section('title','จัดการข้อมูลสมาชิก')
@section('css')
<style type="text/css" media="screen">
   .form-control{
   background: none;
   border-top-width: 0px;
   border-right-width: 0px;
   border-bottom-width: 1px;
   border-left-width: 0px;
   box-shadow: none
   }
</style>
@endsection
@section('content')
<div class="row">
<div class="row">
<h2 style="text-align:center; font-size:24px;margin:40px 0;">
   <p style="margin: 0 0 5px;">แบบฟอร์มกรอกข้อมูล</p>
   <small>(นักศึกษา)</small>
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
   <h3>ข้อมูลนักศึกษา</h3>
   <!-----------row student--------------------------------->
   <!----------- row I-------------------------------->
   <div class="form-group">
      <div class="col-sm-3" >
         <label for="name">ชื่อ-นามสกุล <span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ชื่อ-นามสกุล" aria-describedby="sizing-addon1" required> 
      </div>
      <div class="col-sm-3" >
         <label for="name"> คณะ<span style="font-size: 18px;color: red;">*</span></label>
         <select id="inputState" class="form-control">
            <option selected>-กรุณาเลือกคณะ-</option>
            <option>คณะบริหารธุรกิจและศิลปศาสตร์</option>
            <option>คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
            <option>คณะวิศวกรรมศาสตร์ </option>
            <option>คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
         </select>
      </div>
      <div class="col-sm-3" >
         <label for="name"> สาขาวิชา<span style="font-size: 18px;color: red;">*</span></label>
         <select id="inputState" class="form-control">
            <option selected>-กรุณาเลือกสาขาวิชา-</option>
            <option>คณะบริหารธุรกิจและศิลปศาสตร์</option>
            <option>คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
            <option>คณะวิศวกรรมศาสตร์ </option>
            <option>คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
         </select>
      </div>
      <div class="col-sm-3" >
         <label for="name">รหัสนักศึกษา <span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="รหัสนักศึกษา" aria-describedby="sizing-addon1" required>
      </div>
   </div>
   <p>
      <!----------- row II-------------------------------->
   <div class="form-group">
      <div class="col-sm-3" >
         <label for="name">ชื่อสถาบัน <span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ชื่อสถาบัน" aria-describedby="sizing-addon1" required> 
      </div>
      <div class="col-sm-3" >
         <label for="name">วิทยาเขต <span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="วิทยาเขต" aria-describedby="sizing-addon1" required> 
      </div>
      <div class="col-sm-3" >
         <label for="name"> ปีการศึกษา<span style="font-size: 18px;color: red;">*</span></label>
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
      <div class="col-sm-3" >
         <label for="name"> ภาคเรียน<span style="font-size: 18px;color: red;">*</span></label>
         <select id="inputState" class="form-control">
            <option selected>-กรุณาเลือกภาคเรียน-</option>
            <option>1</option>
            <option>2</option>
         </select>
      </div>
   </div>
   <p>
      <!----------- row III-------------------------------->
   <div class="form-group">
      <div class="col-sm-3" >
         <label for="name">กิจกรรม <span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="กิจกรรม"sizing-addon1" required> 
      </div>
      <div class="col-sm-3" >
         <label for="name"> ปีที่เข้าศึกษา<span style="font-size: 18px;color: red;">*</span></label>
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
      <div class="col-sm-3" >
         <label for="name"> ปีที่รับการฝึก<span style="font-size: 18px;color: red;">*</span></label>
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
      <div class="col-sm-3" >
         <label for="name">เกรดเฉลี่ยที่ผ่านมา <span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="เกรดเฉลี่ยที่ผ่านมา" aria-describedby="sizing-addon1" required>
      </div>
   </div>
   <p>
      <!----------- row IIII-------------------------------->
   <div class="form-group">
      <div class="col-sm-3" >
         <label for="name">เกรดเฉลี่ยสะสม <span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="เกรดเฉลี่ยสะสม" aria-describedby="sizing-addon1" required>
      </div>
      <div class="col-sm-3" >
         <label for="name">เลขบัตรประชาชน <span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="เลขบัตรประชาชน" aria-describedby="sizing-addon1" required>
      </div>
      <div class="col-sm-3" >
         <label for="name">ว/ด/ป เกิด<span style="font-size: 18px;color: red;">*</span></label>
         <input type='date' class="form-control"id="meeting" name="birthday" required title="ว/ด/ปี เกิด" value="{{ old('birthday') }}" />
      </div>
      <div class="col-sm-3" >
         <label for="name">เบอร์โทรศัพท์<span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="เบอร์โทรศัพท์" aria-describedby="sizing-addon1" required>
      </div>
   </div>
   <br> 
   <!-----------End row -------------------------------->
   <h3>ข้อมูลสถานประกอบการ</h3>
   <!-----------row I------------------------------>
   <div class="form-group">
      <div class="col-sm-3" >
         <label for="name">ชื่อบริษัท<span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ชื่อบริษัท" aria-describedby="sizing-addon1" required>
      </div>

      <div class="col-sm-3" >
         <label for="name">เลขที่<span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="เลขที่" aria-describedby="sizing-addon1" required>
      </div>

      <div class="col-sm-3" >
         <label for="name">หมู่<span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="หมู่"  aria-describedby="sizing-addon1" required>
      </div>
      <div class="col-sm-3" >
         <label for="name">นิคมอุตสาหกรรม<span style="font-size: 18px;color: red;">*</span></label>
         <input type="text" name="fullname" class="form-control" id="fullname" placeholder="นิคมอุตสาหกรรม" aria-describedby="sizing-addon1" required>
      </div>
   </div>
   <p>
      <!-----------row II------------------------------>
   <div class="form-group">
   <div class="col-sm-3" >
      <label for="name">ตึก/อาคาร<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ตึก/อาคาร" aria-describedby="sizing-addon1" required>
   </div>
   <div class="col-sm-3" >
      <label for="name">ซอย/ถนน<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ซอย/ถนน" aria-describedby="sizing-addon1" required>
   </div>
   <div class="col-sm-3" >
      <label for="name">ตำบล/แขวง<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ตำบล/แขวง" aria-describedby="sizing-addon1" required>
   </div>
   <div class="col-sm-3" >
      <label for="name">อำเภอ/เขต<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="อำเภอ/เขต" aria-describedby="sizing-addon1" required>
   </div>
   </div>
   <p>
      <!-----------row III------------------------------>
   <div class="form-group">
   <div class="col-sm-3" >
      <label for="name">จังหวัด<span style="font-size: 18px;color: red;">*</span>
      </label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="จังหวัด" aria-describedby="sizing-addon1" required>
   </div>
   <div class="col-sm-3" >
      <label for="name">รหัสไปรษณีย์<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="รหัสไปรษณีย์" aria-describedby="sizing-addon1" required>
   </div>
   <div class="col-sm-3" >
      <label for="name">โทรศัพท์<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="โทรศัพท์" aria-describedby="sizing-addon1" required>
   </div>
   <div class="col-sm-3" >
      <label for="name">แฟกซ์<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="แฟกซ์" aria-describedby="sizing-addon1" required>
   </div>
   </div>
   <p>
      <!-----------row IIII------------------------------>
   <div class="form-group">
   <div class="col-sm-3" >
      <label for="name">อีเมล<span style="font-size: 18px;color: red;">*</span>
      </label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="อีเมล" aria-describedby="sizing-addon1" required>
   </div>
   <div class="col-sm-3" >
      <label for="name">ชื่อผู้ติดต่อ<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="รหัสไปรษณีย์" aria-describedby="sizing-addon1" required>
   </div>
   <div class="col-sm-3" >
      <label for="name">เบอร์โทรศัพท์ผู้ติดต่อ<span style="font-size: 18px;color: red;">*</span></label>
      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="เบอร์โทรศัพท์ผู้ติดต่อ" aria-describedby="sizing-addon1" required>
   </div>
   </div>
   <br>
   </div>
   <!----------- button------------------------->
   <div class="form-group">
      <div class="container" style="">
            <button type="submit" class="btn btn-info">
               <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก
            </button>
            <button class="btn btn-danger" type="reset"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button>
      </div>
   </div>
</form>
@endsection
@section('javascript')
@endsection