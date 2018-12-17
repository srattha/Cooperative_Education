@extends('student.master')
@section('title','หน้าหลัก')
@section('css')
@endsection
<style type="text/css">
   body { 
   background: #EEE; 
   overflow-x:hidden;
   }
   .clearfix:before,
   .clearfix:after {
   content: " ";
   display: table;
   }
   .clearfix:after {
   clear: both;
   }
   .clearfix {
   *zoom: 1;
   }
   .container {
   position: relative;
   margin: 0px auto;
   padding: 50px 0;
   clear: both;
   }
   @media only screen and (min-width: 1200px) {
   .container {
   width: 1210px;
   }
   }
   @media only screen and (min-width: 960px) and (max-width: 1199px) {
   .container {
   width: 1030px;
   }
   }
   @media only screen and (min-width: 768px) and (max-width: 959px) {
   .container {
   width: 682px;
   }
   }
   @media only screen and (min-width: 480px) and (max-width: 767px) {
   .container {
   width: 428px;
   margin: 0 auto;
   }
   }
   @media only screen and (max-width: 479px) {
   .container {
   width: 320px;
   margin: 0 auto;
   }
   }
   .mcd-menu {
   list-style: none;
   padding: 0;
   margin: 0;
   background: #FFF;
   /*height: 100px;*/
   border-radius: 2px;
   -moz-border-radius: 2px;
   -webkit-border-radius: 2px;
   /* == */
   width: 250px;
   /* == */
   }
   .mcd-menu li {
   position: relative;
   /*float:left;*/
   }
   .mcd-menu li a {
   display: block;
   text-decoration: none;
   padding: 12px 20px;
   color: #777;
   /*text-align: center;
   border-right: 1px solid #E7E7E7;*/
   /* == */
   text-align: left;
   height: 36px;
   position: relative;
   border-bottom: 1px solid #EEE;
   /* == */
   }
   .mcd-menu li a i {
   /*display: block;
   font-size: 30px;
   margin-bottom: 10px;*/
   /* == */
   float: left;
   font-size: 20px;
   margin: 0 10px 0 0;
   /* == */
   }
   /* == */
   .mcd-menu li a p {
   float: left;
   margin: 0 ;
   }
   /* == */
   .mcd-menu li a strong {
   display: block;
   text-transform: uppercase;
   }
   .mcd-menu li a small {
   display: block;
   font-size: 10px;
   }
   .mcd-menu li a i, .mcd-menu li a strong, .mcd-menu li a small {
   position: relative;
   transition: all 300ms linear;
   -o-transition: all 300ms linear;
   -ms-transition: all 300ms linear;
   -moz-transition: all 300ms linear;
   -webkit-transition: all 300ms linear;
   }
   .mcd-menu li:hover > a i {
   opacity: 1;
   -webkit-animation: moveFromTop 300ms ease-in-out;
   -moz-animation: moveFromTop 300ms ease-in-out;
   -ms-animation: moveFromTop 300ms ease-in-out;
   -o-animation: moveFromTop 300ms ease-in-out;
   animation: moveFromTop 300ms ease-in-out;
   }
   .mcd-menu li:hover a strong {
   opacity: 1;
   -webkit-animation: moveFromLeft 300ms ease-in-out;
   -moz-animation: moveFromLeft 300ms ease-in-out;
   -ms-animation: moveFromLeft 300ms ease-in-out;
   -o-animation: moveFromLeft 300ms ease-in-out;
   animation: moveFromLeft 300ms ease-in-out;
   }
   .mcd-menu li:hover a small {
   opacity: 1;
   -webkit-animation: moveFromRight 300ms ease-in-out;
   -moz-animation: moveFromRight 300ms ease-in-out;
   -ms-animation: moveFromRight 300ms ease-in-out;
   -o-animation: moveFromRight 300ms ease-in-out;
   animation: moveFromRight 300ms ease-in-out;
   }
   .mcd-menu li:hover > a {
   color: #e67e22;
   }
   .mcd-menu li a.active {
   position: relative;
   color: #e67e22;
   border:0;
   /*border-top: 4px solid #e67e22;
   border-bottom: 4px solid #e67e22;
   margin-top: -4px;*/
   box-shadow: 0 0 5px #DDD;
   -moz-box-shadow: 0 0 5px #DDD;
   -webkit-box-shadow: 0 0 5px #DDD;
   /* == */
   border-left: 4px solid #e67e22;
   border-right: 4px solid #e67e22;
   margin: 0 -4px;
   /* == */
   }
   .mcd-menu li a.active:before {
   content: "";
   position: absolute;
   /*top: 0;
   left: 45%;
   border-top: 5px solid #e67e22;
   border-left: 5px solid transparent;
   border-right: 5px solid transparent;*/
   /* == */
   top: 42%;
   left: 0;
   border-left: 5px solid #e67e22;
   border-top: 5px solid transparent;
   border-bottom: 5px solid transparent;
   /* == */
   }
   /* == */
   .mcd-menu li a.active:after {
   content: "";
   position: absolute;
   top: 42%;
   right: 0;
   border-right: 5px solid #e67e22;
   border-top: 5px solid transparent;
   border-bottom: 5px solid transparent;
   }
   /* == */
   @-webkit-keyframes moveFromTop {
   from {
   opacity: 0;
   -webkit-transform: translateY(200%);
   -moz-transform: translateY(200%);
   -ms-transform: translateY(200%);
   -o-transform: translateY(200%);
   transform: translateY(200%);
   }
   to {
   opacity: 1;
   -webkit-transform: translateY(0%);
   -moz-transform: translateY(0%);
   -ms-transform: translateY(0%);
   -o-transform: translateY(0%);
   transform: translateY(0%);
   }
   }
   @-webkit-keyframes moveFromLeft {
   from {
   opacity: 0;
   -webkit-transform: translateX(200%);
   -moz-transform: translateX(200%);
   -ms-transform: translateX(200%);
   -o-transform: translateX(200%);
   transform: translateX(200%);
   }
   to {
   opacity: 1;
   -webkit-transform: translateX(0%);
   -moz-transform: translateX(0%);
   -ms-transform: translateX(0%);
   -o-transform: translateX(0%);
   transform: translateX(0%);
   }
   }
   @-webkit-keyframes moveFromRight {
   from {
   opacity: 0;
   -webkit-transform: translateX(-200%);
   -moz-transform: translateX(-200%);
   -ms-transform: translateX(-200%);
   -o-transform: translateX(-200%);
   transform: translateX(-200%);
   }
   to {
   opacity: 1;
   -webkit-transform: translateX(0%);
   -moz-transform: translateX(0%);
   -ms-transform: translateX(0%);
   -o-transform: translateX(0%);
   transform: translateX(0%);
   }
   }
   .mcd-menu li ul,
   .mcd-menu li ul li ul {
   position: absolute;
   height: auto;
   min-width: 200px;
   padding: 0;
   margin: 0;
   background: #FFF;
   /*border-top: 4px solid #e67e22;*/
   opacity: 0;
   visibility: hidden;
   transition: all 300ms linear;
   -o-transition: all 300ms linear;
   -ms-transition: all 300ms linear;
   -moz-transition: all 300ms linear;
   -webkit-transition: all 300ms linear;
   /*top: 130px;*/
   z-index: 1000;
   /* == */
   left:280px;
   top: 0px;
   border-left: 4px solid #e67e22;
   /* == */
   }
   .mcd-menu li ul:before {
   content: "";
   position: absolute;
   /*top: -8px;
   left: 23%;
   border-bottom: 5px solid #e67e22;
   border-left: 5px solid transparent;
   border-right: 5px solid transparent;*/
   /* == */
   top: 25px;
   left: -9px;
   border-right: 5px solid #e67e22;
   border-bottom: 5px solid transparent;
   border-top: 5px solid transparent;
   /* == */
   }
   .mcd-menu li:hover > ul,
   .mcd-menu li ul li:hover > ul {
   display: block;
   opacity: 1;
   visibility: visible;
   /*top: 100px;*/
   /* == */
   left:250px;
   /* == */
   }
   /*.mcd-menu li ul li {
   float: none;
   }*/
   .mcd-menu li ul li a {
   padding: 10px;
   text-align: left;
   border: 0;
   border-bottom: 1px solid #EEE;
   /* == */
   height: auto;
   /* == */
   }
   .mcd-menu li ul li a i {
   font-size: 16px;
   display: inline-block;
   margin: 0 10px 0 0;
   }
   .mcd-menu li ul li ul {
   left: 230px;
   top: 0;
   border: 0;
   border-left: 4px solid #e67e22;
   }  
   .mcd-menu li ul li ul:before {
   content: "";
   position: absolute;
   top: 15px;
   /*left: -14px;*/
   /* == */
   left: -9px;
   /* == */
   border-right: 5px solid #e67e22;
   border-bottom: 5px solid transparent;
   border-top: 5px solid transparent;
   }
   .mcd-menu li ul li:hover > ul {
   top: 0px;
   left: 200px;
   }
   /*.mcd-menu li.float {
   float: right;
   }*/
   .mcd-menu li a.search {
   /*padding: 29px 20px 30px 10px;*/
   padding: 10px 10px 15px 10px;
   clear: both;
   }
   .mcd-menu li a.search i {
   margin: 0;
   display: inline-block;
   font-size: 18px;
   }
   .mcd-menu li a.search input {
   border: 1px solid #EEE;
   padding: 10px;
   background: #FFF;
   outline: none;
   color: #777;
   /* == */
   width:170px;
   float:left;
   /* == */
   }
   .mcd-menu li a.search button {
   border: 1px solid #e67e22;
   /*padding: 10px;*/
   background: #e67e22;
   outline: none;
   color: #FFF;
   margin-left: -4px;
   /* == */
   float:left;
   padding: 10px 10px 11px 10px;
   /* == */
   }
   .mcd-menu li a.search input:focus {
   border: 1px solid #e67e22;
   }
   .search-mobile { 
   display:none !important;
   background:#e67e22;
   border-left:1px solid #e67e22;
   border-radius:0 3px 3px 0;
   }
   .search-mobile i { 
   color:#FFF; 
   margin:0 !important;
   }
   @media only screen and (min-width: 960px) and (max-width: 1199px) {
   .mcd-menu {
   margin-left:10px;
   }
   }
   @media only screen and (min-width: 768px) and (max-width: 959px) {
   .mcd-menu {
   width: 200px;
   }
   .mcd-menu li a {
   height:30px;
   }
   .mcd-menu li a i {
   font-size: 22px;
   }
   .mcd-menu li a strong {
   font-size: 12px;
   }
   .mcd-menu li a small {
   font-size: 10px;
   }  
   .mcd-menu li a.search input {
   width: 120px;
   font-size: 12px;
   }
   .mcd-menu li a.search buton{
   padding: 8px 10px 9px 10px;
   }
   .mcd-menu li > ul {
   min-width:180px;
   }
   .mcd-menu li:hover > ul {
   min-width:180px;
   left:200px;
   }
   .mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
   min-width:150px;
   }
   .mcd-menu li ul li:hover > ul {
   left:180px;
   min-width:150px;
   }
   .mcd-menu li ul li ul li:hover > ul {
   left:150px;
   min-width:150px;
   }
   .mcd-menu li ul a {
   font-size:12px;
   }
   .mcd-menu li ul a i {
   font-size:14px;
   }
   }
   @media only screen and (min-width: 480px) and (max-width: 767px) {
   .mcd-menu { 
   width: 50px;
   }
   .mcd-menu li a { 
   position: relative;
   padding: 12px 16px;
   height:20px;
   }
   .mcd-menu li a small { 
   display: none;
   }
   .mcd-menu li a strong { 
   display: none;
   }
   .mcd-menu li a:hover strong,.mcd-menu li a.active strong {
   display:block;
   font-size:10px;
   padding:3px 0;
   position:absolute;
   bottom:0px;
   left:0;
   background:#e67e22;
   color:#FFF;
   min-width:100%;
   text-transform:lowercase;
   font-weight:normal;
   text-align:center;
   }
   .mcd-menu li .search { 
   display: none;
   }
   .mcd-menu li > ul {
   min-width:180px;
   left:70px;
   }
   .mcd-menu li:hover > ul {
   min-width:180px;
   left:50px;
   }
   .mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
   min-width:150px;
   }
   .mcd-menu li ul li:hover > ul {
   left:180px;
   min-width:150px;
   }
   .mcd-menu li ul li ul li > ul {
   left:35px;
   top: 45px;
   border:0;
   border-top:4px solid #e67e22;
   }
   .mcd-menu li ul li ul li > ul:before {
   left:30px;
   top: -9px;
   border:0;
   border-bottom:5px solid #e67e22;
   border-left:5px solid transparent;
   border-right:5px solid transparent;
   }
   .mcd-menu li ul li ul li:hover > ul {
   left:30px;
   min-width:150px;
   top: 35px;
   }
   .mcd-menu li ul a {
   font-size:12px;
   }
   .mcd-menu li ul a i {
   font-size:14px;
   }
   }
   @media only screen and (max-width: 479px) {
   .mcd-menu { 
   width: 50px;
   }
   .mcd-menu li a { 
   position: relative;
   padding: 12px 16px;
   height:20px;
   }
   .mcd-menu li a small { 
   display: none;
   }
   .mcd-menu li a strong { 
   display: none;
   }
   .mcd-menu li a:hover strong,.mcd-menu li a.active strong {
   display:block;
   font-size:10px;
   padding:3px 0;
   position:absolute;
   bottom:0px;
   left:0;
   background:#e67e22;
   color:#FFF;
   min-width:100%;
   text-transform:lowercase;
   font-weight:normal;
   text-align:center;
   }
   .mcd-menu li .search { 
   display: none;
   }
   .mcd-menu li > ul {
   min-width:180px;
   left:70px;
   }
   .mcd-menu li:hover > ul {
   min-width:180px;
   left:50px;
   }
   .mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
   min-width:150px;
   }
   .mcd-menu li ul li:hover > ul {
   left:180px;
   min-width:150px;
   }
   .mcd-menu li ul li ul li > ul {
   left:35px;
   top: 45px;
   border:0;
   border-top:4px solid #e67e22;
   }
   .mcd-menu li ul li ul li > ul:before {
   left:30px;
   top: -9px;
   border:0;
   border-bottom:5px solid #e67e22;
   border-left:5px solid transparent;
   border-right:5px solid transparent;
   }
   .mcd-menu li ul li ul li:hover > ul {
   left:30px;
   min-width:150px;
   top: 35px;
   }
   .mcd-menu li ul a {
   font-size:12px;
   }
   .mcd-menu li ul a i {
   font-size:14px;
   }
   /*gallery*/
   .fancybox{
   display: inline-block;
   margin-top: 20px;
   }
   .*{
      box-sizing: border-box;
   }
</style>
@section('content')
<div class="tab-content-post" style="position: relative;
   border-style: solid;
   border-color: #E4E4E4;
   border-width: 1px;">
   <div class="row">
      <div class="col-md-3">
         <nav>
            <ul class="mcd-menu">
               <li>
                  <a href="">
                  <i class="fa fa-home"></i>
                  <strong>หน้าหลัก</strong>
                  <small>Home</small>
                  </a>
               </li>
               <li>
                  <a href="" class="active">
                  <i class="glyphicon glyphicon-user"></i>
                  <strong>สำหรับนักศึกษา</strong>
                  <small>Student</small>
                  </a>
               </li>
               <li>
                  <a href="">
                  <i class="glyphicon glyphicon-search"></i>
                  <strong>ค้นหาสถานประกอบการ</strong>
                  <small>Search</small>
                  </a>
               </li>
               <li>
                  <a href="">
                  <i class="fa fa-download"></i>
                  <strong>ดาวน์โหลดเอกสาร</strong>
                  <small>Download</small>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
      <div class="col-md-9">
         <div class="_2-sx" style="width: 660px; height: 244px;"><img class="spotlight" alt="ในภาพอาจจะมี ดอกไม้, ข้อความ และธรรมชาติ" aria-busy="true" src="https://scontent.fphs1-1.fna.fbcdn.net/v/t1.0-9/16406920_1265271986888288_2572892987963104611_n.jpg?_nc_cat=104&amp;_nc_ht=scontent.fphs1-1.fna&amp;oh=c4bf67892d094da84f607cb1189c35ed&amp;oe=5CA01094" style="width: 846px; height: 315px;"></div>
      </div>
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div class="row">
      <div class="col-md-12">
         <div class="col-sm-11 col-md-11 col-lg-12" style="margin: 0px 0px 30px" >
         <h4>สหกิจศึกษาและการฝึกานทางวิศวกรรมคืออะไร</h4>
         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ในปัจจุบันการศึกษาต่างๆ ได้มีการขยายศักยภาพทางการศึกษาขึ้นไปอย่างกว้างขวางมีการเปิดการเรียนการสอนหลากหลายสาขาวิชา อาจจะเปิดการศึกษาเพื่อผลิตนักศึกษาออกไปสนองความต้องการของตลาดแรงงานที่มีการเจริญเติบโตอย่างรวดเร็วหรืออาจจะเปิดการเรียนการสอนเพราะเนื่องจากสถานศึกษาในแต่ล่ะแห่งมีความพร้อมทั้งทางด้านบุคลากรและครุภัณฑ์ ซึ่งจะด้วยเหตุผลใดก็ตามจุดประสงค์หลักการผลิตนักสึกษาของแต่ละสถาบันเพื่อต้องการให้นักศึกษาเป็นคนดีมีความรู้ความสามารถทั้งด้านการเป็นนักปฏิบัติงาน และวิชาการตรงกับความต้องการของตลาดแรงงาน ดังนั้นโครงงานสหกิจศึกษาและฝึกงานทางวิศวกรรม ซึ่งเป็นโครงการฯที่หาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก ได้เข้าร่วมมือกับสถานประกอบการให้นักศึกษาได้ เข้าไปปฏิบัติงานเสมือนหนึ่งพนักงานของบริษัทเป็นระยะเวลา 1 ภาคการศึกษา (17 สัปดวห์) โดยปฏิบัติงานเต็มเวลา ทำให้นักศึกษาได้เรียนรู้หลักและวิธีการทำงาน การแก้ไขปัญหา การทำงานร่วมกับบุคคลอื่นทั้งใน ระดับคนงานและหัวหน้าคนงาน ซึ่งสิ่งเหล่านี้นักศึกษาไม่สามารถหาเรียนได้จากในห้องเรียน</p>
         <h4>หลักการและเตุผล</h4>
         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  มหาวิทยาลันเทคโนโลยีราชมงคลล้านนา ตาก เป็นมหาวิทยาลัยระดับอุดมศึกษาที่มีการจัดการเรียนการสอน โดยเน้นในด้านสาขาวิชาชีพ ด้านวิศวกรรมศาสตร์ ได้ตระหนักถึงกระบวนการจัดการเรียนการสอนเพื่อให้นักศึกษาที่สำเร็จการศึกษาไปแล้ว ได้ทำงานตรงกับความต้องการของตลาดแรงงานและทำงานได้อย่างมี ประสิทธิภาพ จึงมีความสนใจที่จะเข้าร่วมโครงการสหกิจศึกษาเพื่อเป็นการเตรียมความพร้อมของนักศึกษาใหเ้ได้มีโอกาสเข้าสัมผัสงานจริงภายในสถานประกอบการตามสาขาที่ตนเองกำลังศึกษาอยู่และเพื่อจะได้เป็นข้อมูลของมหาวิทยาลัยฯในการปรับกลยุทธ์การเรียนการสอนรวมถึงการปรับหลักสูตรให้ตรงกับความต้องการของตลากแรงงานต่อไป ส่วนสถานประกอบการจะได้มีโอกาสแลกเปลี่ยนความรู้และประสบการณ์ในการทำงาน รวมถึงจะเป็นส่วนหนึ่งของการร่วมกันพัฒนาแรงงานของประเภทชาติให้มรความเข้มแข็งสามารถผลิตงานที่มีคุณภาพแข่งขันกับตลาดโลกได้ และเป็นการเปิดโอกาสให้นักศึกษา มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก และสถานประกอบการ ได้ร่วมมือกันในการพัฒนาบุคลากร เพื่อจะได้เป็นกำลังคัญของประเทศชาติ ต่อไป</p>
         <h4>วัตถุประสงค์</h4>
         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  *  เพื่อเปิดโอกาสให้นักศึกษาได้เข้าไปมีส่วนร่วมในการทำงานจริง และศึกษางานในสถานประกอบการนกเหนือจากห้องเรียนและห้องปฏิบัติ</p>
         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  *  เพื่อเปิดโอกาสให้สถานประกอบการมีส่วนร่วมในการพัฒนาบัญฑิตที่มีคุณภาพ ตรงกับความต้องการของตลาดแรงงาน</p>
         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  *  เพื่อส่งเสริมและสร้างความสัมพันธ์ระหว่างมหาวิทยาลัยฯ และสถานประกอบการ</p>
         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  *  เพื่อเป็นการใช้ทรัพยากรร่วมกัน เพิ่มโอกาสในการทำงานวิจัยประยุกต์เพื่ออุตสาหกรรมอย่างแท้จริง</p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-12">
         <p class="kanit"><b style="padding-left: 300px;">คลังรูปภาพ : </b><b style="color:  #3F51B5;">ปฐมนิเทศสหกิจศึกษา</b></p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-12">
         <!-- row I-->
         <div class="row">
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154228_8999633.jpg" class="fancybox" data-fancybox-group="gallery" title="1 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154228_8999633.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154228_8704114.jpg" class="fancybox" data-fancybox-group="gallery" title="2 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154228_8704114.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154228_6390670.jpg" class="fancybox" data-fancybox-group="gallery" title="3 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154228_6390670.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154228_3778061.jpg" class="fancybox" data-fancybox-group="gallery" title="4 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154228_3778061.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
         </div>
         <!-- row II-->
         <div class="row">
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154257_1027717.jpg" class="fancybox" data-fancybox-group="gallery" title="7 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154257_1027717.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154257_7987470.jpg" class="fancybox" data-fancybox-group="gallery" title="9 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154257_7987470.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154258_6238382.jpg" class="fancybox" data-fancybox-group="gallery" title="10 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154258_6238382.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154324_7122184.jpg" class="fancybox" data-fancybox-group="gallery" title="12 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154324_7122184.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
         </div>
         <!-- row III-->
         <div class="row">
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154324_1219032.jpg" class="fancybox" data-fancybox-group="gallery" title="13 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154324_1219032.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154325_4082370.jpg" class="fancybox" data-fancybox-group="gallery" title="16 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154325_4082370.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154325_1560471.jpg" class="fancybox" data-fancybox-group="gallery" title="17 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154325_1560471.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154325_8168428.jpg" class="fancybox" data-fancybox-group="gallery" title="18 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154325_8168428.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
         </div>
         <!-- row IIII-->
         <div class="row">
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154325_3448727.jpg" class="fancybox" data-fancybox-group="gallery" title="19 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154325_3448727.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154326_2614387.jpg" class="fancybox" data-fancybox-group="gallery" title="21 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154326_2614387.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154445_2722010.jpg" class="fancybox" data-fancybox-group="gallery" title="22 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154445_2722010.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154445_8198243.jpg" class="fancybox" data-fancybox-group="gallery" title="23 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154445_8198243.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
         </div>
         <!-- row IIIII-->
         <div class="row">
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154446_7013246.jpg" class="fancybox" data-fancybox-group="gallery" title="25 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154446_7013246.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154446_1061959.jpg" class="fancybox" data-fancybox-group="gallery" title="26 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154446_1061959.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154446_3971695.jpg" class="fancybox" data-fancybox-group="gallery" title="27 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154446_3971695.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
            <div class="col-md-2" style="left: 300px;">
               <a href="https://webs.rmutl.ac.th/assets/upload/gallery/2018/11/gallery_20181105154447_2835723.jpg" class="fancybox" data-fancybox-group="gallery" title="28 of 30 | ปฐมนิเทศสหกิจศึกษา ">
               <img class="img-responsive thumbnail" src="https://webs.rmutl.ac.th/images?src=https://webs.rmutl.ac.th/assets/upload/gallery_w120/2018/11/gallery_20181105154447_2835723.jpg&amp;w=120&amp;h=80" data-pin-nopin="true">
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<footer class="footer">
   <span class="footer-divider" style="height: 5px;
      display: block;
      background: #3F51B5;"></span>
   <div class="col-md-12" style="margin-top: 50px">
      <div class="container">
         <div class="col-sm-6">
            <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
            Deverloped By Patiphan Uthang And Yuwa Saewang
         </div>
      </div>
      <div class="row" style="margin-top: 50px"></div>
</footer>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
   $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
   });
</script>
@endsection