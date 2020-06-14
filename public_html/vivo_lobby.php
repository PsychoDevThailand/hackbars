<?php require 'database/session.php';
if ($_SESSION['Credit'] <= 0) {
    header('location: lobby.php');
    exit();
}
  $asset_path = "asset/".$_SESSION['FormulaType'];
  $v = '1.0.4';
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
  <title>Richbac.com | โปรแกรมโกงสูตรบาคาร่า Ai แฮกบาคาร่า | Lobby : Baccarat</title>
  <meta name="keywords" content="Richbac.com, สูตรบาคาร่า, แจกสูตรบาคาร่า, สูตรแฮกบาคาร่า, แฮกเกอร์บาคาร่า, ขายสูตรบาคาร่า, ฟรีโปรแกรมโกงบาคาร่า, แจกโปรแกรมสูตรบาคาร่า, สอนแฮกบาคาร่า, ขายโปรแกรมโกงบาคาร่า" />
  <meta name="description" content="Richbac.com เว็บให้บริการสูตรแฮกเกอร์บาคาร่า ทำงานด้วยระบบ Ai ไม่ต้องจดสูตรใช้ระบบ Ai แฮกเข้า Sagaming และ SexyBaccarat เรียบร้อยแล้ว สามารถซื้อสูตรผ่านระบบเติมเงิน Wallet อัตโนมัติ สูตรนี้จัดทำขึ้นโดยเซียนพนันโดยมืออาชีพ มีประสบการณ์มากกว่า 10 ปี และยังมีกิจกรรมแจกสูตรต่างๆมากมายอีกด้วย!" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/sidebar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"  crossorigin="anonymous" />
  <script src="js/jquery-3.4.1.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
  <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.js"></script>
  <script type="text/javascript" src="./js/sidebar.js"></script>
  <script type="text/javascript" src="./js/vivo_lobby.js?v=<?=$v ?>"></script>

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
      bottom: -5px;
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
  <?php if ($_SESSION['Credit'] > 10): ?>
  sessionStorage.setItem('formula', '<?php echo $_SESSION["formula"];?>' );
  sessionStorage.setItem('forType', '<?php echo $_SESSION["FormulaType"];?>' );
  <?php endif; ?>
  sessionStorage.setItem('sCode', '<?php echo $_SESSION["Session"];?>' );
  sessionStorage.setItem('Credit', '<?php echo $_SESSION["Credit"];?>' );
  </script>
</head>

<body style="background-image: url('resource/images/new/<?php echo $asset_path ?>/BG.png');">
  <?php
    include './resource/modal.php';
    include 'navbar.php';
  ?>



  <main class="content-wrapper">
    <div class="container-fluid">

      <div class="container" style="padding: 1%">

        <?php for ($i=0; $i < 10 ; $i++) {
      if (($i%2) == 0) {
          echo '<div class="row">';
      } ?>
			<div class="col-6">
          <div class="m-1">
            <a <?php if ($_SESSION['Credit'] > 0): ?>
              href="vivoroom?id=<?php echo $i+1; ?>"
            <?php else : ?>
              onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
            <?php endif; ?>>
              <div class="row resroom" style="padding:2%;border-radius:15px;
                      background-image:url('resource/images/new/<?php echo $asset_path; ?>/Frame_Lobby.png');
                      background-size:100% 100%;
                      background-color: rgba(0,0,0,0.3)">
                <div class="col" style="height: 100%;
                        background-image: url('resource/images/new/VIVOgaming.png');
                        background-repeat: no-repeat;
                        background-size: 70% 70%;
                        background-position: center top;
                        padding-right:4% ">
				  <span class="txtroom">TABLE : <?php echo str_pad($i+1, 3, '0', STR_PAD_LEFT); ?></span></div>
                <div class="col-6 col-md-5 text-center" style="background-image: url('resource/images/new/tb_line.png');
                        background-repeat: no-repeat;
                        background-size: 2px 100%;
						background-position: center left;height: 100%;position:relative;">
                  <div class="chancetxt">อัตราการชนะ</div>
                  <span id='<?php echo "winrate".$i ?>' class="showtext" style="color: khaki;">รอผล</span>
                </div>
              </div>
            </a>
          </div>


        </div>





		<!-- #################################################################################### -->

        <?php if (($i%2) != 0) {
          echo '</div>';
      }
  } ?>

      </div>

    </div>
  </main>
  <script type="text/javascript">
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

</body>

</html>
