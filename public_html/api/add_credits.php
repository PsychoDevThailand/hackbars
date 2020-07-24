<?php
  require 'connection.php';

  if ($_POST['domain'] != 'mm88flow') {
      http_response_code(400);

      echo json_encode(
          array("message" => "Bad Domain")
      );
      exit();
  }

  $phone  = mysqli_real_escape_string($db, $_POST['phone']);
  $credit = (int) $_POST['credit'];

  $sql = "UPDATE `users` SET `credit` = `credit` + '$credit' WHERE `phone` = '$phone'";
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
