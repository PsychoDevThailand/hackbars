<div class="row">
		<div class="col">
			<a href="index.html"><img src="images/logo.png" alt="" class="logotop" width="150"></a>
		</div>
		<div class="col mt-2 text-right">
			<a href="profile.html">
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
						<span>คุณมียอดเครดิตคงเหลือ</span>

						<h2 class="numCredit"  id="navCredit" ></h2>
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
