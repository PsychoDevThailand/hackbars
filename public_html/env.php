<?php
  $variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'DB_NAME' => 'hackbars',
    'DB_PORT' => '3306',
    'SMS_USERNAME' => '0968745703',
    'SMS_PASSWORD' => '129591',
    'API_SE' => 'http://103.233.194.90/api_se/api_se.php',
    // 'API_SA' => 'http://103.233.194.90/api_sa/api/sa-gaming',
    'API_SA' => 'http://103.91.205.216/api/sa-gaming/baccarat?api_key=b0b701fff3d01c5b515f9293cb4ede4d',
    // 'API_SE' => 'http://103.91.205.216/api/se-gaming/baccarat?api_key=b0b701fff3d01c5b515f9293cb4ede4d',
    'API_VIVO' => 'http://103.233.194.90/api-vivo/api_vivo.php',
    'API_JOKER' => 'http://103.233.194.90/api-vivo/api_joker.php'
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
