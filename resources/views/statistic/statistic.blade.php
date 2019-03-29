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
               <h3 class="panel-title" ><i class="fa fa-bar-chart"></i>&nbsp;กราฟแสดงจำนวนนักศึกษาสหกิจศึกษาตาม คณะ</h3>
            </div>
            <div class="panel-body">
               <div class="form-horizontal">
                  <div class="form-group">
                     <label class="col-md-4 control-label"><i class="glyphicon glyphicon-calendar"></i> ปี พ.ศ. &nbsp; : </label>
                     <div class="col-md-4">
                        <select id="class_year" name="class_year" class="form-control" >
                          <option selected>-กรุณาเลือก ปี พ.ศ.-</option>
                          @foreach ($year as $index => $y)
                          <option value="{{$y}}">{{$y}}</option>
                          @endforeach
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div id="for_progress" class="row" style="display: none;">
            <div class="col-md-4 col-md-offset-4">
               <div class="progress progress-striped active">
                  <div id="load" class="progress-bar progress-bar-success" style="width: 0%"></div>
               </div>
            </div>
         </div>
         <div id="container" style="">
         </div>
         <div id="show_wait"></div>
      </div>
   </div>
   <br>
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
      <div class="col-md-12" style="margin-top: 50px"></div>
   </footer>
</div>
</div>
@endsection
@section('javascript')
<script src="{{ asset('/js/js1.js') }}"></script>
<!--chart-->
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
   // Build the chart
   $(document).ready(function() {

   $('#class_year').change(function(){ 
   var class_year = $(this).val();
   
   $.post("api/statistic",{item_id:class_year}, function( res ) {
   console.log(res)
   var items  = [];
   var color  = [];
    if (res) {
      for (const r of res) { 
      var list = {'name':r.name,'y':r.y};
      items .push(list);
      if(r.key == 1){
        color.push('#00FFFF'); 
      }else if(r.key == 2){
        color.push('#00FF00');
      }else if(r.key == 3){
        color.push('#800000');
      }else{
        color.push('#63320e');
      }
    }
    // console.log(items)
    // console.log(color)
    Highcharts.setOptions({
      colors: color,
    });

   Highcharts.chart('container', {
   chart: {
     plotBackgroundColor: null,
     plotBorderWidth: null,
     plotShadow: false,
     type: 'pie'
   },
   title: {
     text: 'กราฟแสดงจำนวนนักศึกษาสหกิจศึกษาตาม คณะ' 
   },
   tooltip: {
     pointFormat: '<b>{series.name}</b> : {point.y} คน',
     //'{series.name}: <b>{point.percentage:.1f}%</b>'
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
     name: 'จำนวนนักศึกษา',
     colorByPoint: true,
     data:items 
    }]
   });
   }
   });
   });  
   });
</script>
@endsection