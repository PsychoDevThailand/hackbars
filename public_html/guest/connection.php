<?php
  include dirname(__DIR__) . '/autoload.php';
  $servername = env('DB_HOST');
  $servname = env('DB_USERNAME');
  $servpass = env('DB_PASSWORD');
  $serv_db = env('DB_NAME');
  $db = mysqli_connect($servername, $servname, $servpass, $serv_db);
  mysqli_set_charset($db, 'utf8');
	date_default_timezone_set("Asia/Bangkok");
?>
