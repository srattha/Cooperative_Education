@extends('layouts.master')
@section('title','แก้ไขข้อมูลนักศึกษา')
@section('css')
@section('content')
<div class="container-fluid">
   <h2 style="text-align:center; font-size:24px;margin:40px 0;">
      <p style="margin: 0 0 5px;">แบบฟอร์มกรอกข้อมูล</p>
      <small>(นักศึกษา)</small>
   </h2>
   <div class="row">
      <div class="container" id="box">
         <div class="panel panel-info">
            <div class="panel-heading">จัดการข้อมูลนักศึกษาและสถานประกอบการ</div>
            <div class="panel-body">
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
                  <h4>ข้อมูลนักศึกษา</h4>
                  <!-----------row student--------------------------------->
                  <div class="row">
                     <!-- row-I -->
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ชื่อ-นามสกุล<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ชื่อ-นามสกุล" aria-describedby="sizing-addon1" required>  
                        </div>
                     </div>
                     <!-- </div> -->
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">คณะ<span style=" font-size: 18px;color: red;">*</span></span>
                           <select id="inputState" class="form-control">
                              <option selected>-กรุณาเลือกคณะ-</option>
                              <option>คณะบริหารธุรกิจและศิลปศาสตร์</option>
                              <option>คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
                              <option>คณะวิศวกรรมศาสตร์ </option>
                              <option>คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">สาขาวิชา<span style=" font-size: 18px;color: red;">*</span></span>
                           <select id="inputState" class="form-control">
                              <option selected>-กรุณาเลือกสาขาวิชา-</option>
                              <option>คณะบริหารธุรกิจและศิลปศาสตร์</option>
                              <option>คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
                              <option>คณะวิศวกรรมศาสตร์ </option>
                              <option>คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">รหัสนักศึกษา<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="รหัสนักศึกษา" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <!-- row-II -->
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ชื่อสถาบัน<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ชื่อสถาบัน" aria-describedby="sizing-addon1" required>  
                        </div>
                     </div>
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">วิทยาเขต<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="fullname" class="form-control" id="fullname" placeholder="วิทยาเขต" aria-describedby="sizing-addon1" required>  
                        </div>
                     </div>
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ปีการศึกษา<span style=" font-size: 18px;color: red;">*</span></span>
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
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ภาคเรียน<span style=" font-size: 18px;color: red;">*</span></span>
                           <select id="inputState" class="form-control">
                              <option selected>-กรุณาเลือกภาคเรียน-</option>
                              <option>1</option>
                              <option>2</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <!-- row-III -->
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">กิจกรรม<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="fullname" class="form-control" id="fullname" placeholder="กิจกรรม" aria-describedby="sizing-addon1" required>  
                        </div>
                     </div>
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ปีที่เข้าศึกษา<span style=" font-size: 18px;color: red;">*</span></span>
                           <select id="inputState" class="form-control">
                              <option selected>-กรุณาเลือกปีที่เข้าศึกษา-</option>
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
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ปีที่รับการฝึก<span style=" font-size: 18px;color: red;">*</span></span>
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
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยที่ผ่านมา<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="เกรดเฉลี่ยที่ผ่านมา" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <!-- row-IIII -->
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">เกรดเฉลี่ยสะสม<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="เกรดเฉลี่ยสะสม" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">เลขบัตรประชาชน<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="id_no" class="form-control" id="id_no" placeholder="เลขบัตรประชาชน" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ว/ด/ป เกิด</span>
                           <input type="text" name="birth" class="form-control" id="birth" placeholder="ว/ด/ป เกิด" aria-describedby="sizing-addon1" >
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">เบอร์โทรศัพท์<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="เบอร์โทรศัพท์" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                  </div>
                  <br>
                  <!-----------End row student-------------------------------->
                  <h4>ข้อมูลสถานประกอบการ</h4>
                  <!-----------row Establishment------------------------------>
                  <div class="row">
                     <!-- row-I -->
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ชื่อบริษัท<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ชื่อบริษัท" aria-describedby="sizing-addon1" required>  
                        </div>
                     </div>
                     <!-- </div> -->
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">เลขที่<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="address_no" class="form-control" id="address_no" placeholder="เลขที่" aria-describedby="sizing-addon1"> 
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">หมู่<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="address_village" class="form-control" id="address_village" placeholder="หมู่" aria-describedby="sizing-addon1"> 
                        </div>
                     </div>
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">นิคมอุตสาหกรรม<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="fullname" class="form-control" id="fullname" placeholder="นิคมอุตสาหกรรม" aria-describedby="sizing-addon1" required>  
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <!-- row-II -->
                     <div class="col-sm-3" >
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ตึก/อาคาร<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ตึก/อาคาร" aria-describedby="sizing-addon1" required>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ซอย/ถนน<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="address_alley" class="form-control" id="address_alley" placeholder="ซอย/ถนน" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ตำบล/แขวง<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="address_subdistrict" class="form-control" id="address_subdistrict" placeholder="ตำบล/แขวง" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">อำเภอ/เขต<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="address_district" class="form-control" id="address_district" placeholder="อำเภอ/เขต" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <!-- row-III -->
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">จังหวัด<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="address_province" class="form-control" id="address_province" placeholder="จังหวัด" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">รหัสไปรษณีย์<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="address_postcode" class="form-control" id="address_postcode" placeholder="รหัสไปรษณีย์" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">เบอร์โทรศัพท์<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="เบอร์โทรศัพท์" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">แฟกซ์<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="แฟกซ์" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">อีเมล<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="อีเมล" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">ชื่อผู้ติดต่อ<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ชื่อผู้ติดต่อ" aria-describedby="sizing-addon1" required> 
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="input-group input-group-sm">
                           <span class="input-group-addon" id="sizing-addon1">เบอร์โทรศัพท์ผู้ติดต่อ<span style=" font-size: 18px;color: red;">*</span></span>
                           <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="เบอร์โทรศัพท์ผู้ติดต่อ" aria-describedby="sizing-addon1">
                        </div>
                     </div>
                  </div>
                  <!---------- End row Establishment------------------------->
                  <br>
                  <!----------- button------------------------->
                  <div class="form-group">
                     <div class="center;">
                        <button type="submit" class="btn btn-info">
                        <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก
                        </button>
                        <button class="btn btn-danger" type="reset"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button>
                        <!-----------Print ------------------------->
                        <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                     </div>
                  </div>
                  <!-----------End button------------------------->
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   function myFunction() {
      window.print();
   }
</script>
<!--Upload flie-->
@endsection
@section('javascript')
@endsection