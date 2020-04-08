// $(document).ready(function() {
//   function checkPhone() {
//     var phone = $("#phone").val();
//
//     console.log('phone : ', phone);
//   }
// });

function checkPhone() {
  var phone = $("#phone").val();

  var data = { 'phone': phone };

  $.ajax({
    type: "POST",
    url: "database/uniqPhone.php",
    data: data,
    success: function(data) {
      if (data == "success") {
        Swal.fire({
          type: 'success',
          title: data,
          text: 'สามารถใช้เบอร์โทรนี้ได้'
        });

        $("#form-phone").hide();
        $("#form-otp").show();
      } else {
        Swal.fire({
          type: 'error',
          title: data,
          // text: "Phone is not Uniq"
        })
      }
    },

    error: function (jqXHR, textStatus, errorThrown) {
      alert("Error");
    }
  })
}

function findOTP() {
  var phone = $("#phone").val();
  var otp = $("#otp").val();

  var data = { 'phone': phone, 'otp': otp};

  $.ajax({
    type: "POST",
    url: "database/findOTP.php",
    data: data,
    success: function (data) {
      if (data == "success") {
        Swal.fire({
          type: 'success',
          title: data,
          text: 'OTP ถูกต้อง'
        });

        $("#form-otp").hide();
        $("#form-user").show();
      } else {
        Swal.fire({
          type: 'error',
          title: data
        });
      }
    },

    error: function (jqXHR, textStatus, errorThrown) {
      alert("Error");
    }
  })
}
