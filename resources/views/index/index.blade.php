@extends('layouts.index')
@section('title','ระบบบริหารจัดการข้อมูลสหกิจศึกษา')
@section('css')
@endsection
<style type="text/css"> 

</style>
@section('content')
<div class="container">
   <div class="col-md-12">
      <div class="row overlay"> 
         <img class="spotlight" alt="ในภาพอาจจะมี ดอกไม้,    ข้อความ และธรรมชาติ" aria-busy="true" src=assets/gallery/logo.jpg style="width: 1140px; display: block;
            max-width: 100%;
            height: auto;">
      </div>
   </div>
   <div class="container-fluid panel panel-default" style="margin-top: -20px;">
      <div class="col-md-12">
         <div class="text-in ner">
          <hr>
            <h4 style="color:  #3F51B5; font-weight: bold">สหกิจศึกษาและการฝึกงานทางวิศวกรรมคืออะไร</h4>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ในปัจจุบันการศึกษาต่างๆ ได้มีการขยายศักยภาพทางการศึกษาขึ้นไปอย่างกว้างขวางมีการเปิดการเรียนการสอนหลากหลายสาขาวิชา อาจจะเปิดการศึกษาเพื่อผลิตนักศึกษาออกไปสนองความต้องการของตลาดแรงงานที่มีการเจริญเติบโตอย่างรวดเร็วหรืออาจจะเปิดการเรียนการสอนเพราะเนื่องจากสถานศึกษาในแต่ล่ะแห่งมีความพร้อมทั้งทางด้านบุคลากรและครุภัณฑ์ ซึ่งจะด้วยเหตุผลใดก็ตามจุดประสงค์หลักการผลิตนักสึกษาของแต่ละสถาบันเพื่อต้องการให้นักศึกษาเป็นคนดีมีความรู้ความสามารถทั้งด้านการเป็นนักปฏิบัติงาน และวิชาการตรงกับความต้องการของตลาดแรงงาน ดังนั้นโครงงานสหกิจศึกษาและฝึกงานทางวิศวกรรม ซึ่งเป็นโครงการฯที่หาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก ได้เข้าร่วมมือกับสถานประกอบการให้นักศึกษาได้ เข้าไปปฏิบัติงานเสมือนหนึ่งพนักงานของบริษัทเป็นระยะเวลา 1 ภาคการศึกษา (17 สัปดวห์) โดยปฏิบัติงานเต็มเวลา ทำให้นักศึกษาได้เรียนรู้หลักและวิธีการทำงาน การแก้ไขปัญหา การทำงานร่วมกับบุคคลอื่นทั้งใน ระดับคนงานและหัวหน้าคนงาน ซึ่งสิ่งเหล่านี้นักศึกษาไม่สามารถหาเรียนได้จากในห้องเรียน</p>
            <hr>
            <h4 style="color:  #3F51B5; font-weight: bold" >หลักการและเหตุผล</h4>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  มหาวิทยาลันเทคโนโลยีราชมงคลล้านนา ตาก เป็นมหาวิทยาลัยระดับอุดมศึกษาที่มีการจัดการเรียนการสอน โดยเน้นในด้านสาขาวิชาชีพ ด้านวิศวกรรมศาสตร์ ได้ตระหนักถึงกระบวนการจัดการเรียนการสอนเพื่อให้นักศึกษาที่สำเร็จการศึกษาไปแล้ว ได้ทำงานตรงกับความต้องการของตลาดแรงงานและทำงานได้อย่างมี ประสิทธิภาพ จึงมีความสนใจที่จะเข้าร่วมโครงการสหกิจศึกษาเพื่อเป็นการเตรียมความพร้อมของนักศึกษาใหเ้ได้มีโอกาสเข้าสัมผัสงานจริงภายในสถานประกอบการตามสาขาที่ตนเองกำลังศึกษาอยู่และเพื่อจะได้เป็นข้อมูลของมหาวิทยาลัยฯในการปรับกลยุทธ์การเรียนการสอนรวมถึงการปรับหลักสูตรให้ตรงกับความต้องการของตลากแรงงานต่อไป ส่วนสถานประกอบการจะได้มีโอกาสแลกเปลี่ยนความรู้และประสบการณ์ในการทำงาน รวมถึงจะเป็นส่วนหนึ่งของการร่วมกันพัฒนาแรงงานของประเภทชาติให้มรความเข้มแข็งสามารถผลิตงานที่มีคุณภาพแข่งขันกับตลาดโลกได้ และเป็นการเปิดโอกาสให้นักศึกษา มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก และสถานประกอบการ ได้ร่วมมือกันในการพัฒนาบุคลากร เพื่อจะได้เป็นกำลังคัญของประเทศชาติ ต่อไป</p>
            <hr>
            <h4 style="color:  #3F51B5; font-weight: bold">วัตถุประสงค์</h4>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.  &nbsp;&nbsp;เพื่อเปิดโอกาสให้นักศึกษาได้เข้าไปมีส่วนร่วมในการทำงานจริง และศึกษางานในสถานประกอบการนกเหนือจากห้องเรียนและห้องปฏิบัติ</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.  &nbsp;&nbsp;เพื่อเปิดโอกาสให้สถานประกอบการมีส่วนร่วมในการพัฒนาบัญฑิตที่มีคุณภาพ ตรงกับความต้องการของตลาดแรงงาน</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.  &nbsp;&nbsp;เพื่อส่งเสริมและสร้างความสัมพันธ์ระหว่างมหาวิทยาลัยฯ และสถานประกอบการ</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.  &nbsp; เพื่อเป็นการใช้ทรัพยากรร่วมกัน เพิ่มโอกาสในการทำงานวิจัยประยุกต์เพื่ออุตสาหกรรมอย่างแท้จริง</p>
         </div>
         <br>
      </div>
   </div>
   <!--footer -->
   <footer class="footer">
      <span class="footer-divider" style="height: 5px;
         display: block;
         background: #3F51B5;"></span>
      <div class="col-md-12" style="margin-top: 50px"></div>
      <div class="container">
         <div class="col-sm-6">
            <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
            Deverloped By Patiphan Uthang And Yuwa Saewang
         </div>
      </div>
      <div class="col-md-12" style="margin-top: 50px"></div>
   </footer>
</div>
@endsection
@section('javascript')
<!-- <script type="text/javascript">
   $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
   });
</script> -->
@endsection