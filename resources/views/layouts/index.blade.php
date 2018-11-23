<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
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
.dark-nav {background-color: #3F51B5}

.dark-nav .list > li > a {color: #ffB;
    font-size: 14px;}

.dark-nav .list > li > a:hover,
.dark-nav .list > li.active > a {color: #FFF}

.dark-nav .nav-heading > a {color: #fefefe;
    font-family: "kanit", sans-serif;
    font-size: 14px;}

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
.div{
  color: #555;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    padding: 0px!important;
    margin: 0px!important;
    font-size: 14px;
    background: url(../img/site-bg.jpg) no-repeat center top fixed;
    background-color: #fff;
}

</style>
<header>
  <!--  Remove dark nav  -->
  <nav class="nav dark-nav">
    <div class="container">
      <div class="nav-heading">
        <button class="toggle-nav" data-toggle="open-navbar1"><i class="fa fa-align-right"></i></button>
        <a class="brand" href="#" >ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</a>
      </div>
      <div class="menu" id="open-navbar1">
        <ul class="list"> 
          <li><a href="#">ดาวน์โหลดเอกสาร</a></li>
          <li><a href="#">เข้าสู่ระบบ</a></li>
          <li><a href="#">ลงทะเบียนใช้งาน</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style="margin: 50px;">
   <div class="row">
      <h6>ค้นหาสถานประกอบการ</h6>
      <form class="form-inline" action="/action_page.php">
         <div class="form-group">
            <label for="email">คณะ</label>
            <input type="text" class="form-control" id="email" placeholder="คณะ" name="email">
         </div>
         <div class="form-group">
            <label for="pwd">สาขา</label>
            <input type="text" class="form-control" id="pwd" placeholder="สาขา" name="pwd">
         </div>
         <button type="submit" class="btn btn-default">ค้นหา</button>
      </form>
   </div>
   <br>
   <div class="row">
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
            </tbody>
         </table>
      </div>
   </div>
   <footer class="container-fluid text-center bg-lightgray">
        <div class="col-md-12" style="margin-top: 150px"></div>
        <div class="container" >
              <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
              Deverloped By Patiphan Uthang and Yuwa Sawang
        </div>
      </footer>
</div>


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
</header>