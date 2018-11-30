@extends('layouts.app')
@section('title','ค้นหา')
@section('css')
@endsection
@section('content')
<div class="container">
   <div class="row ">
      <div class="col-md-7">
         <!--Carousel Wrapper-->
         <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
               <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-example-2" data-slide-to="1"></li>
               <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active">
                  <div class="view">
                     <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(105).jpg" alt="First slide">
                     <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                     <h3 class="h3-responsive">This is the first title</h3>
                     <p>First text</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <!--Mask color-->
                  <div class="view">
                     <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(115).jpg" alt="Second slide">
                     <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                     <h3 class="h3-responsive">Thir is the second title</h3>
                     <p>Secondary text</p>
                  </div>
               </div>
               <div class="carousel-item">
                  <!--Mask color-->
                  <div class="view">
                     <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(108).jpg" alt="Third slide">
                     <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                     <h3 class="h3-responsive">This is the third title</h3>
                     <p>Third text</p>
                  </div>
               </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
         </div>
         <!--/.Carousel Wrapper-->
      </div>
      <div class="col-md-5">
         <div class="activity-header">
            <b class="font-detail-18">ปฏิทิน</b>
         </div>
         <div class="text-centet" style="margin: 20px; padding: 110px 50px;background-color: #f1f1f1;">
         </div>
      </div>
   </div>
</div>
<footer class="footer">
   <div class="col-md-12" style="margin-top: 50px">
   <div class="container">
      <div class="col-sm-6">
         <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
         Deverloped By Patiphan Uthang And Yuwa Saewang 
      </div>
   </div>
   <div class="row" style="margin-top: 50px"></div>
</footer>
@endsection
@section('javascript')
@endsection