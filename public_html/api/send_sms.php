<?php

  require '../sms/send_sms.php';

  if ($_POST['domain'] != 'mm88get') {
      http_response_code(400);

      echo json_encode(
          array("message" => "Bad Domain")
      );
      exit();
  }

  $phone = $_POST['phone'];
  $message = $_POST['message'];

  if (strlen($phone) < 10) {
      http_response_code(400);

      echo json_encode(array("message" => "เบอร์โทรศัพท์ไม่ถูกต้อง"));
      exit();
  }

  if (api_send_sms($phone, $message)) {
      http_response_code(200);

      echo json_encode(
          array("message" => "Send SMS Success")
      );
  } else {
      http_response_code(500);

      echo json_encode(
          array("message" => "Send SMS Failed")
      );
  }
