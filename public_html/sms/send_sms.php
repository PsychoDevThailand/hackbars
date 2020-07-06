<?php
  include dirname(__DIR__) . '/autoload.php';
    include("sms.class.php");

    // $username = $_REQUEST['username'];
    // $password = $_REQUEST['password'];
    // $msisdn = $_REQUEST['msisdn'];
    // $message = $_REQUEST['message'];
    // $sender = $_REQUEST['sender'];
    // $ScheduledDelivery = $_REQUEST['ScheduledDelivery'];
    // $force = $_REQUEST['force'];
  //
    // $result = sms::send_sms($username,$password,$msisdn,$message,$sender,$ScheduledDelivery,$force);
    // echo $result;

  function send_sms($phone, $otp)
  {
      $username = env('SMS_USERNAME');
      $password = env('SMS_PASSWORD');
      $msisdn = $phone;
      $message = 'OTP : ' . strval($otp);
      $sender = 'SMS';
      $ScheduledDelivery = '2004040101';
      $force = 'standard';

      $result = sms::send_sms($username, $password, $msisdn, $message, $sender, $ScheduledDelivery, $force);
      if ($result) {
          return true;
      }
      return false;
  }

  function api_send_sms($phone, $otp)
  {
      $username = env('SMS_USERNAME');
      $password = env('SMS_PASSWORD');
      $msisdn = $phone;
      $message = strval($otp);
      $sender = 'SMS';
      $ScheduledDelivery = '2004040101';
      $force = 'standard';

      $result = sms::send_sms($username, $password, $msisdn, $message, $sender, $ScheduledDelivery, $force);
      if ($result) {
          return true;
      }
      return false;
  }
