<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!--<link rel="shortcut icon" type="image/png" href="/img/g1.jpg"/>-->
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
      @yield('css')
      <style type="text/css">
      /*font*/
         body{
         font-family: 'Maitree', serif;
         }
         a {
         color: #333333;
         text-decoration: none;
         }
         /*menu navbar*/
         .sidebar ul li a.active{
          background-color: #337ab7;
          color: #fefefe;
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
      <div class="preloader">
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
      </div>
      <div id="wrapper">
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background: margin-bottom: 0px;background-color: #3F51B5;border-color: #3F51B5;">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="index.html"></a>
               
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
               <li>
                  <a href="" style="right: 380px; font-size: px; color: #fefefe;">ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</a>
               </li>
               @guest
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
               </li>
               @else
               <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </div>
               </li>
               @endguest
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
               <div style="text-align: center; padding: 10px;">
                  <img src="/img/g1.jpg" class="img-circle">
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
               <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
         </nav>
         <!-- Page Content -->
         <div id="page-wrapper" style="min-height: 923px;">
            <div class="container-fluid">
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
      <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- Metis Menu Plugin JavaScript -->
      <script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>
      <!-- Toastr JavaScript -->
      <script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script>
      <!-- Custom Theme JavaScript -->
      <script src="{{ asset('/assets/js/sb-admin-2.js') }}"></script>
      <script src="{{ asset('/assets/js/lightbox.js') }}"></script>
      <script src="{{ asset('/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
      @yield('javascript')
   </body>
</html>