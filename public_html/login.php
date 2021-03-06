<?php
  $file = fopen("contact.txt", "r") or die("Unable to open file!");
  $contact = fgets($file);
  fclose($file);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RICHBAC | โปรแกรมโกงสูตรบาคาร่า Ai แฮกบาคาร่า | Lobby : Baccarat</title>
  <meta name="keywords" content="RICHBAC, สูตรบาคาร่า, แจกสูตรบาคาร่า, สูตรแฮกบาคาร่า, แฮกเกอร์บาคาร่า, ขายสูตรบาคาร่า, ฟรีโปรแกรมโกงบาคาร่า, แจกโปรแกรมสูตรบาคาร่า, สอนแฮกบาคาร่า, ขายโปรแกรมโกงบาคาร่า" />
  <meta name="description" content="RICHBAC เว็บให้บริการสูตรแฮกเกอร์บาคาร่า ทำงานด้วยระบบ Ai ไม่ต้องจดสูตรใช้ระบบ Ai แฮกเข้า Sagaming และ SexyBaccarat เรียบร้อยแล้ว สามารถซื้อสูตรผ่านระบบเติมเงิน Wallet อัตโนมัติ สูตรนี้จัดทำขึ้นโดยเซียนพนันโดยมืออาชีพ มีประสบการณ์มากกว่า 10 ปี และยังมีกิจกรรมแจกสูตรต่างๆมากมายอีกด้วย!" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/userlogin.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171496124-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-171496124-1');
  </script>
  <script src="js/jquery-3.4.1.js"  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javascript" src="./js/loginpage.js"></script>
  <script language="JavaScript">

       window.onload = function () {
           document.addEventListener("contextmenu", function (e) {
               e.preventDefault();
           }, false);
           document.addEventListener("keydown", function (e) {
               //document.onkeydown = function(e) {
               // "I" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                   disabledEvent(e);
               }
               // "J" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                   disabledEvent(e);
               }
               // "S" key + macOS
               if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                   disabledEvent(e);
               }
               // "U" key
               if (e.ctrlKey && e.keyCode == 85) {
                   disabledEvent(e);
               }
               // "F12" key
               if (event.keyCode == 123) {
                   disabledEvent(e);
               }
           }, false);
           function disabledEvent(e) {
               if (e.stopPropagation) {
                   e.stopPropagation();
               } else if (window.event) {
                   window.event.cancelBubble = true;
               }
               e.preventDefault();
               return false;
           }
       }
//edit: removed ";" from last "}" because of javascript error
</script>
  <style>
    /* body,h1,h2,h3,h4,h5,p,a,button,input {
      font-family: 'Helvet';
      margin: 0px;
      letter-spacing: 0.5px;
    }
    h5,label, p,a,button,input {
      font-size: 19px !important;
    } */
    .center-box {
      padding: 5% 12% 7% 9%;
      border: 1px solid #0186f4;
      border-radius: 3px;
      /* background-image:url('resource/images/new/asset/Login/Frame_Login.png'); */
      background-size:100% 100%;
    }
    .modal-content {
      background-color: rgba(0, 0, 0, 0.9);
      border: 1px solid green;
    }

    .responsive {
      width: 100%;
      height: auto;
    }

    .bgimage1 {
      width: 350px;
      position: absolute;
      bottom: -5%;
      left: 5%;
      z-index: -99;
    }

    .bgimage2 {
      width: 350px;
      position: absolute;
      bottom: -12%;
      right: 5%;
      z-index: -99;
    }

    .logheader {
      font-family: 'Helvet';
      color: white;
      font-weight: bold;
      font-size: 32px;
      /* margin-bottom: 1em; */
    }

    .btnimg {
      height: 65px;
    }

    @media only screen and (max-width: 600px) {
      .center-box {
        padding: 5% 10% 7% 10%;
      }

      .bgimage2 {
        width: 150px;
      }

      .logoimg {
        width: 180px;
      }

      .loginimg {
        width: 30%;
      }

      .logheader {
        margin-bottom: 0;
      }

      .btnimg {
        height: 50px;
      }
    }

    @media only screen and (max-width: 370px) {}
  </style>
</head>

<body class="bg_body bg_img<?php echo 1;?>">
  <!-- Create Register Modal -->
  <div id="RegisModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered  modal-lg">

      <!-- Modal content-->
      <div class="modal-content text-white">

        <h4 class="modal-title text-center">สมัครสมาชิก</h4>
        <div class="modal-body">
          <div class="container">

            <div id="form-phone">
              <form>
                <div class="form-group">
                  <label>กรุณากรอกเบอร์โทรศัพท์ของท่าน</label>
                  <input id="phone" type="text" maxlength="10" class="form-control" placeholder="ตัวอย่าง 0990001111" />
                  <p class="form-text text-danger">* ท่านจะได้รับรหัสยืนยัน 4 หลัก ทางข้อความ SMS</p>
                </div>
              </form>

              <div class="row text-center">
                <div class="col text-right">
                  <div class="form-group">
                    <button class="btn btn-outline-success" onclick="checkPhone()">ตกลง</button>
                  </div>
                </div>
                <div class="col text-left">
                  <div class="form-group">
                    <button class="btn btn-outline-danger" data-toggle="modal" data-dismiss="modal">ปิด</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="form-otp">
              <form>
                <div class="form-group">
                  <label>กรุณากรอก OTP</label>
                  <input id="otp" type="text" maxlength="4" class="form-control" placeholder="ตัวอย่าง 1234" />
                </div>
              </form>

              <div class="row text-center">
                <div class="col text-right">
                  <div class="form-group">
                    <button class="btn btn-outline-success" onclick="findOTP()">ตกลง</button>
                  </div>
                </div>
                <div class="col text-left">
                  <div class="form-group">
                    <button class="btn btn-outline-danger" data-toggle="modal" data-dismiss="modal">ปิด</button>
                  </div>
                </div>
              </div>

            </div>

            <div id="form-user">
              <form id="regisform" method="post">

  			        <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="ภาษาอังกฤษ หรือ ตัวเลข หรือ _ 6 - 32 ตัวอักษร" name="regUser" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_]+$" autocomplete="off" required>
                </div>

                <div class="form-group">
                  <label>รหัสผ่าน</label>
                  <input type="password" class="form-control" placeholder="รหัสผ่านสำหรับเข้าใช้งาน" name="regPass" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_.-]+$" autocomplete="off" required>
                </div>

                <div class="form-group">
                  <label>รหัสผ่านอีกครั้ง</label>
                  <input type="password" class="form-control" placeholder="ใส่รหัสผ่านอีกครั้ง" name="regRepass" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_.-]+$" autocomplete="off" required>
                </div>

                <div class="row text-center">
                  <div class="col text-right">
                    <div class="form-group">
                      <input type="submit" class="btn btn-outline-success" value="Submit">
                    </div>
                  </div>
                  <div class="col text-left">
                    <div class="form-group">
                      <button class="btn btn-outline-danger" data-toggle="modal" data-dismiss="modal">
                        Close
                      </button>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="action" value="Register">
              </form>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- End Register Modal -->

  <div class="container text-center">
    <div class="div-center">

      <div>
        <img class="logoimg" src="resource/images/new/asset/Login/logosa.png" width="400px">
      </div>

      <br>
      <div class="container text-center center-box" >
        <div class="logheader" style="letter-spacing: 1px;text-shadow: 5px 5px 10px #000">เข้าสู่ระบบ</div>

        <form id="loginform" method="post">
          <div class="form-group col-md-12">
            <input type="text" id="txtUsername" class="form-control text-center" placeholder="ชื่อผู้ใช้" maxlength="16" minlength="4" autocomplete="off" required>
          </div>
          <div class="form-group col-md-12">
            <input type="password" id="txtPassword" class="form-control text-center" placeholder="รหัสผ่าน" name="pass" autocomplete="off" required>
          </div>

          <div class="row mt-3">
            <div class="col text-right pl-0">
                <a onclick="do_login()" class="btn btn-primary" style="color: #fff; font-size: 14px;">เข้าสู่ระบบ</a>
            </div>

            <div class="col text-left pr-0">
                <a data-toggle="modal" data-target="#RegisModal"  style="color: #fff; font-size: 14px;" class="btn btn-success" >สมัครฟรี! </a>
            </div>
          </div>

          <!-- Guest  -->
          <!-- <div class="row mt-3">
            <div class="col text-center pl-0">
                <a onclick="do_guest()" class="btn btn-primary" style="color: #fff; font-size: 14px;">ทดลองสูตรฟรี</a>
            </div>

          </div> -->
        </form>

      </div>
      <br>


      <div class="alert alert-light" role="alert">
        <h4 class="alert-heading text-info">
          <a href="http://line.me/ti/p/~<?php echo $contact; ?>">
            <span style="font-family: 'Helvet';font-size: 26px;" class='text-info'>
              <img src="resource/images/new/i_line.png" height="30" style="padding-bottom: 1%;">
              Line : <?php echo $contact; ?>
            </span>
          </a>
        </h4>
        <hr>
        <p>
          สำหรับลูกค้าเว็บ MM88GET สามารถนำยูสเซอร์และเบอร์โทรเข้าสู่ระบบได้ทันที หรือ สมัคร MM88GET คลิก!
          <a style="color: #ffc107" target='_blank' href="https://mm88get.com/users/sign_up?ref=webrichbac">https://mm88get.com</a>
        </p>
      </div>
    </div>
  </div>
</body>

</html>
<script type="text/javascript" src="./js/phone.js"></script>
<script type="text/javascript">
var sec_code = [];
$( document ).ready(function() {
  login_by_params()
  $("#form-otp").hide();
  $("#form-user").hide();
  var gen_code = [];
  for (var i = 0; i < 4; i++) {
    gen_code[i] = Math.floor(Math.random() * 9)
  }
  $('#secCode').html(gen_code);
  sec_code = gen_code;
});
  document.querySelector('#loginform').addEventListener('keypress', function(e) {
    var key = e.which || e.keyCode;
    if (key === 13) {
      do_login();
    }
  });

  function login_by_params() {
    var searchParams = new URLSearchParams(window.location.search)
    if (searchParams.has('username') && searchParams.has('password')) {
      $("#txtUsername").val(searchParams.get('username'))
      $("#txtPassword").val(searchParams.get('password'))
      do_login()
    }
  }

  function check_Code() {
	return true;
    let inputCode = $("#input_code").val();
    let checkCode = inputCode.split("");
    for (var i = 0; i < 4; i++) {
      if (checkCode[i] != sec_code[i]) {
        return false;
      }
    }
    return true;
  }

  function do_guest() {
    window.location.href = 'gateway';
  }

  function do_login() {
    if(check_Code()) {
      var format = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
      var username = $("#txtUsername").val();
      var password = $("#txtPassword").val();


      if (username != "" && password != "") {
        // $("#loading_spinner").css({"display":"block"});
        $.ajax({
          type: 'post',
          url: 'database/chklogin.php',
          timeout: 30000,
          data: {
            user: username,
            pass: password,
            action: "Login"
          },
          beforeSend: function(){
            Swal.fire({
              title: 'Connecting...',
              allowOutsideClick: false
            });
            swal.showLoading();
          },
          success: function(response) {
            swal.close();
            if (response == "1") {
              Swal.fire({
                type: 'error',
                title: 'เข้าสู่ระบบไม่ได้',
                text: 'Username หรือ Password ไม่ถูกต้อง!'
              });
            } else if (response == "2") {
              Swal.fire({
                type: 'error',
                title: 'เข้าสู่ระบบไม่ได้',
                text: "บัญชีถูกระงับการใช้งาน กรุณาติดต่อเจ้าหน้าที่"
              });
            } else {
              res = JSON.parse(response);
              if (res['result'] == 'success'){
              Swal.fire({
                type: 'success',
                title: 'ล๊อคอินสำเร็จ',
                text: 'กำลังเข้าสู่ระบบ โปรดรอสักครู่'
              });
              sessionStorage.setItem('User', ( res['User'] ) );
			  sessionStorage.setItem('formula', JSON.stringify( res['data'] ) );
			  sessionStorage.setItem('forType', ( res['fortype'] ) );
			  sessionStorage.setItem('sCode', ( res['sCode'] ) );
			  sessionStorage.setItem('Credit', JSON.stringify( res['Credit'] ) );
              setTimeout(function() {
                window.location.href = "lobby.php";
              }, 1000);
            } else {
              Swal.fire({
                type: 'error',
                title: response,
                text: 'กรุกรุณาลองใหม่อีกครั้งค่ะ'
              });
            }
          }
        },
          error: function(jqXHR, textStatus, errorThrown) {
            swal.close();
            Swal.fire({
              type: 'error',
              title: 'ไม่สามารถเข้าสู่ระบบได้'
            });
          }
        });
      } else {
        Swal.fire({
          type: 'error',
          title: 'กรุณากรอกข้อมูลให้ครบถ้วน'
        })
      }
      return false;
    } else {
      Swal.fire({
        type: 'error',
        title: 'Security Code ไม่ถูกต้อง'
      });
    }
  }
</script>
