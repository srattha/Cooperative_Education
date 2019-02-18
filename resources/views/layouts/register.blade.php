<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content=""> 
      <meta name="author" content="">
      <link rel="shortcut icon" type="image/png" sizes="144x144" href="assets/gallery/image-icon.jpg"/>
      <title>@yield('title')</title>
      <!-- Bootstrap Core CSS -->
      <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
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
      <link href="https://fonts.googleapis.com/css?family=Maitree|Sriracha" rel="stylesheet">
      <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
      <!-- <link href="{{ asset('/vendor/bootstrap/css/bootstrap-datepicker.css')  }}" rel="stylesheet"/> -->
      @yield('css')
      <style type="text/css">
         body{
         font-family: 'Maitree', serif;
         }
         a {
         color: #333333;
         text-decoration: none;
         }
         /* a:hover {
         color: #A0DFFF !important;
         }*/
         .nav>li>a:focus, .nav>li>a:hover {
         text-decoration: none;
         background-color: #5bc0de;
         }
         .navbar-default .navbar-brand:hover {
         color: #A0DFFF !important;
         }
         .navbar-top-links li:hover {
         color: #A0DFFF !important;
         }
         .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
         background-color: #3f51b5 !important;
         border-color: #337ab7 !important;
         }
         /* #overlay{
         position:fixed;
         z-index:99999;
         top:0;
         left:0;
         bottom:0;
         right:0;
         background:#f5f5f7;
         transition: 1s 0.4s;
         }
         #progress{
         height:5px;
         background:#333333;
         position:absolute;
         width:0;
         top:50%;
         }
         #progstat{
         font-size:24px;
         letter-spacing: 3px;
         position:absolute;
         top:50%;
         margin-top:-40px;
         width:100%;
         text-align:center;
         color:#333333;
         }*/
         #overlay {
         position: fixed;
         z-index: 999;
         height: 2em;
         width: 2em;
         overflow: show;
         margin: auto;
         top: 0;
         left: 0;
         bottom: 0;
         right: 0;
         }
         /* Transparent Overlay */
         #overlay:before {
         content: '';
         display: block;
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0,0,0,0.3);
         }
         /* :not(:required) hides these rules from IE9 and below */
         #overlay:not(:required) {
         /* hide "loading..." text */
         font: 0/0 a;
         color: transparent;
         text-shadow: none;
         background-color: transparent;
         border: 0;
         }
         #overlay:not(:required):after {
         content: '';
         display: block;
         font-size: 10px;
         width: 1em;
         height: 1em;
         margin-top: -0.5em;
         -webkit-animation: spinner 1500ms infinite linear;
         -moz-animation: spinner 1500ms infinite linear;
         -ms-animation: spinner 1500ms infinite linear;
         -o-animation: spinner 1500ms infinite linear;
         animation: spinner 1500ms infinite linear;
         border-radius: 0.5em;
         -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
         box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
         }
         /* Animation */
         @-webkit-keyframes spinner {
         0% {
         -webkit-transform: rotate(0deg);
         -moz-transform: rotate(0deg);
         -ms-transform: rotate(0deg);
         -o-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         100% {
         -webkit-transform: rotate(360deg);
         -moz-transform: rotate(360deg);
         -ms-transform: rotate(360deg);
         -o-transform: rotate(360deg);
         transform: rotate(360deg);
         }
         }
         @-moz-keyframes spinner {
         0% {
         -webkit-transform: rotate(0deg);
         -moz-transform: rotate(0deg);
         -ms-transform: rotate(0deg);
         -o-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         100% {
         -webkit-transform: rotate(360deg);
         -moz-transform: rotate(360deg);
         -ms-transform: rotate(360deg);
         -o-transform: rotate(360deg);
         transform: rotate(360deg);
         }
         }
         @-o-keyframes spinner {
         0% {
         -webkit-transform: rotate(0deg);
         -moz-transform: rotate(0deg);
         -ms-transform: rotate(0deg);
         -o-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         100% {
         -webkit-transform: rotate(360deg);
         -moz-transform: rotate(360deg);
         -ms-transform: rotate(360deg);
         -o-transform: rotate(360deg);
         transform: rotate(360deg);
         }
         }
         @keyframes spinner {
         0% {
         -webkit-transform: rotate(0deg);
         -moz-transform: rotate(0deg);
         -ms-transform: rotate(0deg);
         -o-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         100% {
         -webkit-transform: rotate(360deg);
         -moz-transform: rotate(360deg);
         -ms-transform: rotate(360deg);
         -o-transform: rotate(360deg);
         transform: rotate(360deg); 
         }
         }
         .clock-button {
         background-color: blueviolet;
         padding: 0.5em;
         color: white;
         }
         .clock-placement {
         position: fixed;
         /* Fixed/sticky position */
         top: 20px;
         /* Place the button at the top of the page */
         right: 30px;
         /* Place the button 30px from the right */
         z-index: 99;
         /* Make sure it does not overlap */
         }
         .navbar-default {
         background-color: #3F51B5;
         border-color: #3F51B5;
         }
         .navbar-default .navbar-brand {
         color: #fff;
         }
         #page-wrapper {
         position: inherit;
         margin: 0 0 0 0px;
         padding: 0 30px;
         border-left: 1px solid #e7e7e7;
         }
         .nav-link{
         color: #fff;
         }
         /*panel-default */
         .panel-default>.panel-heading{
         color: #f8f5f5;
         background-color: #3F51B5;
         border-color: #3F51B5;
         }
         .container-fluid{
         padding-top: 15px;
         }
         .form-group{
         padding-top: 15px;
         }
         .col-md-11{
         padding-left: 270px;
         }
         .col-md-4{
         padding-left: 90px;
         }
      </style>
     <!--  <script type="text/javascript">
         ;(function(){
           function id(v){ return document.getElementById(v); }
           function loadbar() {
             var ovrl = id("overlay"),
             prog = id("progress"),
             stat = id("progstat"),
             img = document.images,
             c = 0,
             tot = img.length;
             if(tot == 0) return doneLoading();
         
             function imgLoaded(){
               c += 1;
               var perc = ((100/tot*c) << 0) +"%";
               prog.style.width = perc;
               stat.innerHTML = "Loading "+ perc;
               if(c===tot) return doneLoading();
             }
             function doneLoading(){
               ovrl.style.opacity = 0;
               setTimeout(function(){
                 $('.sidebar-category').fadeIn();
                 $('.navbar-right').fadeIn();
               }, 300);
         
               setTimeout(function(){
                 ovrl.style.display = "none";
               }, 1500);
             }
             for(var i=0; i<tot; i++) {
               var tImg     = new Image();
               tImg.onload  = imgLoaded;
               tImg.onerror = imgLoaded;
               tImg.src     = img[i].src;
             }
           }
           document.addEventListener('DOMContentLoaded', loadbar, false);
         }());
      </script> -->
   </head>
   <body>
      <!-- <div class="preloader">
         <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
         </div>
      </div>
      <div id="overlay">
         <div id="progstat"></div>
         <div id="progress"></div>
      </div> -->
      <div id="wrapper">
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <span class="navbar-brand" style="font-size: 16px;">ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</span>
            </div>
            <!-- /.navbar-header --> 
            <div class="collapse navbar-collapse navHeader" id="navbarSupportedContent">
               <!-- Left Side Of Navbar -->
               <ul class="nav navbar-top-links navbar-right">
                  @if(Auth::user())
                  <!-- <li class="nav-item">
                     <a class="nav-link " href="{{('/printstudent') }}"><i class="glyphicon glyphicon-print" style="padding-right: 2px;" aria-hidden="true" id="icon"></i>{{ __('') }}</a>
                     </li> -->
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                     <i class="fa fa-user fa-fw"></i>  <span style="color: #fff;">{{Auth::user()->name}}</span> <i class="fa fa-caret-down"></i>
                     </a>
                     <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                        </form>
                     </ul>
                  </li>
                  @else
                  <!--หน้าแรก-->
                  <li class="nav-item"> 
                     <a class="nav-link " href="{{('/') }}"><i class="glyphicon glyphicon-home" style="padding-right: 2px;" aria-hidden="true" id="icon"></i>{{ __('หน้าแรก') }}</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="{{('/statistic') }}"><i class="fa fa-bar-chart"></i></a>
                  </li>
                  <!--ค้นหา-->
                  <li class="nav-item">
                     <a class="nav-link " href="{{('/search') }}"><i class="glyphicon glyphicon-search" style="padding-right: 2px;"aria-hidden="true" id="icon"></i>{{ __('ค้นหาสถานประกอบการ') }}</a>
                  </li>
                  <!--ดาวน์โหลด-->
                  <li class="nav-item">
                     <a class="nav-link " href="{{('/download') }}"><i class="fa fa-download mr10" style="padding-right: 2px;"aria-hidden="true" id="icon"></i>{{ __('ดาวน์โหลด') }}</a>
                  </li>
                  <!--เข้าสู่ระบบ-->
                  <li class="nav-item">
                     <a class="nav-link " href="{{ route('login') }}"><i class="fa fa-sign-in"style="padding-right: 2px;" aria-hidden="true" id="icon"></i>{{ __('เข้าสู่ระบบ') }}</a>
                  </li>
                  <!--ลงทะเบียน-->
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-plus"style="padding-right: 2px;" aria-hidden="true" id="icon"></i>{{ __('ลงทะเบียนใช้งาน') }}</a>
                  </li>
                  @endif
               </ul> 
            </div>
            <!-- /.navbar-top-links -->
            <!--  <div class="navbar-default sidebar" role="navigation">
               <div style="text-align: center;">
                 <img src="https://regis.rmutl.ac.th/student/assets/image/logo/rmutl-logo.png" height="120px">
               </div>
               <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu" style="">
                  <li>
                   <a href=""><i class="fa fa-users" aria-hidden="true"></i> จัดการข้อมูลนักศึกษาและสถานประกอบการ</a>
                 </li>
                 <li>
                   <a href=""><i class="glyphicon glyphicon-book"></i>เอกสารสหกิจศึกษา</a>
                 </li>
                 <li>
                   <a href=""><i class="glyphicon glyphicon-search"></i> ค้นหาข้อมูล</a>
                 </li>
               </ul>
               </div>
               
               </div> -->
            <!-- /.navbar-static-side --> 
         </nav>
         <!-- Page Content -->
         <div id="page-wrapper" style=" background: #ecf0f1; min-height: 600px; ">
          <!--  -->
            <div class="container">
               @yield('content')
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /#page-wrapper --> 
      </div>
      
      <!-- /#wrapper -->
      <!-- jQuery -->
      <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
      <!-- Bootstrap Core JavaScript -->
      <!-- <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script> -->
      <!-- Metis Menu Plugin JavaScript -->
     <!--  <script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script> -->
      <!-- Toastr JavaScript -->
    <!--   <script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script> -->
      <!-- Custom Theme JavaScript -->
      <!-- <script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>
      <script src="{{ asset('/assets/js/lightbox.js') }}"></script>
      <script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script> -->
      <!-- <script type="text/javascript">
            height = innerHeight;
            // $('div#page-wrapper').css('min-height' , height);
         </script> -->
     <!--  <script src="{{ asset('/vendor/bootstrap/js/bootstrap-datepicker.js') }}"></script> -->

      @yield('javascript')
   </body>
</html> 