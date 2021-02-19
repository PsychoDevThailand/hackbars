<?php require 'database/session.php';
  require 'database/api_sa_status.php';
if ($_SESSION['Credit'] <= 0) {
    header('location: lobby.php');
    exit();
}
  $asset_path = "asset/".$_SESSION['FormulaType'];
  $v = '1.1.0';
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
    <script type="text/javascript" src="./js/sa_lobby.js?v=<?=$v ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
		<!-- <script src="js/jquery-3.5.1.min.js"></script> -->
		<script src="js/popper.min.js"></script>


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
		include 'navbar.php';
	?>

  <main class="content-wrapper">
    <div class="container-fluid">
      <div class="container" style="padding: 1%">
        <div class="row">
        <div class="col-12">
          <div class="">
              <div class="col-12 mb-2 text-center">
                <img src="images/logo-sexy.png" alt="" width="170">
              </div>

                      <?php for ($i=0; $i < 10 ; $i++) {
                    if (($i%2) == 0) {
                        echo '<div class="row">';
                    } ?>
                    <div class="col-md-6 col-12 pr-1 mb-2">
                      <a
                      <?php if ($_SESSION['Credit'] > 0): ?>
                        href="seroom?id=<?php echo $i + 1; ?>"
                      <?php else : ?>
                        onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
                      <?php endif; ?>>
                      <div class="bgRoom">
                        <div class="row">
                          <div class="col-6">
                            <small>ROOM</small>
                            <h4 class="text-white"><?php echo str_pad($i+1, 3, '0', STR_PAD_LEFT); ?></h4>
                            <span  class="btnPlay">เข้าเล่น <img src="images/icon-play.png" alt="" class="iconPlay"></span>
                          </div>
                          <div class="col-6 pl-0 text-right">
                            <h5>อัตราการชนะ</h5>
                            <h2 id='<?php echo "winrate".$i ?>' class="showtext" style="color: khaki;">รอผล</h2>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                      <?php if (($i%2) != 0) {
                        echo '</div>';
                    }
                } ?>



            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- <script type="text/javascript">
    window.onload = function() {
        document.addEventListener("contextmenu", function(e){
            e.preventDefault();
        }, false);
        document.addEventListener("keydown", function(e) {
            //document.onkeydown = function(e) {
            // "F12" key
            if (event.keyCode == 123) {
                disabledEvent(e);
            }
        }, false);
        function disabledEvent(e){
            if (e.stopPropagation){
                e.stopPropagation();
            } else if (window.event){
                window.event.cancelBubble = true;
            }
            e.preventDefault();
            return false;
        }
    };
    </script>
<script type="text/javascript">
        let div = document.createElement('div');
        let loop = setInterval(() => {
            console.log(div);
            console.clear();
        });
        Object.defineProperty(div, "id", {
            get: () => {
                clearInterval(loop);
                window.location = "./database/logout.php";
            }
        });
    </script>
</div> -->


<footer>
	<img src="images/logo.png" alt="" width="150">
	<p>Copyright 2019-2020 all rigreserved. Powered by SAHacker</p>
</footer>

</body>
</html>
