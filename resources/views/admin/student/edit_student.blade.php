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
         <h3 style="color:#4e4e4e; font-weight:600; font-size: 18px;"> ข้อมูลนักศึกษา</h3>
         <br>
         <form  action="{{ url('editstudent') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id"  value="{{$student->id}}">
            <input type="hidden" name="student_id" value="{{$student->student_id}}">
            <div class="row">
               <!-- row-I -->
               <div class="col-sm-7" >
                  <div class="input-group input-group-sm">
                     <span class="input-group-addon" id="sizing-addon1">ชื่อ-สกุล </span>
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
                     <select id="major" name="major"
                        class="form-control">
                        <!-- <option selected>-กรุณาเลือกสาขาวิชา-</option> -->
                        <option id="branch" value="{{ $branch->id }}">{{ $branch->name }}</option>
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
            <div class="row">
               <div class="col-sm-6 col-md-5"></div>
               <button type="submit" class="btn btn-info">
               <i class="fa fa-floppy-o " aria-hidden="true"></i> บันทึก</button>
               <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalalert"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button>
            </div>
         </div>
      </form>
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
    $('#faculty').change(function(){
      var faculty = $(this).val();
   $('#major').empty();
      $.post("/api/faculty",{id:faculty}, function( res ) {
        if(res){
          // $("#major option:selected").prop("selected", false);
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
   
   });
</script>
@endsection