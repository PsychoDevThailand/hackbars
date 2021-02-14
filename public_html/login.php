<?php
  include_once "./autoload.php";
  $file = fopen("contact.txt", "r") or die("Unable to open file!");
  $contact = fgets($file);
  fclose($file);

  $register_link = "https://".env('DOMAIN') .".com/users/sign_up?ref=SOOD";
  $link = "https://".env('DOMAIN').".com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= "SOOD" ?> | โปรแกรมโกงสูตรบาคาร่า Ai แฮกบาคาร่า | Lobby : Baccarat</title>
  <meta name="keywords" content="<?= "SOOD" ?>, สูตรบาคาร่า, แจกสูตรบาคาร่า, สูตรแฮกบาคาร่า, แฮกเกอร์บาคาร่า, ขายสูตรบาคาร่า, ฟรีโปรแกรมโกงบาคาร่า, แจกโปรแกรมสูตรบาคาร่า, สอนแฮกบาคาร่า, ขายโปรแกรมโกงบาคาร่า" />
  <meta name="description" content="<?= "SOOD" ?> เว็บให้บริการสูตรแฮกเกอร์บาคาร่า ทำงานด้วยระบบ Ai ไม่ต้องจดสูตรใช้ระบบ Ai แฮกเข้า Sagaming และ SexyBaccarat เรียบร้อยแล้ว สามารถซื้อสูตรผ่านระบบเติมเงิน Wallet อัตโนมัติ สูตรนี้จัดทำขึ้นโดยเซียนพนันโดยมืออาชีพ มีประสบการณ์มากกว่า 10 ปี และยังมีกิจกรรมแจกสูตรต่างๆมากมายอีกด้วย!" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/userlogin.css">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="css/style.css">
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

</head>

<body class="bgLogin">

<div class="container">


	<div class="row">
		<div class="col text-center topLogo">
			<img src="images/logo.png" alt="" width="200">
		</div>
	</div>

	<div class="row">
		<div class="col text-center textHeadLogin">
			<h3>เข้าสู่ระบบสมาชิก</h3>
			<p>สำหรับลูกค้าเว็บ <?php echo strtoupper(env('DOMAIN')) ?>  สามารถนำยูสเซอร์และเบอร์โทรเข้าสู่ระบบได้ทันที</p>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="bgFormLogin">
        <form id="loginform" method="post">
  				<input class="form-control bdGold mb-2" type="text" id="txtUsername" placeholder="ยูสเซอร์" maxlength="16" minlength="4" autocomplete="off" required>
  				<input class="form-control bdGold mb-2" type="password" id="txtPassword" class="form-control text-center" placeholder="รหัสผ่าน" name="pass" autocomplete="off" required >
  				<a href="#" onclick="do_login()" class="btn btn-block btn-primary">เข้าสู่ระบบ</a>
  				<span class="divider1"><img src="images/divider.png" width="250" alt=""></span>
        </form>
			</div>
		</div>
    
		<div class="col-12 mt-3 text-center">
			ยังไม่ได้เป็นสมาชิก <a href="<?php echo $register_link ?>" class="linkRegister">สมัครสมาชิกที่นี่</a>
		</div>
	</div>

</div>


<footer class="mt-4">
	<p>พบปัญหาการใช้งานหรือสอบถามข้อมูลเพิ่มเติมแอดไลน์</p>
	<a href="http://line.me/ti/p/~<?php echo $contact; ?>" class="btn lineBtn lineLogin">
		<img src="images/icon-line-btn.png" alt=""> <?php echo $contact; ?>
	</a>
</footer>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>

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
