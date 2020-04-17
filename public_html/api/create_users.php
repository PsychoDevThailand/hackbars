<?php
  require 'connection.php';

  if ($_POST['domain'] != 'mm88get') {
    http_response_code(400);

    echo json_encode(
      array("message" => "Bad Domain")
    );
    exit();
  }

  $user   = mysqli_real_escape_string($db, $_POST['username']);
  $pass   = mysqli_real_escape_string($db, $_POST['password']);
  $phone  = mysqli_real_escape_string($db, $_POST['phone']);

  $sql = "SELECT `phone` FROM `users` WHERE `phone` = '$phone'";
  $result = mysqli_query($db, $sql);

  // update
  if (mysqli_num_rows($result) > 0) {
    $status = true;
    $sql = "UPDATE `users` SET `join_mm88get` = '$status', `uname` = '$user', `pass` = '$pass' WHERE `phone` = '$phone'";
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
      array("message" => "Update join_mm88get Success!")
    );
    exit();
  }

  // create
  $sql    = "INSERT INTO `users`(`uname`, `pass`, `type`, `status`,`credit`, `fortype`, `phone`, `join_mm88get`)
  VALUES ('$user','$pass','1','0','10','1','$phone', '1')";

  $result = mysqli_query($db, $sql);

  if ($result) {
    http_response_code(200);

    echo json_encode(
      array("message" => "Create join_mm88get Success!")
    );
  } else {
    http_response_code(500);

    echo json_encode(
      array("message" => "Create Failed! " . mysqli_error($db))
    );
  }
  mysqli_close($db);
?>
