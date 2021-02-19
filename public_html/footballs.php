


<?php
require 'database/session.php';
require 'database/api_sa_status.php';
// $_SESSION['API_SA'] = false;
require 'database/api_se_status.php';
$asset_path = "asset/".$_SESSION['FormulaType'];
?>

<?php
  $file = fopen("contact.txt", "r") or die("Unable to open file!");
  $contact = fgets($file);
  fclose($file);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lobby : Baccarat</title>
  <title><?= "SOOD" ?> | โปรแกรมโกงสูตรบาคาร่า Ai แฮกบาคาร่า | Lobby : Baccarat</title>
  <meta name="keywords" content="<?= "SOOD" ?>, สูตรบาคาร่า, แจกสูตรบาคาร่า, สูตรแฮกบาคาร่า, แฮกเกอร์บาคาร่า, ขายสูตรบาคาร่า, ฟรีโปรแกรมโกงบาคาร่า, แจกโปรแกรมสูตรบาคาร่า, สอนแฮกบาคาร่า, ขายโปรแกรมโกงบาคาร่า" />
    <meta name="description" content="<?= "SOOD" ?> เว็บให้บริการสูตรแฮกเกอร์บาคาร่า ทำงานด้วยระบบ Ai ไม่ต้องจดสูตรใช้ระบบ Ai แฮกเข้า Sagaming และ SexyBaccarat เรียบร้อยแล้ว สามารถซื้อสูตรผ่านระบบเติมเงิน Wallet อัตโนมัติ สูตรนี้จัดทำขึ้นโดยเซียนพนันโดยมืออาชีพ มีประสบการณ์มากกว่า 10 ปี และยังมีกิจกรรมแจกสูตรต่างๆมากมายอีกด้วย!" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-3.4.1.js"  crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
	  <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.js"></script>
	  <script type="text/javascript" src="./js/sidebar.js"></script>
	  <script type="text/javascript" src="./js/home.js"></script>
		<!-- <script src="js/jquery-3.5.1.min.js"></script> -->
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="js/script_new.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>


  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-171496124-1');
  </script>

  <script>
  sessionStorage.setItem('User', '<?php echo $_SESSION["Username"];?>' );
  <?php if ($_SESSION['Credit'] > 999999999): ?>
  sessionStorage.setItem('formula', '<?php echo $_SESSION["formula"];?>' );
  sessionStorage.setItem('forType', '<?php echo $_SESSION["FormulaType"];?>' );
  <?php endif; ?>
  sessionStorage.setItem('sCode', '<?php echo $_SESSION["Session"];?>' );
  sessionStorage.setItem('Credit', '<?php echo $_SESSION["Credit"];?>' );
  </script>
</head>

<style type="text/css">
  .responsive-iframe {
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100vw;
    margin-top: -25px;
    /* margin-bottom: 100px; */
    min-height: 100vh;
  }
  .sidenav {
    background-image: none;
  }
  .showtext {
    font-family: 'Helvet';
    font-size: 20px;
  }

  .chancetxt {
    font-family: 'Helvet';
    margin-bottom: -5px;
    font-size: 8px;
    color: white;
  }

  .txtroom {
    font-family: 'Helvet';
    font-size: 12px;
    right: 10%;
    bottom: 0;
    position: absolute;
  }

  .resroom {
    height: 40px;
  }

  @media (min-width: 750px) {
    .showtext {
      font-size: 70px;
    }

    .chancetxt {
      margin-bottom: -35px;
      font-size: 27px;
    }

    .txtroom {
      font-size: 27px;
    }

    .resroom {
      height: 100px;
    }
  }

  @media (min-width: 1200px) {
    .resroom {
      height: 120px;
    }

    .txtroom {
      font-size: 32px;
    }

    .chancetxt {
      margin-bottom: -25px;
      font-size: 27px;
    }
  }

  @media (min-width: 992px) {
    .sidenav {
      background-image: url('resource/images/new/<?php echo $asset_path ?>/side_bar.png');
    }
  }



  hr {
    border-top: 1px solid rgb(105 115 143) !important;
       margin-top:4px;
      margin-bottom: 2px;
      border: 0;
  }
  .football {
    margin-bottom: 0;
    bottom: 0;
    background-color: #000;
  }
</style>

<body>

  <body>

  <div class="container">

  	<div class="row">
  		<div class="col">
  			<a href="index.html"><img src="images/logo.png" alt="" class="logotop" width="150"></a>
  		</div>
  		<div class="col mt-2 text-right">
  			<a href="profile.html">
  				<img src="images/icon-user.png" alt="" width="16">
  				<span class="textUser">0969532018</span>
  			</a>
  		</div>
  	</div>

  	<div class="row">
  		<div class="col">
  			<div class="bgWallet">
  				<div class="row">
  					<div class="col-2">
  						<img src="images/icon-wallet.png" alt="" width="43">
  					</div>
  					<div class="col-6">
  						<span>คุณมียอดเครดิตคงเหลือ</span>
  						<h2 class="numCredit">4,590.00</h2>
  					</div>
  					<div class="col-4">
  						<a href="#" class="btnAddCredit" data-toggle="modal" data-target="#staticBackdrop">
  							<img src="images/icon-wallet-btn.png" width="16" alt=""> เติมเครดิต
  						</a>
  					</div>
  				</div>
  				<span class="divider1"><img src="images/divider.png" width="250" alt=""></span>
  			</div>
  		</div>
  	</div>

  	<!-- Profile -->
  	<div class="row mt-4">
  		<div class="col-12">
  			<div class="">
  				<h3 class="text-center">AI วิเคราะห์ผลบอล</h3>
          <ul class="list-inline trickList" id="date-tab"></ul>
          <div id='football' style="margin-top: 30px;">
  			</div>
  		</div>
  	</div>

  </div>

</div>


<footer>
	<img src="images/logo.png" alt="" width="150">
	<p>Copyright 2019-2020 all rigreserved. Powered by SAHacker</p>
</footer>

</body>
</html>
