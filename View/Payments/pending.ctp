<header class="container-fluid paymentHeader">
	<section class="payment">
		<div class="logo-holder">
			<a href="<?php echo $this->webroot;?>"> <img class="" src="<?php echo $this->webroot;?>img/Logo-Home.png"></a>
		</div>
	</section>
</header>

<div class="container success_container" style ="position:relative;">
	<div style ="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); -moz-transform:translate(-50%,-50%); -webkit-transform:translate(-50%,-50%); width:100%;">

		<div class="success_message" style="background-color:#121317; color:#fff;">
			<span> <?php echo __("Your payment is being processed , in a few moments receive an email with information.") ?></span>
		</div>

		<div class="back-btn">
			<a href="<?php echo $this->webroot; ?>"><button class="btn btn-primary"><?php echo __("Back") ?></button></a>
		</div>
	</div>
</div>

<footer class="clearfix">
		<section class="footer">
			<div class="social-net" style="float:left;">
				<div class="right resp-opt">
					<img onclick="window.open('https://www.facebook.com/3dlinkVzla');" src="<?php echo $this->webroot;?>img/facebook-ico.png">
					<img onclick="window.open('https://www.instagram.com/3dlinkvzla/');" src="<?php echo $this->webroot;?>img/instagram-ico.png" style="padding-left: 10px;">
				</div>
			</div>
			<div class="copyright" style="float:left;">
				<p class="right">All rights reserved, 3D Link. 2016</p>
			</div>
		</section>
</footer>

<script type="text/javascript">
$(document).ready(function(){
	$(".success_container").height(window.innerHeight - $("header").height() - 90 );

	$(window).resize(function(){
		$(".success_container").height(window.innerHeight - $("header").height() - 90 );
	});
})

</script>