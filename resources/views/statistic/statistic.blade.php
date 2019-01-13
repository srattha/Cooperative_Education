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
      <!--<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
         / Plugins and page level script : optional -->
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
      <div class="container">
         <section id="main" role="main">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title">รายงานนักศึกษาในโครงการสหกิจศึกษา<a class="nav-link " href="{{('/index') }}"><i style="padding-right: 2px; padding-left: 50px;" aria-hidden="true" id="icon"></i>{{ __('หน้าแรก') }}</a></h3>
                        </div>
                        <!-- กราฟ-->
                        <div id="chart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--<script src="{{asset('js/morris-data.js')}}"></script> -->
         <div class="modal fade" id="modal_ajax_lg">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
               </div>
            </div>
         </div>
         <div style="padding-bottom: 50px;"></div>
         <footer id="footer">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <p class="nm text-muted">&copy; 2018-Cooperative Education</i></p>
                     Deverloped By Patiphan Uthang And Yuwa Saewang </p>
                  </div>
               </div>
            </div>
         </footer>
         <!-- Global site tag (gtag.js) - Google Analytics -->
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87588904-26"></script>
         <!--chart-->
         <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
         <script src="https://code.highcharts.com/highcharts.js"></script>
         <script src="https://code.highcharts.com/modules/exporting.js"></script>
         <script src="https://code.highcharts.com/modules/export-data.js"></script>
         <script type="text/javascript">
            // Build the chart
            Highcharts.chart('chart', {
            chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
            },
            title: {
            text: 'รายงานนักศึกษาโครงการสหกิจศึกษา'
            },
            tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            plotOptions: {
            pie: {
               allowPointSelect: true,
               cursor: 'pointer',
               dataLabels: {
                   enabled: false
               },
               showInLegend: true
            }
            },
            series: [{
            name: 'นักศึกษา',
            colorByPoint: true,
            data: [ 
            <?php 
               for($i = 0; $i < count($data); $i++){
                  echo '{name: "'.$data[$i]['y'].'", y: '.$data[$i]['name'].'},';
               }
               ?>
            ]
            // [{
            //    name: ' All Faculty ',
            //    y: 61.41,
            //    // sliced: true,
            //    // selected: true
            // }, {
            //    name: 'Faculty of Business Administration and Liberal Arts',
            //    y: 11.84
            // }, {
            //    name: 'Faculty of Sciences and Agricultural Technology',
            //    y: 10.85
            // }, {
            //    name: 'Faculty of Engineering',
            //    y: 4.67
            // }, {
            //    name: 'Faculty of Fine Arts and Architecture',
            //    y: 4.18
            // }, {
            //    name: 'Other',
            //    y: 7.05
            // }]
            }]
            });
         </script>
      </div>
   </body>
</html>