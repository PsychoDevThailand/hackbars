<?php
  $variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'DB_NAME' => 'richbacc_db',
    'DB_PORT' => '3306',
    'SMS_USERNAME' => '0968745703',
    'SMS_PASSWORD' => '129591',
    'API_SE' => 'http://103.233.194.90/api_se/api_se.php',
    // 'API_SA' => 'http://103.233.194.90/api_sa/api/sa-gaming',
    // 'API_SA' => 'http://103.91.205.216/api/sa-gaming/baccarat?api_key=b0b701fff3d01c5b515f9293cb4ede4d',
    // 'API_SA' => 'https://munee.tk/apisahacker.php',
    'API_SA' => 'http://103.233.194.90/api-sa/api_sa.php',
    'API_WORLD' => 'http://localhost/api-world-casino/api_world.php',
    // 'API_SE' => 'http://103.91.205.216/api/se-gaming/baccarat?api_key=b0b701fff3d01c5b515f9293cb4ede4d',
    'API_VIVO' => 'http://103.233.194.90/api-vivo/api_vivo.php',
    'API_JOKER' => 'http://103.233.194.90/api-vivo/api_joker.php',
    'API_WM' => 'http://103.233.194.90/api-vivo/api_wm.php',
    'FAKE_IP' => '103.245.164.63',
    'SA_ID' => 'b6d767d2f8ed5d21a44b0e5886680cb9',
    'SA_KEY' => '0d681bd3105592c89689154afe267aacff55e52c0714b4edbb1a95b25e3726fd',
    'SE_ID' => '37693cfc748049e45d87b8c7d8b9aacd',
    'SE_KEY' => 'a6ee706a54284fa9af75a99acf760da51b5a8f609b88ed392435b76bffa5cfcc',
    'SA_URL' => 'https://x-licenses.com/api/sagame',
    'SE_URL' => 'https://x-licenses.com/api/sexygame'
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
