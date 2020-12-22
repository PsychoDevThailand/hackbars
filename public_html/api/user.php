<?php
  require 'connection.php';

  if ($_GET['domain'] != env('DOMAIN')) {
      http_response_code(400);

      echo json_encode(
          array("message" => "Bad Domain")
      );
      exit();
  }

  // $phone = mysqli_real_escape_string($db, $_GET['phone']);
  $uname = mysqli_real_escape_string($db, $_GET['username']);

  $sql = "SELECT `uname`, `pass`, `credit` FROM `users` WHERE `uname` = '$uname'";
  $result = mysqli_query($db, $sql);

  if (!$result) {
      http_response_code(500);

      echo json_encode(
          array("message" => "Select Failed! " . mysqli_error($db))
      );
      exit();
  }

  $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if (mysqli_num_rows($result) == 1) {
      http_response_code(200);

      echo json_encode(
          array("username" => $data['uname'], "password" => $data['pass'], "credits" => $data['credit'])
      );
  } else {
      http_response_code(500);

      echo json_encode(
          array("message" => "Select Failed! " . mysqli_error($db))
      );
      exit();
  }

  mysqli_close($db);
