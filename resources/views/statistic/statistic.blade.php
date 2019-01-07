<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>รายงานนักศึกษาในโครงการสหกิจศึกษา</title>
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://regis2015.rmutl.ac.th/assets/image/touch/apple-touch-icon-144.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://regis2015.rmutl.ac.th/assets/image/touch/apple-touch-icon-114.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://regis2015.rmutl.ac.th/assets/image/touch/apple-touch-icon-72.png">
      <link rel="apple-touch-icon-precomposed" href="http://regis2015.rmutl.ac.th/assets/image/touch/apple-touch-icon-57.png">
      <link rel="shortcut icon" href="http://regis2015.rmutl.ac.th/assets/image/favicon.png">
      <link href="{{asset('css/morris.css')}}" rel="stylesheet">
      <!-- Plugins stylesheet : optional -->
      <link rel="stylesheet" href="http://regis2015.rmutl.ac.th/assets/plugins/datatables/css/datatables.css" type="text/css" />
      <link rel="stylesheet" href="http://regis2015.rmutl.ac.th/assets/plugins/datetimepicker/css/jquery.datetimepicker.css" type="text/css" />
      <link rel="stylesheet" href="http://regis2015.rmutl.ac.th/assets/css/jquery-ui.min.css" type="text/css" />
      <!--/ Plugins stylesheet : optional -->
      <!-- Application stylesheet : mandatory -->
      <link rel="stylesheet" href="http://regis2015.rmutl.ac.th/assets/css/bootstrap.css" type="text/css" />
      <link rel="stylesheet" href="http://regis2015.rmutl.ac.th/assets/css/layout.css" type="text/css" />
      <link rel="stylesheet" href="http://regis2015.rmutl.ac.th/assets/css/uielement.css" type="text/css" />
      <link rel="stylesheet" href="http://regis2015.rmutl.ac.th/assets/css/animate.css" type="text/css" />
      <!--/ Application stylesheet -->
      <!-- Application and main script : mandatory -->
      <script type="text/javascript" src="http://regis2015.rmutl.ac.th/assets/plugins/modernizr/js/modernizr.js" ></script>
      <script type="text/javascript" src="http://regis2015.rmutl.ac.th/assets/js/vendor.js" ></script>
      <script type="text/javascript" src="http://regis2015.rmutl.ac.th/assets/js/core.js" ></script>
      <script type="text/javascript" src="http://regis2015.rmutl.ac.th/assets/js/backend/app.js" ></script>
      <!--/ Application and main script : mandatory -->
      <!-- Plugins and page level script : optional -->
      <script type="text/javascript" src="http://regis2015.rmutl.ac.th/assets/plugins/datatables/js/jquery.dataTables.min.js" ></script>
      <script type="text/javascript" src="http://regis2015.rmutl.ac.th/assets/plugins/datatables/js/dataTables.bootstrap.js" ></script>
      <script type="text/javascript" src="http://regis2015.rmutl.ac.th/assets/plugins/parsley/js/parsley.min.js" ></script>
      <script type="text/javascript" src="http://regis2015.rmutl.ac.th/assets/plugins/datetimepicker/js/jquery.datetimepicker.js" ></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <!--/ Plugins and page level script : optional -->
   </head>
   <body>
      <input type="hidden" id="service_base_url" value="http://regis2015.rmutl.ac.th/" />
      <header id="header" class="navbar">
         <div class="navbar-header">
            <a class="navbar-brand" href="javascript:void(0);">
            <span class="logo-figure"></span>
            <span class=""></span>
            </a>
         </div>
         <div class="navbar-toolbar clearfix">
            <ul class="nav navbar-nav navbar-left">
               <li class="hidden-xs hidden-sm">
                  <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                  <span class="meta">
                  <span class=""></span>
                  </span>
                  </a>
               </li>
               <li class="navbar-main hidden-lg hidden-md hidden-sm">
                  <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                  <span class="meta">
                  <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                  </span>
                  </a>
               </li>
               <li>
                  <a href="javascript:void(0);">
                  <span class="meta hidden-lg">
                  <span class="text" style="font-size: 14px;">ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก )</span> 
                  </span>
                  <span class="meta hidden-xs hidden-sm hidden-md">
                  <span class="text" style="font-size: 15px;" href="{{('/index') }}">{{ __('ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก ') }}</span>
                  </span>
                  </a>
               </li>
            </ul>
         </div>
      </header>
      <!-- <aside class="sidebar sidebar-left sidebar-menu">
         <section class="content slimscroll">
            <h5 class="heading"><i class="ico-book3"></i>&nbsp;&nbsp;รายวิชาที่เปิดสอน</h5>
            <ul class="topmenu topmenu-responsive" data-toggle="menu">
               <li class="">
                  <a href="http://regis2015.rmutl.ac.th/course/c01course"  data-toggle="tooltip" data-placement="top" data-original-title="C01 ค้นหารายวิชาที่เปิดสอน">
                  <span class="figure"><i class="ico-double-angle-right"></i></span>
                  <span class="text">C01 ค้นหารายวิชาที่เปิดสอน</span>
                  </a>
               </li>
               <li class="">
                  <a href="http://regis2015.rmutl.ac.th/course/c02courseteacher"  data-toggle="tooltip" data-placement="top" data-original-title="C02 รายวิชาตามผู้สอน">
                  <span class="figure"><i class="ico-double-angle-right"></i></span>
                  <span class="text">C02 รายวิชาตามผู้สอน</span>
                  </a>
               </li>
               <li class="">
                  <a href="http://regis2015.rmutl.ac.th/course/c03courselevel"  data-toggle="tooltip" data-placement="top" data-original-title="C03 รายวิชาตามระดับ">
                  <span class="figure"><i class="ico-double-angle-right"></i></span>
                  <span class="text">C03 รายวิชาตามระดับ</span>
                  </a>
               </li>
               <li class="">
                  <a href="http://regis2015.rmutl.ac.th/course/c04studylist"  data-toggle="tooltip" data-placement="top" data-original-title="C04 ใบรายชื่อ เข้าห้องเรียน/เข้าห้องสอบ">
                  <span class="figure"><i class="ico-double-angle-right"></i></span>
                  <span class="text">C04 ใบรายชื่อ เข้าห้องเรียน/เข้าห้องสอบ</span>
                  </a>
               </li>
               <li class="active">
                  <a href="http://regis2015.rmutl.ac.th/course/c05coursereport"  data-toggle="tooltip" data-placement="top" data-original-title="C05 รายงานการลงทะเบียนของนักศึกษา">
                  <span class="figure"><i class="ico-double-angle-right"></i></span>
                  <span class="text">C05 รายงานการลงทะเบียนของนักศึกษา</span>
                  </a>
               </li>
               <li class="">
                  <a href="http://regis2015.rmutl.ac.th/course/c06calendar"  data-toggle="tooltip" data-placement="top" data-original-title="C06 ปฏิทินการศึกษา">
                  <span class="figure"><i class="ico-double-angle-right"></i></span>
                  <span class="text">C06 ปฏิทินการศึกษา</span>
                  </a>
               </li>
            </ul>
         </section>
         </aside> -->
      <section id="main" role="main">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h3 class="panel-title"><i class=""></i>รายงานนักศึกษาในโครงการสหกิจศึกษา </h3>
                     </div>
                     <!--  <div class="panel-body">
                        <div class="form-horizontal">
                           <div class="form-group">
                              <label class="col-md-4 control-label">คณะ : </label>
                              <div class="col-md-4">
                                <select id="select_campus" class="form-control">
                                    <option value="1">คณะบริหารธุรกิจและศิลปศาสตร์</option>
                                    <option value="2">คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร</option>
                                    <option value="3">คณะวิศวกรรมศาสตร์</option>
                                    <option value="4">คณะศิลปกรรมและสถาปัตยกรรมศาสตร์</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">เทอม : </label>
                              <div class="col-md-4">
                                 <select id="select_term_year" class="form-control">
                                    <option value="1" >1 </option>
                                    <option value="2" >2 </option>
                                    <option value="3/2562" >3 / 2562</option>
                                    <option value="2/2562" >2 / 2562</option>
                                    <option value="1/2562" >1 / 2562</option>
                                    <option value="3/2561" >3 / 2561</option>
                                    <option value="2/2561" selected>2 / 2561</option>
                                    <option value="1/2561" >1 / 2561</option>
                                    <option value="3/2560" >3 / 2560</option>
                                    <option value="2/2560" >2 / 2560</option>
                                    <option value="1/2560" >1 / 2560</option>
                                    <option value="3/2559" >3 / 2559</option>
                                    <option value="2/2559" >2 / 2559</option>
                                    <option value="1/2559" >1 / 2559</option>
                                    <option value="3/2558" >3 / 2558</option>
                                    <option value="2/2558" >2 / 2558</option>
                                    <option value="1/2558" >1 / 2558</option>
                                    <option value="2/2557" >2 / 2557</option>
                                    <option value="1/2557" >1 / 2557</option>
                                    <option value="1/2556" >1 / 2556</option>
                                    <option value="2/2555" >2 / 2555</option> 
                                 </select>
                              </div>
                           </div>
                           <div id="message_fill_course_search" class="form-group text-center" style="display:none;">
                              <span class="badge badge-info"><i class="ico-info-sign mr5"></i>กรุณากรอกข้อมูลวิชาที่จะค้นหา 5 ตัวขึ้นไป</span>
                              </div>
                           <div class="text-center">
                              <button class="btn btn-primary" onclick="ajaxCourseList();"><i class=""></i>ค้นหา</button>
                           </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div> -->
                     <!-- กราฟ-->
                     <div id="ajax_1" class="row">
                        <div class="col-md-12">
                           <div class="panel panel-default">
                              <div class="panel-body">
                                 <div id="donut-example"></div>
                                 <?php 
                                    $arr = array(
                                        array('test1', 10),
                                        array('test2', 25)
                                    );
                                    ?>
                                 <script type="text/javascript">
                                    Morris.Donut({
                                        element: 'donut-example',
                                        data: [
                                          { label: "{{ $arr[0][0] }}", value: {{ $arr[0][1] }} },
                                          { label: "In-Store Sales", value: 30 }
                                        ]
                                    });
                                 </script>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--<div id="ajax_2" class="row" style="display: none;">
                        <div class="col-md-12">
                           <div class="panel panel-default">
                           </div>
                        </div>
                     </div>
                     <div id="for_modal_department"></div>  -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="{{asset('js/morris-data.js')}}"></script>
      <script>
         /* var service_base_url = $('#service_base_url').val();
          
          $('#course_search').keypress(function (event) {
              if (event.which === 13) {
                  ajaxCourseList();
              }
          });
          
          function modalCheckRegis(cam, maj, y, t, pick) {
              var url = service_base_url + 'course/c05coursereport/modalregistrationlist';
              $.ajax({
                  url: url,
                  type: 'post',
                  data: {
                      campus_id_pri: cam,
                      major_id_pri: maj,
                      year: y,
                      term: t,
                      pick: pick
                  },
                  success: function (response) {
                      $('#for_modal_department').html(response);
                      $('#modal_department').modal('show', {backdrop: 'true'});
                  }
              });
          }
          
          function back_to_1() {
              $('#ajax_2').attr('style', 'animation:fadeOutRight 0.4s');
              setTimeout(function () { //หน่วงเพื่อ fade Out ให้จบ
                  $('#ajax_2').removeAttr('style', 'animation:fadeOutRight 0.4s');
                  $('#ajax_2').hide();
                  $('#ajax_1').attr('style', 'animation:fadeInLeft 0.4s');
                  setTimeout(function () { //หน่วงเพื่อ fade In ให้จบ
                      $('#ajax_1').removeAttr('style', 'animation:fadeInLeft 0.4s');
                  }, 400);
              }, 400);
          }
          
          function ajaxDepartmentRegis(cam, fac, y, t) {
              $('#for_progress').show();
              setTimeout(function () {
                  $('#load').attr('style', 'width:40%');
              }, 400);
              var url = service_base_url + 'course/c05coursereport/tablemajorlist';
              $.ajax({
                  url: url,
                  type: 'post',
                  data: {
                      campus_id_pri: cam,
                      faculty_id_pri: fac,
                      year: y,
                      term: t
                  },
                  success: function (response) {
                      $('table#table_major_list tbody').html(response);
                      setTimeout(function () { //หน่วงเพื่อให้ ยัด response ทันเวลา
                          $('#load').attr('style', 'width:100%');
                          setTimeout(function () { //หน่วงเพื่อ load progress bar จนครบ 100%
                              $('#ajax_1').attr('style', 'animation:fadeOutLeft 0.4s');
                              setTimeout(function () { //หน่วงเพื่อ fade Out ให้จบ
                                  $('#ajax_1').removeAttr('style', 'animation:fadeOutLeft 0.4s');
                                  $('#ajax_1').hide();
                                  $('#ajax_2').attr('style', 'animation:fadeInRight 0.4s');
                                  setTimeout(function () { //หน่วงเพื่อ fade In ให้จบ
                                      $('#for_progress').hide();
                                      $('#load').attr('style', 'width:0%');
                                      $('#ajax_2').removeAttr('style', 'animation:fadeInRight 0.4s');
                                  }, 400);
                              }, 400);
                          }, 400);
                      }, 400);
                  }
              });
              var url2 = service_base_url + 'course/c05coursereport/getcfdetail';
              $.ajax({
                  url: url2,
                  type: 'post',
                  data: {
                      campus_id_pri: cam,
                      faculty_id_pri: fac
                  },
                  success: function (response) {
                      var res = response.split("/"); //#3a4049
                      $('#for_show_faculty').html('<div class="col-md-12"><span style="color: #42C7A4;"><strong>เขตพื้นที่ : </strong></span>' + res[0] + '</div><div class="col-md-12"><span style="color: #42C7A4;"><strong>คณะ : </strong></span>' + res[1] + '</div>');
                  }
              });
          }
          
          function ajaxCourseList() {
              $('#ajax_2').hide();
              $('table#table_faculty_list tbody').html('');
              $('#show_wait').html('<div style="text-align:center;margin-top:50px;padding:100px;"><img src="' + service_base_url + 'assets/image/preloader.gif" /></div>');
              $('#show_wait').show();
              var str = $('#select_term_year').val();
              var cam = $('#select_campus').val();
              var res = str.split("/");
              var url = service_base_url + 'course/c05coursereport/tablefacultylist';
              $.ajax({
                  url: url,
                  data: {
                      term: res[0],
                      year: res[1],
                      campus: cam
                  },
                  type: 'post',
                  success: function (response) {
                      $('#show_wait').hide();
                      $('#show_wait').html('');
                      $('table#table_faculty_list tbody').html(response);
                      $('#ajax_1').fadeIn();
                  }
              });
          }*/
          
      </script>
      <!--<div class="modal fade" id="modal_ajax">
         <div class="modal-dialog">
            <div class="modal-content">
            </div>
         </div>
         </div>-->
      <div class="modal fade" id="modal_ajax_lg">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
            </div>
         </div>
      </div>
      <div style="padding-bottom: 50px;"></div>
      <footer id="footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6">
                  <p class="nm text-muted">&copy; 2018-Cooperative Education</i></p>
                  Deverloped By Patiphan Uthang And Yuwa Saewang </p>
               </div>
            </div>
         </div>
      </footer>
      <!--<a href="#" id="gotop_btn" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
         <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87588904-26"></script>
      <script>
         /*  window.dataLayer = window.dataLayer || [];
           function gtag(){dataLayer.push(arguments);}
           gtag('js', new Date());
           
           gtag('config', 'UA-87588904-26');*/
      </script>
   </body>
</html>