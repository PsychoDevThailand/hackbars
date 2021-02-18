<?php
require 'database/session.php';
$table_name = $_GET['table'];
require 'database/getlog_slots.php';
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

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/animate.css">
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
<body>

<div class="container">
	<?php
	  include './resource/modal.php';
		include 'navbar2.php';
	?>

	<?php
		$line_contact = $contact;
		if (strpos($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], "imba88") !== false) {
				$line_contact = "@imba88";
		}
	?>
  <div class="row mt-4">
  <div class="col-12">
    <div class="">
      <ul class="list-inline trickList">
        <li class="list-inline-item listLogo ">
          <a href="database/slot_gateway.php?slot=slotxo"><img src="images/slot/slotxo.png" alt=""></a>
        </li>
        <li class="list-inline-item listLogo">
          <a href="database/slot_gateway.php?slot=pg_slot"><img src="images/slot/pg.png" alt=""></a>
        </li>
        <li class="list-inline-item listLogo">
          <a href="database/slot_gateway.php?slot=live_22"><img src="images/slot/live22.png" alt=""></a>
        </li>
        <li class="list-inline-item listLogo">
          <a href="database/slot_gateway.php?slot=askmebet"><img src="images/slot/amb.png" alt=""></a>
        </li>
        <li class="list-inline-item listLogo">
          <a href="database/slot_gateway.php?slot=ameba"><img src="images/slot/ame.png" alt=""></a>
        </li>
        <li class="list-inline-item listLogo">
          <a href="database/slot_gateway.php?slot=spade_gaming"><img src="images/slot/spade.png" alt=""></a>
        </li>
        <li class="list-inline-item listLogo">
          <a href="database/slot_gateway.php?slot=gamatron"><img src="images/slot/gamatron.png" alt=""></a>
        </li>
      </ul>

      <div class="col-12 text-center py-2">
        <?php if ($table_name == 'slotxo'): ?>
          <h2 class='c1'>SlotXO</h2>
        <?php elseif ($table_name == 'pg_slot'): ?>
          <h2 class='c1'>PG</h2>
        <?php elseif ($table_name == 'pg_slot'): ?>
          <h2 class='c1'>PG</h2>
        <?php elseif ($table_name == 'live_22'): ?>
          <h2 class='c1'>Live 22</h2>
        <?php elseif ($table_name == 'askmebet'): ?>
          <h2 class='c1'>Askmebet</h2>
        <?php elseif ($table_name == 'spade_gaming'): ?>
          <h2 class='c1'>Spade Gaming</h2>
        <?php elseif ($table_name == 'gamatron'): ?>
          <h2 class='c1'>Gamatron</h2>
        <?php elseif ($table_name == 'ameba'): ?>
          <h2 class='c1'>Ameba</h2>
        <?php endif; ?>
        <!-- <img src="resource/images/joker/jokerlogo.png" /> -->
      </div>
      <div class="row">
        <?php foreach ($slots as $slot) { ?>
          <div class="col-4 col-md-2 pr-1 mb-2">
            <div class="bgRoom text-center">
              <a href="#">
                <?php if ($slot['winrate'] > 80): ?>
                  <img src="<?php echo $slot["image"]; ?>" alt="" class="widthImg animated infinite pulse delay-2s"><br>
                <?php else: ?>
                  <img src="<?php echo $slot["image"]; ?>" alt="" class="widthImg"><br>
                <?php endif; ?>
                <?php if ($slot['winrate'] > 80): ?>
                  <div class="animated infinite pulse delay-2s">
                <?php else: ?>
                  <div>
                <?php endif; ?>

                <span class="linkBox"><?php echo $slot["name"]; ?></span><br>
                <small>อัตราการชนะ</small>

                <?php if ($slot['winrate'] > 80): ?>
                  <h4 class="c3"><?php echo $slot["winrate"]; ?>%</h4>
                  <div class="progress" style="height: 3px;">
                    <div class="progress-bar bgc3" role="progressbar" style="width: <?php echo $slot["winrate"]; ?>%;" aria-valuenow="<?php echo $slot["winrate"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                <?php elseif ($slot['winrate'] > 50): ?>
                  <h4 class="c1"><?php echo $slot["winrate"]; ?>%</h4>
                  <div class="progress" style="height: 3px;">
                    <div class="progress-bar bgc1" role="progressbar" style="width: <?php echo $slot["winrate"]; ?>%;" aria-valuenow="<?php echo $slot["winrate"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                <?php else: ?>
                  <h4 class="c2"><?php echo $slot["winrate"]; ?>%</h4>
                  <div class="progress" style="height: 3px;">
                    <div class="progress-bar bgc2" role="progressbar" style="width: <?php echo $slot["winrate"]; ?>%;" aria-valuenow="<?php echo $slot["winrate"]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                <?php endif; ?>
              </div>
              </a>
              <span class="divider1"><img src="images/divider.png" width="<?php echo $slot["winrate"]; ?>" alt=""></span>
              <span class="dividerTop"><img src="images/divider.png" width="<?php echo $slot["winrate"]; ?>" alt=""></span>
            </div>
          </div>
        <?php } ?>


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
