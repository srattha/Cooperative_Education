@extends('admin.layouts.master')
@section('title','เพิ่มข้อมูลสถานประกอบการ')
@section('css')
@endsection
@section('content')
<br>
<div class="row">
   <div class="panel panel-default"> 
      <div class="panel-heading">
         <h1>จัดการข้อมูลสถานประกอบการ</h1>
      </div>
      <div class="panel-body">
         @if (Session::has('success'))
         <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('success') }}</p>
         </div>
         @endif
         <form  action="{{ url('create_establishment') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <!-- row-I -->
               <div class="col-sm-6" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ชื่อบริษัท</span>
                     <input type="text" name="company_name" class="form-control" id="company_name" placeholder=" ชื่อบริษัท"  aria-describedby="sizing-addon1" required>
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
                     <button class="btn btn-danger" type="button"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection
@section('javascript')
<script>
   $(document).ready(function() {
   
   });
</script>
@endsection