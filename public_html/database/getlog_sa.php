<?php
    session_start();
    require_once 'connection.php';
    $headers['CLIENT-IP'] = env('FAKE_IP');
    $headers['X-FORWARDED-FOR'] = env('FAKE_IP');
    $headers['X-Licenses-ID'] = env('SA_ID');
    $headers['X-Secret-Key'] = env('SA_KEY');
    $headerArr = array();
    foreach ($headers as $n => $v) {
        $headerArr[] = $n . ':' . $v;
    }

    if (!empty($_SESSION['Session'])) {
        $user = isset($_SESSION['Username']) ? $_SESSION['Username'] : '';
        $u_id  = $user;
        $sql      = "SELECT `credit` FROM `users` WHERE `uname` = '$u_id'";
        $result   = mysqli_query($db, $sql);
        $rowcount = mysqli_num_rows($result);
        if ($rowcount == 1) {
            $udata = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($udata['credit'] != 0) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    // CURLOPT_URL            => "https://x-licenses.com/api/sagame",
                    CURLOPT_URL            => env('API_SA'),
                    // CURLOPT_URL            => 'https://munee.tk/apisahacker.php',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_MAXREDIRS      => 10,
                    CURLOPT_TIMEOUT        => 5,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_HTTPHEADER => $headerArr
                ));
                $response = curl_exec($curl);
            }
        } else {
            $response = "";
        }
    } else {
        header('Location: ../index.php');
    }

    echo $response;
