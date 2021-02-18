

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
	<!-- BANNER -->
	<div class="row">
		<div class="col-12">
			<img src="images/img-main-banner.png" alt="" class="img-fluid">
		</div>
		<div class="col pr-0">
			<img src="images/img-text-ads.png" width="200" alt="">
		</div>
		<div class="col text-center">
			<span class="text-white">เติมเลยคลิ๊กแอดไลน์</span>
			<a href="http://line.me/ti/p/~<?php echo $line_contact; ?>" class="lineBtn">
				<img src="images/icon-line-btn.png" alt=""> <?php echo $line_contact; ?>
			</a>
		</div>
	</div>


	<div class="row mt-3 mb-3">


		<?php if ($_SESSION['API_SA']): ?>
			<div class=" col-6 col-md-3 mb-3">
			<a
				class="adsBox ads1"
				<?php if ($_SESSION['Credit'] > 0): ?>
					href="salobby"
					 <?php else : ?>
					href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
				<?php endif;  ?>>

				<span class="divider2 left"><img src="images/divider-2.png" alt=""></span>
				<span class="divider2 right"><img src="images/divider-2.png" alt=""></span>
				<div class="textAds">
					<img src="images/logo-sa.png" alt="" class="img-fluid">
					<span>SA Gaming คาสิโนออนไลน์ที่ดีที่สุดในไทย</span>
				</div>
				<img src="images/char-1.png" alt="" class="imgAds1">
			</a>
		</div>
	<?php else: ?>
		<div class=" col-6 col-md-3 mb-3">
			<a
				href="#" onclick="Swal.fire({ type: 'error',title: 'ระบบปิดปรับปรุง',text: 'ขออภัยระบบปิดปรับปรุง'})"
				class="adsBox ads1"
			>
				<span class="divider2 left"><img src="images/divider-2.png" alt=""></span>
				<span class="divider2 right"><img src="images/divider-2.png" alt=""></span>
				<div class="textAds">
					<img src="images/logo-sa.png" alt="" class="img-fluid">
					<span>SA Gaming คาสิโนออนไลน์ที่ดีที่สุดในไทย</span>
				</div>
				<img src="images/char-1.png" alt="" class="imgAds1">
			</a>
		</div>
	<?php endif; ?>

	<?php if ($_SESSION['API_SE']):?>
		<div class=" col-6 col-md-3">
			<a
				class="adsBox ads2"
				<?php if ($_SESSION['Credit'] > 0): ?>
					href="selobby"
				<?php else : ?>
					 href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
				<?php endif;  ?>>
					<span class="divider2 left"><img src="images/divider-2.png" alt=""></span>
					<span class="divider2 right"><img src="images/divider-2.png" alt=""></span>
					<div class="textAds">
					 <img src="images/logo-sexy.png" alt="" class="img-fluid">
					 <span>คาสิโนออนไลน์ ที่มีสาวสวยสุดเซ็กซี่แจกไพ่ให้ท่าน</span>
					</div>
					<img src="images/char-2.png" alt="" class="imgAds2">
				</a>
			</div>
	<?php else: ?>
		<div class=" col-6 col-md-3">
			<a
				class="adsBox ads2"
				href="#" onclick="Swal.fire({ type: 'error',title: 'ระบบปิดปรับปรุง',text: 'ขออภัยระบบปิดปรับปรุง'})"
			 >
			 <span class="divider2 left"><img src="images/divider-2.png" alt=""></span>
			 <span class="divider2 right"><img src="images/divider-2.png" alt=""></span>
			 <div class="textAds">
				 <img src="images/logo-sexy.png" alt="" class="img-fluid">
				 <span>คาสิโนออนไลน์ ที่มีสาวสวยสุดเซ็กซี่แจกไพ่ให้ท่าน</span>
			 </div>
			 <img src="images/char-2.png" alt="" class="imgAds2">
			</a>
		</div>
	<?php endif; ?>

	<!-- <div class=" col-6 col-md-3">
		<a
			class="adsBox ads4"
		<?php if ($_SESSION['Credit'] > 0): ?>
			href="https://gurubac.com/rooms/1" target="_blank"
		<?php else : ?>
		 href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
		<?php endif;  ?>>
		<span class="divider2 left"><img src="images/divider-2.png" alt=""></span>
		<span class="divider2 right"><img src="images/divider-2.png" alt=""></span>
		<div class="textAds">
			<img src="images/pretty.png" alt="" class="img-fluid">
			<span>ผู้ให้บริการเกมคาสิโนระดับโลก ที่มีมาตรฐาน</span>
		</div>
		<img src="images/char-4.png" alt="" class="imgAds4">
		</a>
	</div> -->


		<!-- AD5 -->
		<div class=" col-6 col-md-3">
			<a
      class="adsBox ads5"
      <?php if ($_SESSION['Credit'] >= 20): ?>
        href="database/slot_gateway.php?slot=slotxo"
      <?php else: ?>
        href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
      <?php endif; ?>
      >
				<span class="divider2 left"><img src="images/divider-2.png" alt=""></span>
				<span class="divider2 right"><img src="images/divider-2.png" alt=""></span>
				<div class="textAds">
					<h3>SLOT GAMING</h3>
					<span>เกมส์สล๊อตออนไลน์ เล่นง่ายได้เงินจริง</span>
				</div>
				<img src="images/char-5.png" alt="" class="imgAds5">
			</a>
		</div>

		<div class=" col-6 col-md-3">
			<a
				class="adsBox ads6"
				<?php if ($_SESSION['Credit'] >= 20): ?>
					href="database/football_gateway.php"
				<?php else: ?>
					href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
				<?php endif; ?>
			>
			<span class="divider2 left"><img src="images/divider-2.png" alt=""></span>
			<span class="divider2 right"><img src="images/divider-2.png" alt=""></span>
			<div class="textAds">
				<h3>วิเคราะห์ผลบอล</h3>
				<span>โปรแกรม AI ทำนาย ผลบอลแม่นยำ</span>
			</div>
			<img src="images/char-6.png" alt="" class="imgAds6">
			</a>
		</div>

	</div>

</div>


<footer>
	<img src="images/logo.png" alt="" width="150">
	<p>Copyright 2019-2020 all rigreserved. Powered by SAHacker</p>
</footer>

</body>
</html>
