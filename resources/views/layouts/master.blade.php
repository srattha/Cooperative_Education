<!doctype html>
<html lang="" ng-app>
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
      <script src="{{ asset('/vendor/angularjs/angular.min.js') }}"></script>
      <style type="text/css">
         @yield('css')
        /* Remove dark-nav class from nav tag to see the light version  */
* {
  padding: 0;
  margin: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none;
  font-family: arial;
}
header {
  height: 100vh;
}
.container:after, .container:before {
  content: "";
  display: block;
  clear: both;
}

/* Start navbar */
.nav {
  background-color: #f8f8f8;
  border-bottom: 1px solid #ececec;
  min-height: 50px;
  height: auto;
}
.nav .nav-heading {float: left}

.nav .nav-heading .toggle-nav {
  padding: 2px 10px;
  border-radius: 5px;
  border: none;
  display: none;
  background-color: transparent;
}
.nav .nav-heading > a {
  text-decoration: none;
  color: #000;
  line-height: 60px;
  font-weight: 400;
  font-size: 19px;
}

/* Start menu */
.nav .menu {
  float: right;
}
.nav .menu:after {
  content: "";
  clear: both;
  display: block;
}
.nav .list {
  float: right;
  margin: 0;
}
.nav .list > li {
  float: left;
  list-style: none;
}
.nav .list > li > a {
  color: #555;
  text-decoration: none;
  display: block;
  line-height: 60px;
  padding: 0 10px;
}
.nav .list > li > a:hover,
.nav .list > li.active > a {
  color: #333
}
      </style>
      @yield('content')
      <!--  Remove dark nav  -->
      <nav class="nav dark-nav">
         <div class="container">
            <div class="nav-heading">
               <button class="toggle-nav" data-toggle="open-navbar1"><i class="fa fa-align-right"></i></button>
               <a class="brand" href="#" style="font-size: 16px;">ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</a>
            </div>
            <div class="menu" id="open-navbar1">
               <ul class="list">
                  <li><a href="#">ดาวน์โหลดเอกสาร</a></li>
                  <li><a href="#">เข้าสู่ระบบ</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <script type="text/javascript">
         /*global $, console*/
         /*
         By Mostafa Omar
         https://www.facebook.com/MustafaOmarIbrahiem
         */
         $(function () {
         'use strict';
         // Start navbar 
         (function () {
           // Add class active when the user clicks the lis of the menu
           $('.nav .list li').on('click', 'a', function () {
             $(this).parent().addClass('active').siblings().removeClass('active');
           });
           var openCategories = $('.nav #open-categories'),
               categories = $('.drop-down');
           // Toggle categories on clicking
           openCategories.on('click', function () {
             $("#" + $(this).data('dropdown')).toggleClass('show');
             // When the user clicks the window if the categories is not the target, close it.
             $(window).on('mouseup', function (e) {
               if (categories.hasClass('show') && !categories.is(e.target) && categories.has(e.target).length === 0 && !openCategories.is(e.target)) {console.log("d");
                 categories.removeClass('show');
               }
             });
           });
           // Toggle menu, This will be shown in Extra small screens only
           $('.nav .toggle-nav').on('click', function () {
             $("#" + $(this).data('toggle')).slideToggle(300);
           });
         }());
         });
      </script>
      @yield('content')
      @yield('javascript')
      </body>
</html>