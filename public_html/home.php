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
  <title>Sood88Soul | โปรแกรมโกงสูตรบาคาร่า Ai แฮกบาคาร่า | Lobby : Baccarat</title>
  <meta name="keywords" content="Sood88Soul, สูตรบาคาร่า, แจกสูตรบาคาร่า, สูตรแฮกบาคาร่า, แฮกเกอร์บาคาร่า, ขายสูตรบาคาร่า, ฟรีโปรแกรมโกงบาคาร่า, แจกโปรแกรมสูตรบาคาร่า, สอนแฮกบาคาร่า, ขายโปรแกรมโกงบาคาร่า" />
    <meta name="description" content="Sood88Soul เว็บให้บริการสูตรแฮกเกอร์บาคาร่า ทำงานด้วยระบบ Ai ไม่ต้องจดสูตรใช้ระบบ Ai แฮกเข้า Sagaming และ SexyBaccarat เรียบร้อยแล้ว สามารถซื้อสูตรผ่านระบบเติมเงิน Wallet อัตโนมัติ สูตรนี้จัดทำขึ้นโดยเซียนพนันโดยมืออาชีพ มีประสบการณ์มากกว่า 10 ปี และยังมีกิจกรรมแจกสูตรต่างๆมากมายอีกด้วย!" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="./css/userlogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"  crossorigin="anonymous" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171496124-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-171496124-1');
  </script>
  <script src="js/jquery-3.4.1.js"  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
  <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.js"></script>
  <script type="text/javascript" src="./js/sidebar.js"></script>
  <script type="text/javascript" src="./js/home.js"></script>

  <style type="text/css">
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
  </style>
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

<body style="background-image: url('resource/images/cas/BG.png');">
  <?php
    include './resource/modal.php';
    include 'navbar2.php';
  ?>



  <main class="content-wrapper2">
    <div class="container-fluid">

      <div class="container">
        <div class="row">

          <?php if ($_SESSION['API_SA']): ?>
          <div class="col-12 col-sm-6 game_colum">
            <a <?php if ($_SESSION['Credit'] > 0): ?>
			        href="salobby"
			         <?php else : ?>
              href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
            <?php endif;  ?>>

              <div class="game_div">
                <img src="resource/images/cas/Game-sa.png" style="width: 100%;">
              </div>
            </a>
          </div>
        <?php else: ?>
          <div class="col-12 col-sm-6 game_colum">
            <a
              href="#" onclick="Swal.fire({ type: 'error',title: 'ระบบปิดปรับปรุง',text: 'ขออภัยระบบปิดปรับปรุง'})"
            >
              <div class="game_div">
                <img src="resource/images/cas/Game-sa.png" style="width: 100%;">
              </div>
            </a>
          </div>
        <?php endif; ?>


        <?php if ($_SESSION['API_SE']):?>
          <div class="col-12 col-sm-6 game_colum">
            <a <?php if ($_SESSION['Credit'] > 0): ?>
			href="selobby"
			<?php else : ?>
             href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
            <?php endif;  ?>>
              <div class="game_div">
                <img src="resource/images/cas/Game-se.png" style="width: 100%;">
              </div>
            </a>
          </div>
        <?php else: ?>
          <div class="col-12 col-sm-6 game_colum">
            <a
              href="#" onclick="Swal.fire({ type: 'error',title: 'ระบบปิดปรับปรุง',text: 'ขออภัยระบบปิดปรับปรุง'})"
             >
              <div class="game_div">
                <img src="resource/images/cas/Game-se.png" style="width: 100%;">
              </div>
            </a>
          </div>
        <?php endif; ?>

        <div class="col-12 col-sm-6 game_colum">
          <a
            <?php if ($_SESSION['Credit'] > 0): ?>
              href="vivolobby"
            <?php else: ?>
              href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
            <?php endif; ?>
          >
            <div class="game_div">
              <img src="resource/images/cas/Game-vivo.png" style="width: 100%;">
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 game_colum">
          <a
            <?php if ($_SESSION['Credit'] > 0): ?>
              href="wmlobby"
            <?php else: ?>
              href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
            <?php endif; ?>
          >
            <div class="game_div">
              <img src="resource/images/cas/Game-wm.png" style="width: 100%;">
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 game_colum">
          <a
              href="slots"
          >
            <div class="game_div">
              <img src="resource/images/cas/Game-slots.png" style="width: 100%;">
            </div>
          </a>
        </div>

        <div class="col-12 col-sm-6 game_colum">
          <a
            <?php if ($_SESSION['Credit'] >= 20): ?>
              href="database/football_gateway.php"
            <?php else: ?>
              href="#" onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
            <?php endif; ?>
          >
            <div class="game_div">
              <img src="resource/images/cas/Game-football.png" style="width: 100%;">
            </div>
          </a>
        </div>




        </div>

        <br>
        <?php
          if ($_SESSION['Join']):
        ?>
        <div class="alert alert-light" role="alert">
          <h4 class="alert-heading text-info text-info">วิธีรับเครดิตฟรี</h4>
          <hr>
          <p> พิเศษสำหรับลูกค้า MM88SOUL เพียงท่านฝากเงินสำหรับเล่นเกมกับ MM88SOUL ก็สามารถรับเครดิตใช้งานสูตรฟรี! ทันที</p>
          <p>*พิเศษสำหรับเติมครั้งแรกรับเครดิตสูตรบาคาร่า 2 เท่าของยอดที่เติมสำหรับเล่น* ไปเติมเงิน คลิ๊ก!
            <a target='_blank' href="http://line.me/ti/p/@getv3">
              <span style="font-family: 'Helvet';font-size: 34px; color: #000;">
                <img src="resource/images/new/i_line.png" height="30" style="padding-bottom: 1%;">
                Line : <?php echo $contact; ?>
              </span>
            </a>
          </p>
          <p class='text-danger'><strong>*หมายเหตุ* เครดิตของสูตรบาคาร่าจะเข้าภายใน 5 นาทีหลังจากได้รับเครดิต MM88SOUL</strong></p>
        </div>
        <?php else: ?>
          <div class="alert alert-light" role="alert">
            <h4 class="alert-heading text-info">วิธีรับเครดิตฟรี</h4>
            <hr>
            <p>เครดิตหมดใช่หรือไม่ ? พิเศษหากท่านต้องการเครดิตสำหรับสูตรบาคาร่า เพียงท่านสมัครเล่นเกมกับเรา MM88SOUL เพียงเติมเงินครั้งแรก เติมเท่าไหร่ได้รับเครดิตสำหรับสูตรบาคาร่า 2 เท่า ของยอดเติมทันที (เฉพาะครั้งแรก) สมัครเลย คลิ๊ก!
              <a target='_blank' href="http://line.me/ti/p/~<?php echo $contact; ?>">
                <span style="font-family: 'Helvet';font-size: 34px; color: #000;">
                  <img src="resource/images/new/i_line.png" height="30" style="padding-bottom: 1%;">
                  Line : <?php echo $contact; ?>
                </span>
              </a>
            </p>
            <p class='text-danger'><strong>*หมายเหตุ* เครดิตของสูตรบาคาร่าจะเข้าภายใน 5 นาทีหลังจากได้รับเครดิต MM88SOUL</strong></p>
          </div>
        <?php endif ?>
      </div>

    </div>
  </main>
</body>

</html>
