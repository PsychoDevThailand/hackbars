<?php
  include_once "./autoload.php";

    // $servername = "localhost";
    $servername = env('DB_HOST');
    $servname = "root";
    $servpass = "";
    $serv_db = "heretumc_bars";
    $db = mysqli_connect($servername, $servname, $servpass, $serv_db);
    mysqli_set_charset($db, 'utf8');
 ?>
