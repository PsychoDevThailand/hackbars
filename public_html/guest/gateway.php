<?php
  session_start();
  require 'connection.php';

  function get_client_ip()
  {
		$ip = '';
		if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
			$_SERVER['REMOTE_ADDR']    = $_SERVER["HTTP_CF_CONNECTING_IP"];
			$_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
		}
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];
		if (filter_var($client, FILTER_VALIDATE_IP)) {
			$ip = $client;
		} elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
			$ip = $forward;
		} else {
			$ip = $remote;
		}
		return $ip;
  }

  $ip = get_client_ip();
  $sql = "SELECT * FROM guests WHERE ip = '$ip'";
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if ($data) {
    $_SESSION['Credit'] = $data['credit'];
    $_SESSION['FormulaType'] = $data['fortype'];
    $_SESSION['Username'] = "Guest" . $data['id'];
    $_SESSION['fortype'] = $data['fortype'];
    $_SESSION['ip'] = $data['ip'];
    $_SESSION['ID'] = $data['id'];
    $formula = $data['fortype'];

    $sql = "SELECT `data` FROM `formula` WHERE `type` = '$formula'";
    $result = mysqli_query($db, $sql);
    $formulas = array();

    while ($item = mysqli_fetch_assoc($result)) $formulas[] = $item['data'];
    $_SESSION['formula'] = json_encode($formulas);
    header("location: salobby_guest");
  }

  $sql = "INSERT INTO `guests`(`ip`, `credit`, `fortype`) VALUES ('$ip', '5', '1')";
  $result = mysqli_query($db, $sql);
  if (!$result) header("location: login");

  $sql = "SELECT * FROM guests WHERE ip = '$ip'";
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if ($data) {
    $_SESSION['Credit'] = $data['credit'];
    $_SESSION['FormulaType'] = $data['fortype'];
    $_SESSION['Username'] = "Guest" . $data['id'];
    $_SESSION['fortype'] = $data['fortype'];
    $_SESSION['ip'] = $data['ip'];
    $_SESSION['ID'] = $data['id'];
    $formula = $data['fortype'];

    $sql = "SELECT `data` FROM `formula` WHERE `type` = '$formula'";
    $result = mysqli_query($db, $sql);
    $formulas = array();

    while ($item = mysqli_fetch_assoc($result)) $formulas[] = $item['data'];
    $_SESSION['formula'] = json_encode($formulas);
    header("location: salobby_guest");
  }

  mysqli_close($db);
?>
