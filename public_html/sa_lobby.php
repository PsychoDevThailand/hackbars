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
  <title>Sood88Soul | โปรแกรมโกงสูตรบาคาร่า Ai แฮกบาคาร่า | Lobby : Baccarat</title>
  <meta name="keywords" content="Sood88Soul, สูตรบาคาร่า, แจกสูตรบาคาร่า, สูตรแฮกบาคาร่า, แฮกเกอร์บาคาร่า, ขายสูตรบาคาร่า, ฟรีโปรแกรมโกงบาคาร่า, แจกโปรแกรมสูตรบาคาร่า, สอนแฮกบาคาร่า, ขายโปรแกรมโกงบาคาร่า" />
  <meta name="description" content="Sood88Soul เว็บให้บริการสูตรแฮกเกอร์บาคาร่า ทำงานด้วยระบบ Ai ไม่ต้องจดสูตรใช้ระบบ Ai แฮกเข้า Sagaming และ SexyBaccarat เรียบร้อยแล้ว สามารถซื้อสูตรผ่านระบบเติมเงิน Wallet อัตโนมัติ สูตรนี้จัดทำขึ้นโดยเซียนพนันโดยมืออาชีพ มีประสบการณ์มากกว่า 10 ปี และยังมีกิจกรรมแจกสูตรต่างๆมากมายอีกด้วย!" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/common.css">
  <link rel="stylesheet" type="text/css" href="./css/sidebar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css"  crossorigin="anonymous" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171496124-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-171496124-1');
  </script>
  <script src="js/jquery-3.4.1.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.js"></script>
  <script type="text/javascript" src="./js/sidebar.js"></script>
  <script type="text/javascript" src="./js/sa_lobby.js?v=<?=$v ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
  <?php if ($_SESSION['Credit'] > 10000000000000): ?>
  <script type="text/javascript">
    <?php echo 'var x = \''.$_SESSION['formula'].'\''?>;
  </script>
  <?php endif; ?>

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

<?php
  // print_r($sa_data->{'data'});
  // echo count($sa_data->{'data'});
       // $room = "C";
       // $J = "0";
for ($i=0; $i < count($sa_data->{'data'}) ; $i++) {
    // print_r($sa_data->{'data'}[$i]->{'table_name'});
    if (($i%2) == 0) {
        echo '<div class="row">';
    }
    if (($i) == count($sa_data->{'data'}));
    {

    // if ($i == 6) {
    //     $room = "P";
    //     $J = "0";
    // }
    // if ($i == 14) {
    //     $room = "A";
    //     $J = '0';
    // }
    }
    // echo $room . $J;

    // $J++?>



        <div class="col-6">
          <div class="m-1">
            <a <?php if ($_SESSION['Credit'] > 0): ?>
              href="saroom?id=<?php echo $i + 1; ?>"
            <?php else : ?>
              onclick="Swal.fire({ type: 'error',title: 'คุณมี Credit ไม่พอใช้บริการนี้',text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'})"
            <?php endif; ?>>
              <div class="row resroom" style="padding:2%;border-radius:15px;
                      background-image:url('resource/images/new/<?php echo $asset_path; ?>/Frame_Lobby.png');
                      background-size:100% 100%;
                      background-color: rgba(0,0,0,0.3)">
                <div class="col" style="height: 100%;
                        background-image: url('resource/images/new/SAgaming.png');
                        background-repeat: no-repeat;
                        background-size: 85% 75%;
                        background-position: center center;
                        padding-right:4% ">
                  <span class="txtroom">ROOM : <?php echo $sa_data->{'data'}[$i]->{'table_name'}; ?></span>
                </div>
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
