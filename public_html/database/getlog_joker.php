<?php
  require_once 'connection.php';
  $url = env('API_JOKER');
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
