<?php
	session_start();
	require 'connection.php';
	$user = isset($_SESSION['ID']) ? $_SESSION['ID'] : '';
	$u_id  = $user;
	if ($u_id == '') {
	    exit;
	}
	$sql_update = "UPDATE `guests` SET `credit` = `credit` - 1 WHERE id = '$u_id'";
	$result_update   = mysqli_query($db, $sql_update);
	$sql      = "SELECT `credit` FROM `guest` WHERE `id` = '$u_id'";
	$result   = mysqli_query($db, $sql);
	$rowcount = mysqli_num_rows($result);
	if ($rowcount == 1) {
	    $udata = mysqli_fetch_array($result, MYSQLI_ASSOC);
	    if ($udata['credit'] <= 0) {
	        echo '0';
	        exit();
	    } else {
	        echo $udata['credit'];
	    }
	} else {
	    echo '0';
	    exit;
	}
	mysqli_close($db);
?>
