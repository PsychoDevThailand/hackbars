<html>

<head>
  <style>
  .modal-content {
    background-color: rgba(0, 0, 0, 0.9);
    border: 1px solid #FFFF00;
  }
  </style>
</head>
<?php
  include dirname(__DIR__) . '/database/connection.php';
  // include dirname(__DIR__) . '/database/session.php';
  // require "database/connection.php";
  $u_id = $_SESSION['ID'];
  $sql=" SELECT * FROM users WHERE id = '$u_id'";
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $twsql="SELECT * FROM tw_settings";
  $twresult = mysqli_query($db, $twsql);

  $config = array();
  $twsql  = "SELECT * FROM tw_settings";
  $result = mysqli_query($db, $twsql);
  $twdata = mysqli_fetch_all($result, MYSQLI_ASSOC);

  foreach($twdata AS $row) {
    $config[$row["name"]] = $row["value"];
  }


?>

<body>


  <!-- Logout Modal -->
  <div id="OutModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content text-white">

        <h4 class="modal-title text-center">Are you sure to Log Out!</h4>
        <div class="modal-body">
          <div class="container">

            <div class="form-group">
              <div class="row">
                <div class="col">

                  <div class="container" style=" position: relative;text-align: center;color: white;">
                    <a href="database/logout.php"><img src="./resource/images/button_yes.png" style="width:70%;">
                      <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">Yes</div>
                    </a>
                  </div>

                </div>
                <div class="col">

                  <div class="container" style=" position: relative;text-align: center;color: white;">
                    <a href="#" data-dismiss="modal"><img src="./resource/images/button_no.png" style="width:70%;">
                      <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">No</div>
                    </a>
                  </div>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- End Logout Modal -->

  <!-- User Modal -->
  <div id="UserModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content text-white">

        <h4 class="modal-title text-center">Member</h4>
        <div class="modal-body">
          <div class="container">

            <div class="row">
              <div class="col-7">
                Username : <?php echo $data['uname']; ?>
              </div>
              <div id="showCreditM" class="col text-right">
                Credit : <?php echo number_format($_SESSION['Credit']); ?>
              </div>
            </div>

            <div class="row">
              <div class="col">
                Name : <?php echo $data['fname']." ".$data['lname']; ?>
              </div>
            </div>

            <div class="row">
              <div class="col">
                Phone : <?php echo $data['phone']; ?>
              </div>
            </div>

            <div class="row">
              <div class="col">
                E-mail : <?php echo $data['email']; ?>
              </div>
            </div>

            <div class="row">
              <div class="col">
                Line ID : <?php echo $data['line']; ?>
              </div>
            </div>
            <br>
          </div>
          <div class="container text-center" style="width:70%">
            <form id="passChange" method="post">
              <h4>Change Password</h4>
              <div class="row">Password</div>
              <div class="row mb-1">
                <input type="password" name="opass" class="form-control input-sm" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_.-]+$" autocomplete="off" required>
              </div>
              <div class="row ">New Password</div>
              <div class="row mb-1">
                <input type="password" name="npass" class="form-control input-sm" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_.-]+$" autocomplete="off" required>
              </div>
              <div class="row">Re-Type New Password</div>
              <div class="row mb-1">
                <input type="password" name="rnpass" class="form-control input-sm" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_.-]+$" autocomplete="off" required>
              </div>
              <br>
              <input type="submit" class="btn btn-outline-success" value="Submit">
            </form>
          </div>

          <!-- <div class="container" style=" position: relative;text-align: center;color: white;">
            <a href="#" onclick="document.getElementById('passChange').submit();"><img src="./resource/images/button_yes.png" style="width:90px;">
              <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">Submit</div>
            </a>
          </div> -->

        </div>
      </div>

    </div>
  </div>
  <!-- End User Modal -->

  <!-- Refill Modal -->
  <div id="RefillModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="border: 0px solid #000; background: #fff;">
      <!-- Modal content-->
      <div class=" text-white">

        <?php if ($_SESSION['Join']): ?>
          <div class="alert alert-light" role="alert">
            <h4 class="alert-heading text-info text-info">วิธีรับเครดิตฟรี</h4>
            <hr>
            <p> พิเศษสำหรับลูกค้า MM88FLOW เพียงท่านฝากเงินสำหรับเล่นเกมกับ MM88FLOW ก็สามารถรับเครดิตใช้งานสูตรฟรี! ทันที</p>
            <p>*พิเศษสำหรับเติมครั้งแรกรับเครดิตสูตรบาคาร่า 2 เท่าของยอดที่เติมสำหรับเล่น* ไปเติมเงิน คลิ๊ก!
              <a target='_blank' href="http://line.me/ti/p/@getv3">
                <span style="font-family: 'Helvet';font-size: 34px; color: #000;">
                  <img src="resource/images/new/i_line.png" height="30" style="padding-bottom: 1%;">
                  Line : <?php echo $contact; ?>
                </span>
              </a>
            </p>
            <p class='text-danger'><strong>*หมายเหตุ* เครดิตของสูตรบาคาร่าจะเข้าภายใน 5 นาทีหลังจากได้รับเครดิต MM88FLOW</strong></p>
          </div>
        <?php else: ?>
          <div class="alert alert-light" role="alert">
            <h4 class="alert-heading text-info">วิธีรับเครดิตฟรี</h4>
            <hr>
            <p>เครดิตหมดใช่หรือไม่ ? พิเศษหากท่านต้องการเครดิตสำหรับสูตรบาคาร่า เพียงท่านสมัครเล่นเกมกับเรา MM88FLOW เพียงเติมเงินครั้งแรก เติมเท่าไหร่ได้รับเครดิตสำหรับสูตรบาคาร่า 2 เท่า ของยอดเติมทันที (เฉพาะครั้งแรก) สมัครเลย คลิ๊ก!
              <a target='_blank' href="http://line.me/ti/p/~<?php echo $contact; ?>">
                <span style="font-family: 'Helvet';font-size: 34px; color: #000;">
                  <img src="resource/images/new/i_line.png" height="30" style="padding-bottom: 1%;">
                  Line : <?php echo $contact; ?>
                </span>
              </a>
            </p>
            <p class='text-danger'><strong>*หมายเหตุ* เครดิตของสูตรบาคาร่าจะเข้าภายใน 5 นาทีหลังจากได้รับเครดิต MM88FLOW</strong></p>
          </div>
        <?php endif ?>
      </div>
    </div>
    </div>
  </div>
  <!-- TopUP Modal -->
  <div id="TopUPModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content text-white">

        <h4 class="modal-title text-center"> เติมเงินผ่าน TrueWallet</h4>
        <div class="modal-body">
          <div class="container">
            <div class="card-body fadeIn animated">


            <div class="row" style="padding-top: 2%">
              <div class="col">
                <span>โอนเงินมาที่เบอร์ : </span>
                <input style="font-size: 50px;text-align: center;" onmouseover="javascript:this.focus();this.select();" type="text" id="walletnumber" class="form-control" value="<?php echo $config["mobilephone"]; ?>" placeholder="<?php echo $config["mobilephone"]; ?>" readonly>

                <h4 class="text-center m-3">โอนเงินขั้นต่ำ <span style="color:#FFFFFF;font-weight: bold;background-color: red;border-radius: 6px;padding-left: 10px;padding-right: 10px;cursor: text;"><?php echo number_format($config["min"]); ?></span> บาท เท่านั้น</h4>
                <p class="text-center  m-1">หากโอนเงินยอดต่ำกว่า <?php echo number_format($config["min"]); ?> บาทไม่ถือว่าเป็นการเติมเงินเข้าระบบ</p>
				<p class="text-center  m-1">หลังจากโอนเงินเสร็จแล้วรอ 1-2 นาทีให้นำข้อมูลมาแจ้งโอนเงิน</p>
        <p class="text-center  m-1"><a href="https://youtu.be/AVBUcLr79b0" target="_blank">วิธีเติมเงินคลิ๊ก</a></p>
        <h5 class="text-center m-2"><span class="badge badge-danger pulse animated infinite"><i class="fa fa-ban" aria-hidden="true"></i> ห้ามกรอกข้อความตอนโอนเด็ดขาด</span></h5>
			  </div>
              </div>
			  <div class="col">
                <span>เลขอ้างอิงวอเลท 14 หลัก :</span>
                <input id="truewallet" style="text-align: center;"  maxlength="14" type="text" class="form-control" placeholder="เลขอ้างอิงวอเลท">
              </div>
			  <!-- <h4 class="text-center m-3"><span style="color:#FFFFFF;font-weight: bold;background-color: #0048ff;border-radius: 6px;padding-left: 10px;padding-right: 10px;cursor: text;">เรทการเติมเงิน 1 บาท = <?php echo number_format($config["rate"]); ?> เครดิต</span></h4> -->
         <h4 class="text-center m-3"><span style="color:#FFFFFF;font-weight: bold;border-radius: 6px;padding-left: 10px;padding-right: 10px;cursor: text;" class="badge badge-success">เรทการเติมเงิน 1 บาท = <?php echo number_format($config["rate"]); ?> เครดิต</span></h4>
            </div>
            <div class="row">
                <div class="col">

                <div class="container" style=" position: relative;text-align: center;color: white;">
              <a href="#" id="subwallet" onclick="sentwallet()"><img src="./resource/images/button_yes.png" style="width:80%;">
                <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">แจ้งโอนเงิน</div>
              </a>
            </div>

                </div>
                <div class="col">

                  <div class="container" style=" position: relative;text-align: center;color: white;">
                    <a href="#" data-dismiss="modal"><img src="./resource/images/button_no.png" style="width:80%;">
                      <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">ปิดหน้านี้</div>
                    </a>
                  </div>

                </div>
              </div>
			<hr/>

          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- End TopUP Modal -->
</body>

</html>
<script type="text/javascript">
  $("#passChange").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.
    if ($('input[name=npass]').val() == $('input[name=rnpass]').val()) {
      var form = $("#passChange");

      $.ajax({
        type: "POST",
        url: "database/changePass.php",
        data: form.serialize(), // serializes the form's elements.
        beforeSend: function(){
          Swal.fire({
            title: 'กำลังส่งข้อมูล..',
            allowOutsideClick: false
          });
          swal.showLoading();
        },
        success: function(data) {
          swal.close();
          console.log(data);
          if (data == "success") {
            Swal.fire(
              'สำเร็จ!',
              'เปลี่ยนรหัสผ่านเรียบร้อย',
              'success'
            );
            $('#passChange').trigger("reset");
          } else {
            Swal.fire({
              type: 'error',
              title: 'ผิดพลาด!',
              text: data
            });
          }

        },
        error: function(jqXHR, textStatus, errorThrown) {
          swal.close();
          alert("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้");
          window.location.href = "login.php";
        }
      });
    } else {
      Swal.fire(
        'ผิดพลาด',
        'รหัสผ่านใหม่ทั้งสองไม่ตรงกัน',
        'error'
      );
    }


  });

  function sendcode() {
    var usercode = $('#usercode').val();
    if (usercode.length != 16) {
      Swal.fire(
        'ข้อมูลไม่ถูกต้อง',
        'โปรคตรวจสอบความถูกต้อง',
        'question'
      );
    } else {
      $.ajax({
        type: "POST",
        url: "database/refillcode.php",
        data: {
          recode: usercode
        }, // serializes the form's elements.
        beforeSend: function(){
          Swal.fire({
            title: 'กำลังตรวจสอบรหัสเติมเงิน..',
            allowOutsideClick: false
          });
          swal.showLoading();
        },
        success: function(data) {
          swal.close();
          res = JSON.parse(data);
          if (res.result) {
            let strcredit = $.number(res.str);
            alstr = 'Credit คงเหลือ ' + strcredit + ' บาท';
            Swal.fire(
              'เติมเงินสำเร็จ',
              alstr,
              'success'
            );
            $('#usercode').val('');
            $('#navCredit').html('<img src="resource/images/new/credit.png" style="height:100%;"> &nbsp;' + strcredit + ' &nbsp;');
            $('#showCreditM').html('Credit : ' + strcredit);
            $('#RefillModal').modal('toggle');
			sessionStorage.setItem("Credit", strcredit);
            setTimeout(function(){ window.location.reload(); }, 2000);
          } else {
            Swal.fire(
              'ไม่สามารถเติมเงินได้',
              res.str,
              'error'
            );
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          swal.close();
          alert("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้");
          window.location.href = "login.php";
        }
      });
    }
  }

  function sentwallet() {
    var truewallet = $('#truewallet').val();
    if (truewallet.length != 14) {
      Swal.fire(
        'ข้อมูลไม่ถูกต้อง',
        'โปรคตรวจสอบความถูกต้อง',
        'question'
      );
    } else {
      $.ajax({
        type: "POST",
        url: "database/truewallet.php",
        data: {
          tid: truewallet
        }, // serializes the form's elements.
        beforeSend: function(){
          Swal.fire({
            title: 'กำลังตรวจสอบ',
            allowOutsideClick: false
          });
          swal.showLoading();
        },
        success: function(data) {
          swal.close();
          res = JSON.parse(data);
          if (res.result) {
            let strcredit = $.number(res.str);
            alstr = 'รับ Credit จำนวน ' + strcredit + ' บาท';
            Swal.fire(
              'เติมเงินสำเร็จ',
              alstr,
              'success'
            );
            $('#usercode').val('');
            $('#navCredit').html('<img src="resource/images/new/credit.png" style="height:100%;"> &nbsp;' + strcredit + ' &nbsp;');
            $('#showCreditM').html('Credit : ' + strcredit);
            $('#RefillModal').modal('toggle');
			sessionStorage.setItem("Credit", strcredit);
            setTimeout(function(){ window.location.reload(); }, 2000);
          } else {
            Swal.fire(
              'ไม่สามารถเติมเงินได้',
              res.str,
              'error'
            );
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          swal.close();
          alert("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้");
          window.location.href = "login.php";
        }
      });
    }
  }
</script>
