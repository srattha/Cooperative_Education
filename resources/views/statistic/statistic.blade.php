@extends('layouts.statistic')
@section('title','สถิติ')
@section('css')
@endsection
@section('content')
<div class="container">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title" ><i class="fa fa-bar-chart"></i>รายงานการนักศึกษาโครงงานสหกิจศึกษา</h3>
               </div>
               <div class="panel-body">
                  <div class="form-horizontal">
                     <div class="form-group">
                        <label class="col-md-4 control-label">ปี พ.ศ. &nbsp; : </label>
                        <div class="col-md-4">
                           <select id="class_year" name="year" class="form-control">
                              <option value="2580" >2580</option>
                              <option value="2579" >2579</option>
                              <option value="2578" >2578</option>
                              <option value="2577" >2577</option>
                              <option value="2576" >2576</option>
                              <option value="2575" >2575</option>
                              <option value="2574" >2574</option>
                              <option value="2573" >2573</option>
                              <option value="2572" >2572</option>
                              <option value="2571" >2571</option>
                              <option value="2570" >2570</option>
                              <option value="2569" >2569</option>
                              <option value="2568" >2568</option>
                              <option value="2567" >2567</option>
                              <option value="2566" >2566</option>
                              <option value="2565" >2565</option>
                              <option value="2564" >2564</option>
                              <option value="2563" >2563</option>
                              <option value="2562" >2562</option>
                              <option value="2561" >2561</option>
                              <option value="2560" >2560</option>
                              <option value="2559" >2559</option>
                           </select>
                        </div>
                     </div>
                     <!-- <div class="form-group">
                        <label class="col-md-4 control-label">เทอม / ปี : </label>
                        <div class="col-md-4">
                           <select id="select_term_year" class="form-control">
                               <option value="1">เชียงราย</option>
                              <option value="2">ตาก</option>
                              <option value="3">น่าน</option>
                              <option value="4">พิษณุโลก</option>
                              <option value="5">เชียงใหม่</option>
                              <option value="6">ลำปาง</option>
                              <option value="7">สถาบันวิจัยเทคโนโลยีเกษตร</option>
                           </select>
                        </div>
                        </div> -->
                     <!--                            <div id="message_fill_course_search" class="form-group text-center" style="display:none;">
                        <span class="badge badge-info"><i class="ico-info-sign mr5"></i>กรุณากรอกข้อมูลวิชาที่จะค้นหา 5 ตัวขึ้นไป</span>
                        </div>-->
                     <div class="text-center" style="padding-left: 80px;">
                        <button type="submit" class="btn btn-info">
                           <i class="glyphicon glyphicon-search " aria-hidden="true"></i>ค้นหา
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div> 
      </div>
      <div id="ajax_1" class="row">
      <div class="col-md-12">
         <div class="panel panel-default">
            <div class="panel-body">
               <div id="for_progress" class="row" style="display: none;">
                  <div class="col-md-4 col-md-offset-4">
                     <div class="progress progress-striped active">
                        <div id="load" class="progress-bar progress-bar-success" style="width: 0%"></div>
                     </div>
                  </div>
               </div>
                <div id="charts_container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">  
                </div>
               <div id="show_wait"></div>
            </div>
         </div>
      </div>
   </div>
   <footer class="footer">
      <span class="footer-divider" style="height: 5px;
         display: block;
         background: #3F51B5;"></span>
      <div class="col-md-12" style="margin-top: 50px"></div>
      <div class="container">
         <div class="">
            <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
            Deverloped By Patiphan Uthang And Yuwa Saewang
         </div>
      </div>
   </footer>
</div>
@endsection
@section('javascript')
   <script src="{{ asset('/js/js1.js') }}"></script>
   <!--chart-->
   <!--  <script src="https://code.highcharts.com/highcharts.js"></script> -->
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/modules/export-data.js"></script>
   <script type="text/javascript">
      // Build the chart
Highcharts.chart('charts_container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Student statistics report for cooperative education'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        name: 'Student',
        colorByPoint: true,
        data: [{
            name: 'Faculty of Business Administration and Liberal Arts',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Faculty of Sciences and Agricultural Technology',
            y: 14.19
        }, {
            name: 'Faculty of Engineering',
            y: 13.2
        }, {
            name: 'Faculty of Fine Arts and Architecture',
            y: 11.2
        // //}, {
        //   //  name: 'Safari',
        //     y: 4.18
        // }, {
        //     name: 'Other',
        //     y: 7.05
        }]
    }]
});
   </script>
   @endsection