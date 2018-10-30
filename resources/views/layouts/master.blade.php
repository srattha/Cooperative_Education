<!doctype html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <style type="text/css"></style>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="/img/g1.jpg"/>
      <title>@yield('title')</title>
      <!-- Bootstrap Core CSS -->
      <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('/vendor/bootstrapdatapicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
      <!-- MetisMenu CSS -->
      <link href="{{ asset('/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
      <!-- Toastr CSS -->
      <link href="{{ asset('/vendor/toastr/css/toastr.min.css') }}" rel="stylesheet">
      <link href="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
      <!-- DataTables Responsive CSS -->
      <link href="{{ asset('/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="{{ asset('/assets/css/sb-admin-2.css') }}" rel="stylesheet">
      <!-- Morris Charts CSS -->
      <link href="{{ asset('/vendor/morrisjs/morris.css') }}" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
      <!-- styel Css -->
      <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('/assets/css/lightbox.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">
      <!-- jQuery -->
      <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- <script src="{{ asset('/vendor/bootstrap/js/bootstrap-datetimepicker.min.js') }}"></script> -->
      <script src="{{ asset('/vendor/moment/moment.min.js') }}"></script>
      <script src="{{ asset('/vendor/bootstrapdatapicker/bootstrapdatetimepicker.min.js') }}"></script>
      <!-- Metis Menu Plugin JavaScript -->
      <script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>
      <!-- Toastr JavaScript -->
      <script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script>
      <!-- Custom Theme JavaScript -->
      <script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>
      <script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
      <script src="{{ asset('/assets/js/lightbox.js') }}"></script>
      @yield('css')
      <style type="text/css">
         /* Absolute Center Spinner */
         body{
         font-family: 'Sriracha', cursive;
         }
         .input-group-addon{
         background: none;
         border: 0;
         width : 0;
         }
         .form-group{
         text-align:center;
         }
         .input-group-sm>.form-control, {
         font-size: 0px;
         }
         .input-group .form-control:last-child{
         border-top-width: 0px;
         border-right-width: 0px;
         border-bottom-width: 1px;
         border-left-width: 0px;
         box-shadow: none
         }
         .input-group-addon:first-child{
         font-size: 14px;
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-inverse">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
            <img src="/img/logo.png" style="height: 70px;">
         </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <br>
         <ul class="nav navbar-nav navbar-right">
            <li>
               <a href="" style="right: 380px;">ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</a>
            </li>
            ///<li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ดาวน์โหลดเอกสาร<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="#">เอกสารหมายเลข 1</a></li>
                  <li><a href="#">เอกสารหมายเลข 2</a></li>
                  <li><a href="#">เอกสารหมายเลข 3</a></li>
                  <li><a href="#">เอกสารหมายเลข 4</a></li>
                  <li><a href="#">เอกสารหมายเลข 5</a></li>
                  <li><a href="#">เอกสารหมายเลข 6</a></li>
                  <li><a href="#">เอกสารหมายเลข 7</a></li>
                  <li><a href="#">เอกสารหมายเลข 8</a></li>
                  <li><a href="#">เอกสารหมายเลข 9</a></li>
                  <li><a href="#">เอกสารหมายเลข 10</a></li>
                  <li><a href="#">เอกสารหมายเลข 11</a></li>
                  <li><a href="#">เอกสารหมายเลข 12</a></li>
               </ul>
               <!-- <li><a href="#">เข้าสู่ระบบ</a></li>
                  <li><a href="#">ลงทะเบียนใช้งาน</a></li> -->
            </li>
           
         </ul>
      </nav>
      @yield('content')
      @yield('javascript')
   </body>
</html>