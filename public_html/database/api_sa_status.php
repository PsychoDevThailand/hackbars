<?php
  require_once 'connection.php';
  $url = env('API_SA');
  if (!isset($url)) {
      $url = 'http://103.91.205.216/api/sa-gaming/baccarat?api_key=b0b701fff3d01c5b515f9293cb4ede4d';
  }
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
      CURLOPT_URL            => env('API_SA'),
      // CURLOPT_URL            => "https://x-licenses.com/api/sagame",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_MAXREDIRS      => 10,
      CURLOPT_TIMEOUT        => 5,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_HTTPHEADER => $headerArr
  ));
  $response = curl_exec($curl);

  if (curl_errno($curl)) {
      $_SESSION['API_SA'] = false;
      curl_close($curl);
  } else {
      curl_close($curl);
      $sa_data = json_decode($response);
      if ($sa_data->{'status'} !== '200') {
          $_SESSION['API_SA'] = false;
      } else {
          $_SESSION['API_SA'] = true;
      }
  }
