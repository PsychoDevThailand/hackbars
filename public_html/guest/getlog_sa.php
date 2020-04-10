<?php
	session_start();
	require_once 'connection.php';
	$user = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';
	$u_id  = $user;
	$sql      = "SELECT `credit` FROM `guests` WHERE `id` = '$u_id'";
	$result   = mysqli_query($db, $sql);
	$rowcount = mysqli_num_rows($result);
	if ($rowcount == 1) {
	    $udata = mysqli_fetch_array($result, MYSQLI_ASSOC);
	    if ($udata['credit'] <= 0) {
	    	$url = "sa_empty.php";
	    } else {
	    	$url = "http://103.91.205.216/api/sa-gaming/baccarat?api_key=d48d135ce1948a46a961a7ad858541eb";
	    }
	}else{
	    	$url = "http://103.91.205.216/sexyBaccarat/api_se.php";
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

	echo $response;
?>
