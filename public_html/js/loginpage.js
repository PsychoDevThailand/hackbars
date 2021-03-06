$(document).ready(function(){
  $("#regisform").submit(function(e) {

      e.preventDefault(); // avoid to execute the actual submit of the form.

      var form = $("#regisform").serialize();
      form += "&regPhone=" + $("#phone").val();

      $.ajax({
             type: "POST",
             url: "database/register.php",
             data: form, // serializes the form's elements.
             success: function(data)
             {
               if(data == "success")
               {
                 Swal.fire(
                    'ลงทะเบียนเรียบร้อย!',
                    'คุณสามารถเข้าสู่ระบบด้วยแอคเค้านี้ได้ทันที',
                    'success'
                  );
                  $('#form-phone').show();
                  $('#form-otp').hide();
                  $('#form-user').hide();
                  $('#regisform').trigger("reset");
                  $('#RegisModal').modal('toggle');
               } else {
                 Swal.fire({
                    type: 'error',
                    title: data,
                    text: 'ลงทะเบียนไม่สำเร็จ',
                  });
               }

             },
             error: function (jqXHR, textStatus, errorThrown) {
                 alert("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้");
                 window.location.href = "login";
             }
           });
  });



});
