@extends('student.master')
@section('title','ค้นหาสถานประกอบการ')
@section('css')
@endsection
@section('content')
<div class="container-fluid panel panel-default" style="margin-top: -20px;">
  <h4 style="margin-top: 50px; color: #3F51B5; font-weight: bold"> ค้นหาสถานประกอบการ</h4>
  <hr>
   <div class="row" style="margin-top: 30px;">
      <form action="{{ route('search_report') }}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="col-sm-3 col-md-3">
            <div class="input-group input-group-sm">
               <span class="input-group-addon">คณะ</span>
               <!--  <select  name="faculty" class="form-control">
                  <option selected value="">-กรุณาเลือกคณะ-</option>
                  <option value="คณะบริหารธุรกิจและศิลปศาสตร์">คณะบริหารธุรกิจและศิลปศาสตร์</option>
                  <option value="คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร">คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
                  <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์ </option>
                  <option value="คณะศิลปกรรมและสถาปัตยกรรมศาสตร์">คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
                  </select> -->
               <select id="faculty" name="faculty" class="form-control">
                  <option selected>-กรุณาเลือกคณะ-</option>
                  @foreach ($faculty as $index => $f)
                  <option value="{{$f->id}}">{{$f->name}}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-sm-3 col-md-3" >
            <div class="input-group input-group-sm">
               <span class="input-group-addon">สาขาวิชา</span>
               <!--  <select name="major" class="form-control">
                  <option selected value="">-กรุณาเลือกสาขาวิชา-</option>
                  <option value="บช.บ. การบัญชี">บช.บ. การบัญชี</option>
                  <option value="บธ.บ. การจัดการ">บธ.บ. การจัดการ</option>
                  <option value="บธ.บ. การตลาด">บธ.บ. การตลาด</option>
                  <option value="บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์">บธ.บ. ระบบสารสนเทศทางคอมพิวเตอร์</option>
                  <option value="ศศ.บ การท่องเที่ยวและารโรงแรม">ศศ.บ การท่องเที่ยวและารโรงแรม</option>
                  <option value="ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล">ศศ.บ ภาษาอังกฤตเพื่อการสื่อสารสากล</option>
                  <option value="วท.บ. เทคโนโลยีสารสนเทศ">วท.บ. เทคโนโลยีสารสนเทศ</option>
                  <option value="คศ.บ. คหกรรมศาสตร์">คศ.บ. คหกรรมศาสตร์</option>
                  <option value="วศ.บ. วิศวกรรมเคื่องกล">วศ.บ. วิศวกรรมเคื่องกล</option>
                  <option value="ค.อ.บ. วิศวกรรมเครื่องกล">ค.อ.บ. วิศวกรรมเครื่องกล</option>
                  <option value="วศ.บ. วิศวกรรมคอมพิงเตอร์">วศ.บ. วิศวกรรมคอมพิงเตอร์</option>
                  <option value="วศ.บ. วิศวกรรมไฟฟ้า">วศ.บ. วิศวกรรมไฟฟ้า</option>
                  <option value="วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์">วศ.บ. วิศวะกรรมอิเล็กทรอนิกส์</option>
                  <option value="วศ.บ. วิศวกรรมโยธา">วศ.บ. วิศวกรรมโยธา</option>
                  <option value="ค.อ.บ วิศวกรรมอุตสาหการ">ค.อ.บ วิศวกรรมอุตสาหการ</option>
                  <option value="วศ.บ. วิศวกรรมอุตสาหการ">วศ.บ. วิศวกรรมอุตสาหการ</option>
                  <option value="ศบ.บ ออกแบบอุตสาหกรรม">ศบ.บ ออกแบบอุตสาหกรรม</option>
                  <option value="ทล.บ. ออกแบบอุตสาหกรรม">ทล.บ. ออกแบบอุตสาหกรรม</option>
                  </select> -->
               <select id="major" name="major"
                  class="form-control">
                  <option selected>-กรุณาเลือกสาขาวิชา-</option>
               </select>
            </div>
         </div>
         <div class="col-sm-3 col-md-3" >
            <div class="input-group input-group-sm">
               <span class="input-group-addon" id="sizing-addon1">ปีการศึกษา</span>
               <input type="text" id="datepicker" / name="year" class="form-control"  placeholder="ปีการศึกษา" aria-describedby="sizing-addon1">
            </div>
         </div>
         <!--<div class="col-sm-2 col-md-2">
            <div class="input-group input-group-sm">
               <span class="input-group-addon">ภาคเรียน</span>
               <select name="term" class="form-control">
                  <option selected value="">-กรุณาเลือกภาคเรียน-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
               </select>
            </div>
            </div> -->
         <div class="col-sm-1 col-md-3">
            <div class="input-group input-group-sm">
               <button type="submit" class="btn btn-info">
               <i class="glyphicon glyphicon-search " aria-hidden="true"></i> ค้นหา</button>
            </div>
         </div>
      </form>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-12">
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
</div>
<footer class="footer">
  <div class="col-md-12" style="margin-top: 50px">
      <span class="footer-divider" style="height: 5px;
      display: block;
      background: #3F51B5;"></span>
      <div class="container" style="margin-top: 20px;">
         <div class="col-sm-6">
            <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
         Deverloped By Patiphan Uthang And Yuwa Saewang
         </div>
      </div>
      <div class="col-md-12" style="margin-top: 50px">
   </footer>
@endsection
@section('javascript')
<script type="text/javascript">
   $(document).ready(function() {
    $('#faculty').change(function(){
   
      var faculty = $(this).val();
      var $select = $('#major');
      $.post("/api/faculty",{id:faculty}, function( res ) {
   
       if(res.length){
   
          $.each(res,function(key, value)
          {
             $select.append('<option value=' + value.id + '>' + value.name + '</option>');
          });
       //  $.each(res, function(key, value) {
       //    $('#major')
       //    .append($("<option></option>")
       //       .attr("value",value.id)
       //       .text(value.name));
       // });
   
    }else{
      $select.find('option').remove();
   
   }
   });
   });
   $("#datepicker").datepicker({
     format: "yyyy",
     viewMode: "years",
     minViewMode: "years"
   });
   });
</script>
@endsection