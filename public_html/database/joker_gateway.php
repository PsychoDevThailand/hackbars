<?php
  session_start();
  require 'connection.php';
  $user = isset($_SESSION['Username']) ? $_SESSION['Username'] : '';
  $u_id = $user;
  if ($u_id == '') {
      header("location: ../home");
  }

  $sql = "UPDATE `users` SET `credit` = `credit` - 20 WHERE uname = '$u_id'";
  $result_update = mysqli_query($db, $sql);
  mysqli_close($db);
  header("location: ../jokerlobby");
