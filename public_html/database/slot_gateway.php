<?php
  session_start();
  require 'connection.php';

  $slots = ['gtm', 'joker', 'party', 'spinomenal', 'tomhorn', 'pg'];

  if (!isset($_GET['slot'])) {
      header("location: ../home");
  }

  $user = isset($_SESSION['Username']) ? $_SESSION['Username'] : '';
  $u_id = $user;

  if ($u_id == '') {
      header("location: ../home");
  }

  $sql = "UPDATE `users` SET `credit` = `credit` - 20 WHERE uname = '$u_id' AND credit >= 0";
  $result_update = mysqli_query($db, $sql);
  mysqli_close($db);
  $location = "location: ../" . $_GET['slot'] . "lobby";
  if (in_array($_GET['slot'], $slots)) {
      header($location);
  } else {
      header("location: ../home");
  }
