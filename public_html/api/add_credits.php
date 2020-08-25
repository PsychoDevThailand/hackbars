<?php
  require 'connection.php';

  if ($_POST['domain'] != 'spy777') {
      http_response_code(400);

      echo json_encode(
          array("message" => "Bad Domain")
      );
      exit();
  }

  $user   = mysqli_real_escape_string($db, $_POST['username']);
  $pass   = mysqli_real_escape_string($db, $_POST['password']);
  $credit = (int) $_POST['credit'];

  $sql = "INSERT INTO `users` (`uname`, `pass`, `type`, `status`, `credit`, `fortype`)
    VALUES('$user', '$pass', '1', '0', '$credit', '1')
    ON DUPLICATE KEY UPDATE `credit` = `credit` + '$credit'
  ";


  // $phone  = mysqli_real_escape_string($db, $_POST['phone']);

  // $sql = "UPDATE `users` SET `credit` = `credit` + '$credit' WHERE `phone` = '$phone'";
  $result = mysqli_query($db, $sql);

  if (!$result) {
      http_response_code(500);

      echo json_encode(
          array("message" => "Update Failed! " . mysqli_error($db))
      );
      exit();
  }


  http_response_code(200);

  echo json_encode(
      array("message" => "Update credit Success!")
  );
  mysqli_close($db);
