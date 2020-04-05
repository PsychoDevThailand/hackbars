<?php
  $variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'DB_NAME' => 'hackbars',
    'DB_PORT' => '3306',
    'SMS_USERNAME' => '0968745703',
    'SMS_PASSWORD' => '129591'
  ];

  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
?>
