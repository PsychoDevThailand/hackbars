<?php
  require_once 'connection.php';
  $url = env('API_SA');
  $headers['CLIENT-IP'] = env('FAKE_IP');
  $headers['X-FORWARDED-FOR'] = env('FAKE_IP');
  $headers['X-Licenses-ID'] = env('SA_ID');
  $headers['X-Secret-Key'] = env('SA_KEY');
  $headerArr = array();
  foreach ($headers as $n => $v) {
      $headerArr[] = $n . ':' . $v;
  }

  $curl = curl_init();
  curl_setopt_array($curl, array(
      CURLOPT_URL            => "https://x-licenses.com/api/sagame",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_MAXREDIRS      => 10,
      CURLOPT_TIMEOUT        => 30,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_HTTPHEADER => $headerArr
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  $data = json_decode($response);
  if ($data->{'status'} !== '200') {
      $_SESSION['API_SA'] = false;
  } else {
      $_SESSION['API_SA'] = true;
  }
