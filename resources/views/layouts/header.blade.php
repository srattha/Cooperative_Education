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

/* Start drodpwn menu */
.categories {
  position: relative;
}
.nav .list .categories .drop-down {
  list-style: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #FFF;
  border: 1px solid #ccc;
  padding: 5px 0;
  min-width: 160px;
  width: auto;
  white-space: nowrap;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  display: none;
  z-index: 99999
}
.nav .list .drop-down > .seprator {
  height: 1px;
  width: 100%;
  margin: 9px 0;
  background-color: #e5e5e5
}
.drop-down > li > a {
  color: #333;
  display: block;
  padding: 3px 20px;
  text-decoration: none;
}
.show {
  display: block
}

/* Sub dropdown menu */
.categories .drop-down .sub-drop-down {position: relative}
.categories .drop-down .sub-drop-down:hover .sub-dropdown {
  display: block;
}
.categories .drop-down .sub-dropdown {
  position: absolute;
  top: -20px;
  left: 107%;
  list-style: none;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 3px;
  padding: 10px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  display: none;
}
.categories .drop-down .sub-dropdown:before {
  content: "";
  display: block;
  position: absolute;
  top: 20px;
  left: -20px;
  border-top: 10px solid transparent;
  border-left: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-right: 10px solid #cccccc
}
.categories .drop-down .sub-dropdown > li > a {
  color: #555;
  padding: 5px 0;
  display: block
}
/* End sub dropdown menu */
/* Dark theme */
.dark-nav {background-color: #f03340}

.dark-nav .list > li > a {color: #ffB}

.dark-nav .list > li > a:hover,
.dark-nav .list > li.active > a {color: #FFF}

.dark-nav .nav-heading > a {color: #EEE}

.dark-nav .nav-heading .toggle-nav {color: #EEE}

/* End Dark theme */

/* Start media query for navbar */
@media (max-width: 767px) {
  .nav .container {
    padding-right: 0;
    padding-left: 0;
  }
  .nav .nav-heading {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    border-bottom: 1px solid #ffe7e7
  }
  .nav .nav-heading .brand {float: left}

  .nav .nav-heading .toggle-nav {
    display: block;
    float: right;
    margin-top: 14px;
  }

  .nav .menu {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    display: none;
  }

  .nav .list {
    float: none;
    width: 100%;
  }
  .nav .list > li {
    float: none;
    width: 100%;
  }
  .nav .list > li > a {padding: 12px 0;line-height: 1}

  .nav .list .categories .drop-down {
    background-color: transparent;
    border: none;
    position: static;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 0
  }
  .categories .drop-down .sub-dropdown {
    position: static;
    background-color: transparent;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding-left: 20px;
  }
  .categories .drop-down .sub-dropdown > li > a {
    color: #ff8;
  }
  .categories .drop-down .sub-dropdown:before {
    display: none
  }
  /* Simple reset for dark theme */
  .dark-nav .menu {background-color: #ff28ff}
  .dark-nav .nav-heading {border-bottom-color: #ff343c}
  .dark-nav .list .drop-down > li > a {color: #AAA}
  .dark-nav .list .categories .drop-down .seprator {background-color: #2a2d38}

}
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

/* Start drodpwn menu */
.categories {
  position: relative;
}
.nav .list .categories .drop-down {
  list-style: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #FFF;
  border: 1px solid #ccc;
  padding: 5px 0;
  min-width: 160px;
  width: auto;
  white-space: nowrap;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  display: none;
  z-index: 99999
}
.nav .list .drop-down > .seprator {
  height: 1px;
  width: 100%;
  margin: 9px 0;
  background-color: #e5e5e5
}
.drop-down > li > a {
  color: #333;
  display: block;
  padding: 3px 20px;
  text-decoration: none;
}
.show {
  display: block
}

/* Sub dropdown menu */
.categories .drop-down .sub-drop-down {position: relative}
.categories .drop-down .sub-drop-down:hover .sub-dropdown {
  display: block;
}
.categories .drop-down .sub-dropdown {
  position: absolute;
  top: -20px;
  left: 107%;
  list-style: none;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 3px;
  padding: 10px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  display: none;
}
.categories .drop-down .sub-dropdown:before {
  content: "";
  display: block;
  position: absolute;
  top: 20px;
  left: -20px;
  border-top: 10px solid transparent;
  border-left: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-right: 10px solid #cccccc
}
.categories .drop-down .sub-dropdown > li > a {
  color: #555;
  padding: 5px 0;
  display: block
}
/* End sub dropdown menu */
/* Dark theme */
.dark-nav {margin-bottom: 0px;
    background-color: #3F51B5;
    border-color: #3F51B5;}

.dark-nav .list > li > a {color: #ffB}

.dark-nav .list > li > a:hover,
.dark-nav .list > li.active > a {color: #FFF}

.dark-nav .nav-heading > a {color: #EEE}

.dark-nav .nav-heading .toggle-nav {color: #EEE}

/* End Dark theme */

/* Start media query for navbar */
@media (max-width: 767px) {
  .nav .container {
    padding-right: 0;
    padding-left: 0;
  }
  .nav .nav-heading {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    border-bottom: 1px solid #ffe7e7
  }
  .nav .nav-heading .brand {float: left}

  .nav .nav-heading .toggle-nav {
    display: block;
    float: right;
    margin-top: 14px;
  }

  .nav .menu {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    display: none;
  }

  .nav .list {
    float: none;
    width: 100%;
  }
  .nav .list > li {
    float: none;
    width: 100%;
  }
  .nav .list > li > a {padding: 12px 0;line-height: 1}

  .nav .list .categories .drop-down {
    background-color: transparent;
    border: none;
    position: static;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 0
  }
  .categories .drop-down .sub-dropdown {
    position: static;
    background-color: transparent;
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding-left: 20px;
  }
  .categories .drop-down .sub-dropdown > li > a {
    color: #ff8;
  }
  .categories .drop-down .sub-dropdown:before {
    display: none
  }
  /* Simple reset for dark theme */
  .dark-nav .menu {background-color: #ff28ff}
  .dark-nav .nav-heading {border-bottom-color: #ff343c}
  .dark-nav .list .drop-down > li > a {color: #AAA}
  .dark-nav .list .categories .drop-down .seprator {background-color: #2a2d38}

}
      </style>
    
      @yield('content')
  <!--  Remove dark nav  -->
  <nav class="nav dark-nav">
    <div class="container">
      <div class="nav-heading">
        <button class="toggle-nav" data-toggle="open-navbar1"><i class="fa fa-align-right"></i></button>
        <a class="brand" href="#">ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</a>
      </div>
      <div class="menu" id="open-navbar1">
        <ul class="list">
          <li><a href="#">ดาวน์โหลด</a></li>
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














<li class="dropdown">
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