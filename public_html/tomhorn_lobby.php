<?php
require 'database/session.php';
require 'database/getlog_tomhorn.php';
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
  <title>Richbac.com | โปรแกรมโกงสูตรบาคาร่า Ai แฮกบาคาร่า | Lobby : Baccarat</title>
  <meta name="keywords" content="Richbac.com, สูตรบาคาร่า, แจกสูตรบาคาร่า, สูตรแฮกบาคาร่า, แฮกเกอร์บาคาร่า, ขายสูตรบาคาร่า, ฟรีโปรแกรมโกงบาคาร่า, แจกโปรแกรมสูตรบาคาร่า, สอนแฮกบาคาร่า, ขายโปรแกรมโกงบาคาร่า" />
    <meta name="description" content="Richbac.com เว็บให้บริการสูตรแฮกเกอร์บาคาร่า ทำงานด้วยระบบ Ai ไม่ต้องจดสูตรใช้ระบบ Ai แฮกเข้า Sagaming และ SexyBaccarat เรียบร้อยแล้ว สามารถซื้อสูตรผ่านระบบเติมเงิน Wallet อัตโนมัติ สูตรนี้จัดทำขึ้นโดยเซียนพนันโดยมืออาชีพ มีประสบการณ์มากกว่า 10 ปี และยังมีกิจกรรมแจกสูตรต่างๆมากมายอีกด้วย!" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="./css/userlogin.css">
  <link rel="stylesheet" type="text/css" href="./css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"  crossorigin="anonymous" />
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
          <div class="col-12 text-center py-2">
            <img src="resource/images/slot/tomhornlogo.png" />
          </div>
        </div>

        <div class="row">
          <?php foreach ($slots as $slot) { ?>
            <div class="col-6 col-sm-3 pt-2">
              <div class="card" style="background: black;">
                <?php if ($slot['winrate'] > 80): ?>
                  <img src="<?php echo $slot["image"]; ?>" class="card-img-top animated infinite pulse delay-2s" style="height: 150px;" />
                <?php else: ?>
                  <img src="<?php echo $slot["image"]; ?>" class="card-img-top" style="height: 150px;" />
                <?php endif; ?>
                <?php if ($slot['winrate'] > 80): ?>
                  <div class="card-body text-center animated infinite pulse delay-2s">
                <?php else: ?>
                  <div class="card-body text-center">
                <?php endif; ?>
                  <h5 class="card-title" style="color: white;"><?php echo $slot["name"]; ?></h5>
                  <h5 class="card-title" style="color: white;">อัตราชนะ</h5>
                  <h4 class="card-title" style="color: yellow;"><?php echo $slot["winrate"]; ?>%</h4>
                  <div class="progress">
                    <?php if ($slot['winrate'] > 80): ?>
                      <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $slot['winrate']; ?>%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                        <?php echo $slot["winrate"]; ?>%
                      </div>
                    <?php elseif ($slot['winrate'] > 50): ?>
                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $slot['winrate']; ?>%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                        <?php echo $slot["winrate"]; ?>%
                      </div>
                    <?php else: ?>
                      <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $slot['winrate']; ?>%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                        <?php echo $slot["winrate"]; ?>%
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

      </div>
    </div>
  </main>
</body>

</html>
