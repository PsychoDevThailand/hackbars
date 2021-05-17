<?php
  require 'database/session.php';
?>


<!DOCTYPE html>
<html lang="en">

  <head>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>วิเคราะห์บอล วิเคราะห์บอลวันนี้| <?php echo strtoupper(env('DOMAIN')) ?></title>


  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
      <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

      <link rel="stylesheet" href="css/style_new.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

      <script src="js/script_new1.js"></script>
      <script src="https://momentjs.com/downloads/moment.js"></script>
      <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

  </head>


  <body>
  	<div class="main">
      <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content" id='myModalContent'>
          </div>
        </div>
      </div>

      <div class="container">
        <center style="font-size: 30px; color: #fdbd00"><span>AI วิเคราะห์ผลบอล</span></center>
        <hr style="border-top: 1px solid #fdbd00;">
        <ul class="list-inline trickList">
        <li class="list-inline-item bgTrick"><a href="#">12 ธ.ค.</a></li>
        <li class="list-inline-item bgTrick"><a href="#">13 ธ.ค.</a></li>
        <li class="list-inline-item bgTrick activeTrick"><a href="#">วันนี้</a></li>
        <li class="list-inline-item bgTrick"><a href="#">15 ธ.ค.</a></li>
        <li class="list-inline-item bgTrick"><a href="#">16 ธ.ค.</a></li>
      </ul>
        	<ul class="list-inline trickList" id="date-tab">

          </ul>
        <div id='football' style="margin-top: 30px;">
        </div>
    	</div>
  	</div>
  </body>
</html>
