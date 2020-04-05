<?php
  require 'connection.php';
  require '../sms/send_sms.php';

  $phone = mysqli_real_escape_string($db, $_POST['phone']);


  if (strlen($phone) < 10) {
    echo "เบอร์โทรศัพท์ไม่ถูกต้อง";
    exit();
  }

  $sql = " SELECT `phone` FROM `users` WHERE `phone` = '$phone' ";
  $result = mysqli_query($db, $sql);
  if ($result) {
    $row = mysqli_num_rows($result);
  } else {
    $row = -1;
  }

  if ($row > 0) {
    echo 'เบอร์โทรนี้มีในระบบแล้ว กรุณาติดต่อ admin ที่ line add';
    exit();
  }

  $otp_rand = strval(rand(1000, 9999));
  $sql = "INSERT INTO `phones`(`phone`, `otp`) VALUES('$phone', '$otp_rand')";
  $result = mysqli_query($db, $sql);

  if ($result) {
    if (send_sms($phone, $otp_rand)) echo 'success';
    else echo 'ส่ง sms ไม่สำเร็จ';
  } else {
    echo mysqli_error($result);
  }

  mysqli_close($db);
?>
