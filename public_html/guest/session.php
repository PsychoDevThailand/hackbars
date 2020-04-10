<?php
  session_start();
  include 'connection.php';

  if (!isset($_SESSION['ID'])) {
    // session_destroy();
    // echo '<script type="text/javascript">';
    // echo 'sessionStorage.clear();';
    // echo '</script>';
    // header("location: login");
    echo 'no session id';
  }

  $id = $_SESSION['ID'];
  $sql = "SELECT * FROM `guests` WHERE `id` = '$id'";
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if (mysqli_num_rows($result) == 1) {
    $_SESSION['Credit'] = $data['credit'];
    $_SESSION['FormulaType'] = $data['fortype'];
    $_SESSION['Username'] = "Guest" . $data['id'];
    $_SESSION['fortype'] = $data['fortype'];
    $_SESSION['ip'] = $data['ip'];
    $_SESSION['ID'] = $data['id'];
    mysqli_close($db);
  } else {
    echo 'no id in database';
    // session_destroy();
    // echo '<script type="text/javascript">';
    // echo 'sessionStorage.clear();';
    // echo '</script>';
    // header("location: login");
  }

?>
