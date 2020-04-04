<?php
	// $ip_address = explode('.',$_SERVER['REMOTE_ADDR']);
	// if (count(explode('::',$ip_address[0]))<2&&$ip_address[0]!='192'&&$ip_address[0]!='168'&&$ip_address[0]!='127') {
	//     $servername = "localhost";
	//     $servname = "botzinth_sahacker";
	//     $servpass = "FWWX3RTnSY";
	//     $serv_db = "botzinth_sahacker";
	//     $db = mysqli_connect($servername, $servname, $servpass, $serv_db);
	//     mysqli_set_charset($db, 'utf8');
 //    }else{
		$servername = "localhost";
	    $servname = "root";
	    $servpass = "";
	    $serv_db = "heretumc_bars";
	    $db = mysqli_connect($servername, $servname, $servpass, $serv_db);
	    mysqli_set_charset($db, 'utf8');
	// }
	date_default_timezone_set("Asia/Bangkok");
 ?>
