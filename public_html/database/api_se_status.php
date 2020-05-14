<?php
  require_once 'connection.php';
  $url = env('API_SE');
  if (!isset($url)) {
      $url = 'http://103.233.194.90/api_se/api_se.php';
  }
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  $data = json_decode($response);
  if ($data->{'status'} !== '200') {
      $_SESSION['API_SE'] = false;
  } else {
      $_SESSION['API_SE'] = true;
  }
// https://x-licenses.com/api/sexygame
