<?php
  include dirname(__DIR__) . '/autoload.php';
  // $url = 'http://localhost/api-slot/api_slots.php?table=' . $table_name;
  $url = 'http://103.233.194.90/api-slot/api_slots.php?table=' . $table_name;
  // $url = 'http://103.233.194.90/api-vivo/api_spinomenal.php';
  $curl = curl_init();
  curl_setopt_array(
      $curl,
      array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
    )
  );

  $response = curl_exec($curl);
  $jsonData = json_decode($response, true);
  $slots = $jsonData['data'];
  curl_close($curl);
