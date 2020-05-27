<?php
  // require_once 'connection.php';
  include dirname(__DIR__) . '/autoload.php';
  // $url = env('API_JOKER');
  // if (!isset($url)) {
  //     $url = 'http://localhost/api-vivo/api_party.php';
  // }
  // $url = 'http://localhost/api-vivo/api_party.php';
  $url = 'http://103.233.194.90/api-vivo/api_party.php';
  $curl = curl_init();
  curl_setopt_array(
      $curl,
      array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          // CURLOPT_ENCODING => "",
          // CURLOPT_MAXREDIRS => 10,
          // CURLOPT_TIMEOUT => 0,
          // CURLOPT_FOLLOWLOCATION => true,
          // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          // CURLOPT_CUSTOMREQUEST => "GET",
    )
  );

  $response = curl_exec($curl);
  $jsonData = json_decode($response, true);
  $slots = $jsonData['data'];
  curl_close($curl);
