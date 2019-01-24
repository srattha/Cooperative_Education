<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script language="javascript">
        function checkID(id)
        {
            if(id.length != 13) return false;
            for(i=0, sum=0; i < 12; i++)
                sum += parseFloat(id.charAt(i))*(13-i); if((11-sum%11)%10!=parseFloat(id.charAt(12)))
            return false; return true;}

            function checkForm()
            { if(!checkID(document.form1.txtID.value))
                alert('รหัสประชาชนไม่ถูกต้อง');
                else alert('รหัสประชาชนถูกต้อง เชิญผ่านได้');}

                $(function() {
                  var $divs = $('#divs > .one');
                  $divs.first().show()
                  $('input[type=radio]').on('change',function() {
                      $divs.hide();
                      $divs.eq( $('input[type=radio]').index( this ) ).show();
                  });
              });
          </script>
          <style type="text/css">
          #divs div {
            display:none;
        }
    </style>
</head>
<body>
    <form name="form1" onsubmit="checkForm(); return false;">
        <input id="id_radio1" type="radio" name="name_radio" value="value_radio1" checked="checked"/>Radio1
        <input id="id_radio2" type="radio" name="name_radio" value="value_radio2" />Radio2
        <div id="divs">
            <div class="one">
                รหัสประจำตัวประชาชน : <input type="text" name="txtID" />
            </div>
            <div class="one">
               Radio2
            </div>

        </div>
        <input type="submit" value="ตรวจสอบ" />


    </form>
</body>
</html>
