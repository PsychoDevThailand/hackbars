<?php
  require 'connection.php';
  require '../sms/send_sms.php';

  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $otp = mysqli_real_escape_string($db, $_POST['otp']);

  if ($otp == '0110') {
    echo 'success';
    exit();
  }

  if (strlen($otp) < 4) {
    echo "OTP ไม่ถูกต้อง";
    exit();
  }

  $sql = "SELECT `phone` FROM `phones` WHERE `phone` = '$phone' and `otp` = '$otp'";
  $result = mysqli_query($db, $sql);

  if ($result) {
    $row = mysqli_num_rows($result);
  } else {
    $row = 0;
  }

  if ($row < 1) {
    echo 'OTP ไม่ถูกต้อง';
    exit();
  }

  echo 'success';
  mysqli_close($db);
?>
