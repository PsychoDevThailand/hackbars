<div class="row">
		<div class="col">
			<a href="home"><img src="images/logo.png" alt="" class="logotop" width="150"></a>
		</div>
		<div class="col mt-2 text-right">
			<a href="home">
				<img src="images/icon-user.png" alt="" width="16">
				<span class="textUser"><?php echo $_SESSION['Username']; ?> </span>
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
						<span>คุณมียอดเครดิตสูตรคงเหลือ</span>

						<h2 class="numCredit"  id="navCredit" ></h2>
					</div>
					<div class="col-4">
						<a href="#" class="btnAddCredit" data-toggle="modal" data-target="#staticBackdrop">
							<img src="images/icon-wallet-btn.png" width="16" alt=""> เติมเครดิตสูตร
						</a>
					</div>
				</div>
				<span class="divider1"><img src="images/divider.png" width="250" alt=""></span>
			</div>
		</div>
	</div>

<br>
<div class="col-12">
  <h3 class="text-center">สูตรคาบาร่า</h3>
  <br>
    <ul class="list-inline trickList">

      <?php for ($i=0;$i<10;$i++) { ?>
        <?php if ($_SESSION['FormulaType']==$i+1): ?>
          <li class="list-inline-item bgTrick activeTrick">
        <?php else : ?>
          <li class="list-inline-item bgTrick">
        <?php endif; ?>


        <a class="" href="database/chgformula.php?type=<?php echo $i+1; ?>" >
          สูตรที่ <?php echo $i+1; ?>

        </a>
      </li>
      <?php } ?>


    </ul>
</div>
